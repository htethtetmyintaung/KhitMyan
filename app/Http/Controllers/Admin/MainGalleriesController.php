<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MainGalleriesRequest;
use App\Http\Requests\Admin\UpdateMainGalleriesRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\MainGalleries;
use App\Models\Galleries;

class MainGalleriesController extends Controller
{
    Public function index()
    {
        $main_galleries = MainGalleries::paginate(5);

        return view('admin.Maingalleries.index',compact('main_galleries'));
    }

    Public function create()
    {
        $main_galleries = MainGalleries::all();
        $galleries = Galleries::all();
        return view('admin.Maingalleries.create',compact('main_galleries','galleries'));
    }

    Public function store(MainGalleriesRequest $request)
    {
        $data = $request->validated();
        $main_galleries = new MainGalleries;
        $main_galleries->title_en = $data['title_en'];
        $main_galleries->description_en = $data['description_en'];
        $main_galleries->title_my = $data['title_my'];
        $main_galleries->description_my = $data['description_my'];
        $main_galleries->title_ja = $data['title_ja'];
        $main_galleries->description_ja = $data['description_ja'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/maingalleries/', $filename);
            $main_galleries->image = $filename;
        }

        $main_galleries->created_by = Auth::user()->id;
        $main_galleries->save();

        $main_galleries->galleries()->attach($request->main_gallery_id);

        return redirect('admin/Maingalleries/index')->with('message','Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $main_galleries = MainGalleries::find($content_id);
        $galleries = Galleries::all();
        return view('admin.Maingalleries.edit',compact('main_galleries','galleries'));
    }

    Public function update(UpdateMainGalleriesRequest $request,$content_id)
    {
        $data = $request->validated();
        $main_galleries = MainGalleries::find($content_id);
        $main_galleries->title_en = $data['title_en'];
        $main_galleries->description_en = $data['description_en'];
        $main_galleries->title_my = $data['title_my'];
        $main_galleries->description_my = $data['description_my'];
        $main_galleries->title_ja = $data['title_ja'];
        $main_galleries->description_ja = $data['description_ja'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/maingalleries/'.$main_galleries->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/aboutus/', $filename);
            $main_galleries->image = $filename;
        }

        $main_galleries->created_by = Auth::user()->id;
        $main_galleries->update();

        $main_galleries->galleries()->sync($request->main_gallery_id);

        return redirect('admin/Maingalleries/index')->with('message','Content Added Successfully');
    }

    Public function destroy($content_id)
    {
        
        $main_galleries = MainGalleries::find($content_id);
        if ($main_galleries) 
        {
            $main_galleries->galleries()->detach();
            $main_galleries->delete();
            return redirect('admin/Maingalleries/index')->with('message','Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Maingalleries/index')->with('message','No Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $main_galleries = MainGalleries::find($content_id);
        return view('admin.Maingalleries.view',compact('main_galleries'));
    }

}
