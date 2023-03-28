<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Maincontents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\NewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;

class NewsController extends Controller
{
    Public function index()
    {
        $contents = News::paginate(5);
        return view('admin.News.index',compact('contents'));
    }

    Public function create()
    {
        $main_contents = Maincontents::all();
        return view('admin.News.create',compact('main_contents'));
    }

    Public function store(NewsRequest $request)
    {
        $data = $request->validated();
        $news = new News;
        $news->main_content_id = $data['main_content_id'];
        $news->title_en = $data['title_en'];
        $news->title_my = $data['title_my'];
        $news->title_ja = $data['title_ja'];
        $news->description_en = $data['description_en'];
        $news->description_my = $data['description_my'];
        $news->description_ja = $data['description_ja'];
        $news->created_by = Auth::user()->id;
        $news->save();

        return redirect('admin/News/index')->with('message', 'News Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $news = News::find($content_id);
        return view('admin.News.edit',compact('news'));
    }

    Public function update(UpdateNewsRequest $request, $content_id)
    {
        $data = $request->validated();

        $news = News::find($content_id);
        $news->title_en = $data['title_en'];
        $news->title_my = $data['title_my'];
        $news->title_ja = $data['title_ja'];
        $news->description_en = $data['description_en'];
        $news->description_my = $data['description_my'];
        $news->description_ja = $data['description_ja'];
        $news->created_by = Auth::user()->id;
        $news->update();

        return redirect('admin/News/index')->with('message', 'News Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = News::find($content_id);
        if ($content) {
            $content->delete();
            return redirect('admin/News/index')->with('message','News Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/News/index')->with('message', 'No News Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $news = News::find($content_id);
        return view('admin.News.view', compact('news'));
    }
    
}
