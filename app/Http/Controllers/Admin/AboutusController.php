<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Maincontents;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\AboutUsRequest;
use App\Http\Requests\Admin\UpdateAboutUsRequest;

class AboutusController extends Controller
{
    Public function index()
    {
        $contents = AboutUs::paginate(5);
        return view('admin.Aboutus.index',compact('contents'));
    }

    Public function create()
    {
        $main_contents = Maincontents::all();
        return view('admin.Aboutus.create',compact('main_contents'));
    }

    Public function store(AboutUsRequest $request)
    {
        $data = $request->validated();
        $content = new AboutUs;
        $content->main_content_id = $data['main_content_id'];
        $content->image_title_en = $data['image_title_en'];
        $content->image_description_en = $data['image_description_en'];
        $content->title_en = $data['title_en'];
        $content->sub_title_en = $data['sub_title_en'];
        $content->description_en = $data['description_en'];
        $content->image_title_my = $data['image_title_my'];
        $content->image_description_my = $data['image_description_my'];
        $content->title_my = $data['title_my'];
        $content->sub_title_my = $data['sub_title_my'];
        $content->description_my = $data['description_my'];
        $content->image_title_ja = $data['image_title_ja'];
        $content->image_description_ja = $data['image_description_ja'];
        $content->title_ja = $data['title_ja'];
        $content->sub_title_ja = $data['sub_title_ja'];
        $content->description_ja = $data['description_ja'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/aboutus/', $filename);
            $content->image = $filename;
        }

        $content->created_by = Auth::user()->id;
        $content->save();

        return redirect('admin/Aboutus/index')->with('message','About Us Content Added Successfully');
    }

    Public function edit($content_id) 
    {
        $contents = AboutUs::find($content_id);
        return view('admin.Aboutus.edit', compact('contents'));
    }

    Public function update(UpdateAboutUsRequest $request,$content_id)
    {
        $data = $request->validated();
        $content = AboutUs::find($content_id);
        $content->image_title_en = $data['image_title_en'];
        $content->image_description_en = $data['image_description_en'];
        $content->title_en = $data['title_en'];
        $content->sub_title_en = $data['sub_title_en'];
        $content->description_en = $data['description_en'];
        $content->image_title_my = $data['image_title_my'];
        $content->image_description_my = $data['image_description_my'];
        $content->title_my = $data['title_my'];
        $content->sub_title_my = $data['sub_title_my'];
        $content->description_my = $data['description_my'];
        $content->image_title_ja = $data['image_title_ja'];
        $content->image_description_ja = $data['image_description_ja'];
        $content->title_ja = $data['title_ja'];
        $content->sub_title_ja = $data['sub_title_ja'];
        $content->description_ja = $data['description_ja'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/aboutus/'.$content->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/aboutus/', $filename);
            $content->image = $filename;
        }

        $content->created_by = Auth::user()->id;
        $content->update();

        return redirect('admin/Aboutus/index')->with('message','About Us Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = AboutUs::find($content_id);
        if ($content) 
        {
            $content->delete();
            return redirect('admin/Aboutus/index')->with('message','About Us Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Aboutus/index')->with('message','No About Us Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $content = AboutUs::find($content_id);
        return view('admin.Aboutus.view',compact('content'));
    }
}
