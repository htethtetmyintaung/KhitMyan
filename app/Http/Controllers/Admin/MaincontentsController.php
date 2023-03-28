<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContentFormRequest;
use App\Models\Maincontents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MaincontentsController extends Controller
{
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $contents = Maincontents::where(function($query) use ($keyword)
        {
            if($keyword !=null){
                $query->where('title_en','LIKE','%'.$keyword.'%')
                        ->orWhere('title_my','LIKE','%'.$keyword.'%')
                        ->orWhere('title_ja','LIKE','%'.$keyword.'%')->get();
            }
           
        })
        ->paginate(5);
        return view('admin.Maincontents.index', compact('contents'));
    }

    Public function create()
    {
        return view('admin.Maincontents.create');
    }

    Public function store(ContentFormRequest $request)
    {
        $data = $request->validated();
        $content = new Maincontents;
        $content->user_id = auth()->user()->id;
        $content->title_en = $data['title_en'];
        $content->title_ja = $data['title_ja'];
        $content->title_my = $data['title_my'];
        $content->link_en = $data['link_en'];
        $content->link_my = $data['link_my'];
        $content->link_ja = $data['link_ja'];
        $content->created_by = Auth::user()->id;
        $content->save();

        return redirect('admin/Maincontents/index')->with('message','Main Content Added Successfully');
    }

    Public function edit($content_id) 
    {
        $contents = Maincontents::find($content_id);
        return view('admin.Maincontents.edit', compact('contents'));
    }

    Public function update(ContentFormRequest $request, $content_id)
    {
        $data = $request->validated();

        $content = Maincontents::find($content_id);
        $content->user_id = auth()->user()->id;
        $content->title_en = $data['title_en'];
        $content->title_ja = $data['title_ja'];
        $content->title_my = $data['title_my'];
        $content->link_en = $data['link_en'];
        $content->link_my = $data['link_my'];
        $content->link_ja = $data['link_ja'];
        $content->created_by = Auth::user()->id;
        $content->update();

        return redirect('admin/Maincontents/index')->with('message','Main Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = Maincontents::find($content_id);
        if ($content) 
        {
            $content->delete();
            return redirect('admin/Maincontents/index')->with('message','Main Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Maincontents/index')->with('message','No Main Content Id Found');
        }
    }

}
