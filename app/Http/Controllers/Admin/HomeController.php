<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Homecontents;
use App\Models\Maincontents;
use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\HomeFormRequest;
use App\Http\Requests\Admin\UpdateHomeFormRequest;

class HomeController extends Controller
{
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $contents = Homecontents::where(function($query) use ($keyword)
        {
            if($keyword !=null){
                $query->where('banner_text_en','LIKE','%'.$keyword.'%')
                        ->orWhere('banner_text_my','LIKE','%'.$keyword.'%')
                        ->orWhere('banner_text_ja','LIKE','%'.$keyword.'%')->get();
            }
           
        })->paginate(5);
        return view('admin.Home.index',compact('contents'));
    }

    Public function create()
    {
        $main_contents = Maincontents::all();
        return view('admin.Home.create',compact('main_contents'));
    }

    Public function store(HomeFormRequest $request)
    {
        $data = $request->validated();
        $content = new Homecontents;
        $content->main_content_id = $data['main_content_id'];
        $content->small_text_en = $data['small_text_en'];
        $content->banner_text_en = $data['banner_text_en'];
        $content->small_text_my = $data['small_text_my'];
        $content->banner_text_my = $data['banner_text_my'];
        $content->small_text_ja = $data['small_text_ja'];
        $content->banner_text_ja = $data['banner_text_ja'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/home/', $filename);
            $content->image = $filename;
        }

        $content->created_by = Auth::user()->id;
        $content->save();

        return redirect('admin/Home/index')->with('message','Home Content Added Successfully');

    }

    Public function edit($content_id) 
    {
        $contents = Homecontents::find($content_id);
        return view('admin.Home.edit', compact('contents'));
    }

    Public function update(UpdateHomeFormRequest $request, $content_id)
    {
        $data = $request->validated();

        $content = Homecontents::find($content_id);
        $content->small_text_en = $data['small_text_en'];
        $content->banner_text_en = $data['banner_text_en'];
        $content->small_text_my = $data['small_text_my'];
        $content->banner_text_my = $data['banner_text_my'];
        $content->small_text_ja = $data['small_text_ja'];
        $content->banner_text_ja = $data['banner_text_ja'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/home/'.$content->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/home/', $filename);
            $content->image = $filename;
        }

        $content->created_by = Auth::user()->id;
        $content->update();

        return redirect('admin/Home/index')->with('message','Home Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = Homecontents::find($content_id);
        if ($content) 
        {
            $content->delete();
            return redirect('admin/Home/index')->with('message','Home Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Home/index')->with('message','No Home Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $contents = Homecontents::find($content_id);
        return view('admin.Home.view',compact('contents'));
    }
}
