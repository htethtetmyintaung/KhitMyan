<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vision;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\VisionRequest;
use App\Http\Requests\Admin\UpdateVisionRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class VisionController extends Controller
{
    Public function index()
    {
        $contents = Vision::all();
        return view('admin.Vision.index',compact('contents'));
    }

    Public function create()
    {
        $services = Service::all();
        return view('admin.Vision.create',compact('services'));
    }

    Public function store(VisionRequest $request)
    {
        
        $data = $request->validated();
        $vision = new Vision;
        $vision->service_id = $data['service_id'];
        $vision->title_en = $data['title_en'];
        $vision->title_my = $data['title_my'];
        $vision->title_ja = $data['title_ja'];
        $vision->subtitle_en = $data['subtitle_en'];
        $vision->subtitle_my = $data['subtitle_my'];
        $vision->subtitle_ja = $data['subtitle_ja'];
        $vision->description_en = $data['description_en'];
        $vision->description_my = $data['description_my'];
        $vision->description_ja = $data['description_ja'];

        if($request->hasfile('cover_image')){
            $file = $request->file('cover_image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/vision/cover/', $filename);
            $vision->cover_image = $filename;
        }

        $slider = [];
        if($request->hasfile('slide_image'))
        {
            foreach($request->file('slide_image') as $slide)
            {
                $name = time().rand(1,50).'.'.$slide->getClientOriginalExtension();
                $slide->move('uploads/vision/slider/', $name);
                $slider[] = $name;
            } 
        }
        $vision->slide_image =implode(',', $slider);
        

        $vision->created_by = Auth::user()->id;
        $vision->save();

        return redirect('admin/Vision/index')->with('message','Vision Added Successfully');
    }

    Public function edit($content_id)
    {
        $vision = Vision::find($content_id);
        return view('admin.Vision.edit', compact('vision'));
    }

    Public function update(UpdateVisionRequest $request, $content_id)
    {
        $data = $request->validated();
        $vision = Vision::find($content_id);
        $vision->title_en = $data['title_en'];
        $vision->title_my = $data['title_my'];
        $vision->title_ja = $data['title_ja'];
        $vision->subtitle_en = $data['subtitle_en'];
        $vision->subtitle_my = $data['subtitle_my'];
        $vision->subtitle_ja = $data['subtitle_ja'];
        $vision->description_en = $data['description_en'];
        $vision->description_my = $data['description_my'];
        $vision->description_ja = $data['description_ja'];

        if($request->hasfile('cover_image')) {
            
            $destination = 'uploads/vision/cover/'.$vision->cover_image;
            if(File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('cover_image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/vision/cover/', $filename);
            $vision->cover_image = $filename;

        }
        
        $slider = [];
        if($request->hasfile('slide_image'))
        {
            $destination = 'uploads/vision/slider/';
            if(File::exists($destination)) {
                File::cleanDirectory($destination);
            }
            
            foreach($request->file('slide_image') as $slide)
            {
                $name = time().rand(1,50).'.'.$slide->getClientOriginalExtension();
                $slide->move('uploads/vision/slider/', $name);
                $slider[] = $name;
            } 

            $vision->slide_image =implode(',', $slider);
        }
        

        $vision->created_by = Auth::user()->id;
        $vision->update();

        return redirect('admin/Vision/index')->with('message','Vision Updated Successfully');

    }

    Public function destroy($content_id)
    {
        $vision = Vision::find($content_id);
        if ($vision) 
        {
            $vision->delete();
            return redirect('admin/Vision/index')->with('message','Vision Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Vision/index')->with('message','No Vision Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $vision = Vision::find($content_id);
        return view('admin.Vision.view',compact('vision'));
    }
}
