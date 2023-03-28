<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Maincontents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ServiceRequest;
use App\Http\Requests\Admin\UpdateServiceRequest;

class ServiceController extends Controller
{
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $contents = Service::where(function($query) use ($keyword)
        {
            if ($keyword !=null) {
                $query->where('category_en','LIKE','%'.$keyword.'%')
                ->orWhere('category_my','LIKE','%'.$keyword.'%')
                ->orWhere('category_ja','LIKE','%'.$keyword.'%')->get();
            }
        })->paginate(5);
        return view('admin.Services.index',compact('contents'));
    }

    Public function create()
    {
        $main_contents = Maincontents::all();
        return view('admin.Services.create',compact('main_contents'));
    }

    Public function store(ServiceRequest $request) 
    {
        $data = $request->validated();
        $service = new Service;
        $service->main_content_id = $data['main_content_id'];
        $service->title_en = $data['title_en'];
        $service->description_en = $data['description_en'];
        $service->category_en = $data['category_en'];
        $service->title_my = $data['title_my'];
        $service->description_my = $data['description_my'];
        $service->category_my = $data['category_my'];
        $service->title_ja = $data['title_ja'];
        $service->description_ja = $data['description_ja'];
        $service->category_ja = $data['category_ja'];
        $service->created_by = Auth::user()->id;
        $service->save();

        return redirect('admin/Services/index')->with('message','Services Added Successfully');
    }

    Public function edit($content_id) 
    {
        $contents = Service::find($content_id);
        return view('admin.Services.edit', compact('contents'));
    }

    Public function update(UpdateServiceRequest $request, $content_id)
    {
        $data = $request->validated();

        $service = Service::find($content_id);
        $service->title_en = $data['title_en'];
        $service->description_en = $data['description_en'];
        $service->category_en = $data['category_en'];
        $service->title_my = $data['title_my'];
        $service->description_my = $data['description_my'];
        $service->category_my = $data['category_my'];
        $service->title_ja = $data['title_ja'];
        $service->description_ja = $data['description_ja'];
        $service->category_ja = $data['category_ja'];
        $service->created_by = Auth::user()->id;
        $service->update();

        return redirect('admin/Services/index')->with('message','Services Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = Service::find($content_id);
        if ($content) 
        {
            $content->delete();
            return redirect('admin/Services/index')->with('message','Services Deleted Successfully');
        }
        else
        {
            return redirect('admin/Services/index')->with('message','No Services Id Found');
        }
    }

    Public function show($content_id)
    {
        $service = Service::find($content_id);
        return view('admin.Services.view',compact('service'));
    }
}
