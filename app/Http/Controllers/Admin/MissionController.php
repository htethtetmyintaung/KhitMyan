<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mission;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\MissionRequest;
use App\Http\Requests\Admin\UpdateMissionRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class MissionController extends Controller
{
    Public function index()
    {
        $contents = Mission::all();
        return view('admin.Mission.index',compact('contents'));
    }

    Public function create()
    {
        $services = Service::all();
        return view('admin.Mission.create',compact('services'));
    }

    Public function store(MissionRequest $request)
    {
        
        $data = $request->validated();
        $mission = new Mission;
        $mission->service_id = $data['service_id'];
        $mission->title_en = $data['title_en'];
        $mission->title_my = $data['title_my'];
        $mission->title_ja = $data['title_ja'];
        $mission->subtitle_en = $data['subtitle_en'];
        $mission->subtitle_my = $data['subtitle_my'];
        $mission->subtitle_ja = $data['subtitle_ja'];
        $mission->description_en = $data['description_en'];
        $mission->description_my = $data['description_my'];
        $mission->description_ja = $data['description_ja'];

        if($request->hasfile('cover_image')){
            $file = $request->file('cover_image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/mission/cover/', $filename);
            $mission->cover_image = $filename;
        }

        $slider = [];
        if($request->hasfile('slide_image'))
        {
            foreach($request->file('slide_image') as $slide)
            {
                $name = time().rand(1,50).'.'.$slide->getClientOriginalExtension();
                $slide->move('uploads/mission/slider/', $name);
                $slider[] = $name;
            } 
        }
        $mission->slide_image =implode(',', $slider);
        

        $mission->created_by = Auth::user()->id;
        $mission->save();

        return redirect('admin/Mission/index')->with('message','Mission Added Successfully');
    }

    Public function edit($content_id)
    {
        $mission = Mission::find($content_id);
        return view('admin.Mission.edit', compact('mission'));
    }

    Public function update(UpdateMissionRequest $request, $content_id)
    {
        $data = $request->validated();
        $mission = Mission::find($content_id);
        $mission->title_en = $data['title_en'];
        $mission->title_my = $data['title_my'];
        $mission->title_ja = $data['title_ja'];
        $mission->subtitle_en = $data['subtitle_en'];
        $mission->subtitle_my = $data['subtitle_my'];
        $mission->subtitle_ja = $data['subtitle_ja'];
        $mission->description_en = $data['description_en'];
        $mission->description_my = $data['description_my'];
        $mission->description_ja = $data['description_ja'];

        if($request->hasfile('cover_image')) {
            
            $destination = 'uploads/mission/cover/'.$mission->cover_image;
            if(File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('cover_image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/mission/cover/', $filename);
            $mission->cover_image = $filename;

        }
        
        $slider = [];
        if($request->hasfile('slide_image'))
        {
            $destination = 'uploads/mission/slider/';
            if(File::exists($destination)) {
                File::cleanDirectory($destination);
            }
            
            foreach($request->file('slide_image') as $slide)
            {
                $name = time().rand(1,50).'.'.$slide->getClientOriginalExtension();
                $slide->move('uploads/mission/slider/', $name);
                $slider[] = $name;
            } 

            $mission->slide_image =implode(',', $slider);
        }
        

        $mission->created_by = Auth::user()->id;
        $mission->update();

        return redirect('admin/Mission/index')->with('message','Mission Updated Successfully');

    }

    Public function destroy($content_id)
    {
        $mission = Mission::find($content_id);
        if ($mission) 
        {
            $mission->delete();
            return redirect('admin/Mission/index')->with('message','Mission Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Mission/index')->with('message','No Mission Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $mission = Mission::find($content_id);
        return view('admin.Mission.view',compact('mission'));
    }
}
