<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\SubGalleriesRequest;
use App\Http\Requests\Admin\UpdateSubGalleriesRequest;
use App\Models\SubGalleries;
use App\Models\MainGalleries;

class SubGalleriesController extends Controller
{
    Public function index()
    {
        $sub_galleries = SubGalleries::paginate(5);

        return view('admin.Subgalleries.index',compact('sub_galleries'));
    }

    Public function create()
    {
        $sub_galleries = SubGalleries::all();
        $main_galleries = MainGalleries::all();
        return view('admin.Subgalleries.create',compact('sub_galleries','main_galleries'));
    }

    Public function store(SubGalleriesRequest $request)
    {
        $data = $request->validated();
        $sub_galleries = new SubGalleries;
        $sub_galleries->title_en = $data['title_en'];
        $sub_galleries->description_en = $data['description_en'];
        $sub_galleries->title_my = $data['title_my'];
        $sub_galleries->description_my = $data['description_my'];
        $sub_galleries->title_ja = $data['title_ja'];
        $sub_galleries->description_ja = $data['description_ja'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/subgalleries/', $filename);
            $sub_galleries->image = $filename;
        }

        $sub_galleries->created_by = Auth::user()->id;
        $sub_galleries->save();

        $sub_galleries->main_sub_galleries()->attach($request->sub_gallery_id);

        return redirect('admin/Subgalleries/index')->with('message','Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $sub_galleries = SubGalleries::find($content_id);
        return view('admin.Subgalleries.edit',compact('sub_galleries'));
    }

    Public function update(UpdateSubGalleriesRequest $request,$content_id)
    {
        $data = $request->validated();
        $sub_galleries = SubGalleries::find($content_id);
        $sub_galleries->title_en = $data['title_en'];
        $sub_galleries->description_en = $data['description_en'];
        $sub_galleries->title_my = $data['title_my'];
        $sub_galleries->description_my = $data['description_my'];
        $sub_galleries->title_ja = $data['title_ja'];
        $sub_galleries->description_ja = $data['description_ja'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/subgalleries/'.$sub_galleries->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/subgalleries/', $filename);
            $sub_galleries->image = $filename;
        }

        $sub_galleries->created_by = Auth::user()->id;
        $sub_galleries->update();

        $sub_galleries->main_sub_galleries()->sync($request->sub_gallery_id);

        return redirect('admin/Subgalleries/index')->with('message','Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $sub_galleries = SubGalleries::find($content_id);
        if ($sub_galleries) 
        {
            $sub_galleries->main_sub_galleries()->detach();
            $sub_galleries->delete();
            return redirect('admin/Subgalleries/index')->with('message','Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Subgalleries/index')->with('message','No Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $sub_galleries = SubGalleries::find($content_id);
        return view('admin.Subgalleries.view',compact('sub_galleries'));
    }
}
