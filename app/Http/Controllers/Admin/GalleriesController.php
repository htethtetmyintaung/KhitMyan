<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Galleries;
use App\Http\Requests\Admin\GalleriesRequest;
use App\Http\Requests\Admin\UpdateGalleriesRequest;

class GalleriesController extends Controller
{
    Public function index()
    {
        $galleries = Galleries::paginate(5);

        return view('admin.Galleries.index',compact('galleries'));
    }

    Public function create()
    {
        $galleries = Galleries::all();
        return view('admin.Galleries.create',compact('galleries'));

    }

    Public function store(GalleriesRequest $request)
    {
        $data = $request->validated();
        $galleries = new Galleries;
        $galleries->title_en = $data['title_en'];
        $galleries->title_my = $data['title_my'];
        $galleries->title_ja = $data['title_ja'];
        $galleries->sub_title_en = $data['sub_title_en'];
        $galleries->sub_title_my = $data['sub_title_my'];
        $galleries->sub_title_ja = $data['sub_title_ja'];
        $galleries->description_en = $data['description_en'];
        $galleries->description_my = $data['description_my'];
        $galleries->description_ja = $data['description_ja'];
        $galleries->created_by = Auth::user()->id;
        $galleries->save();

        return redirect('admin/Galleries/index')->with('message','Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $galleries = Galleries::find($content_id);
        return view('admin.Galleries.edit',compact('galleries'));
    }

    Public function update(UpdateGalleriesRequest $request, $content_id)
    {
        $data = $request->validated();
        $galleries = Galleries::find($content_id);
        $galleries->title_en = $data['title_en'];
        $galleries->title_my = $data['title_my'];
        $galleries->title_ja = $data['title_ja'];
        $galleries->sub_title_en = $data['sub_title_en'];
        $galleries->sub_title_my = $data['sub_title_my'];
        $galleries->sub_title_ja = $data['sub_title_ja'];
        $galleries->description_en = $data['description_en'];
        $galleries->description_my = $data['description_my'];
        $galleries->description_ja = $data['description_ja'];
        $galleries->created_by = Auth::user()->id;
        $galleries->update();

        return redirect('admin/Galleries/index')->with('message','Content Added Successfully');
    }

    Public function destroy($content_id)
    {
        $galleries = Galleries::find($content_id);
        if ($galleries) 
        {
            $galleries->main_galleries()->detach();
            $galleries->delete();
            return redirect('admin/Galleries/index')->with('message','Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Galleries/index')->with('message','No Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $galleries = Galleries::find($content_id);
        return view('admin.Galleries.view',compact('galleries'));
    }

}
