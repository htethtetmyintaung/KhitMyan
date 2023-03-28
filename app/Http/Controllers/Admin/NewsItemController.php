<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsItem;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\NewsItemRequest;
use App\Http\Requests\Admin\UpdateNewsItemRequest;

class NewsItemController extends Controller
{
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $contents = NewsItem::where(function($query) use ($keyword)
        {
            if ($keyword !=null) {
                $query->where('title_en','LIKE','%'.$keyword.'%')
                        ->orWhere('title_my','LIKE','%'.$keyword.'%')
                        ->orWhere('title_ja','LIKE','%'.$keyword.'%')
                        ->get();
            }
        })->paginate(5);
        return view('admin.NewsItem.index',compact('contents'));
    }

    Public function create()
    {
        $categories = Category::all();
        $news = News::all();
        return view('admin.NewsItem.create',compact('categories', 'news'));
    }

    Public function store(NewsItemRequest $request)
    {
        $data = $request->validated();
        $news_item = new NewsItem;
        $news_item->news_id = $data['news_id'];
        $news_item->title_en = $data['title_en'];
        $news_item->title_my = $data['title_my'];
        $news_item->title_ja = $data['title_ja'];
        $news_item->description_en = $data['description_en'];
        $news_item->description_my = $data['description_my'];
        $news_item->description_ja = $data['description_ja'];
        $news_item->creator_en = $data['creator_en'];
        $news_item->creator_my = $data['creator_my'];
        $news_item->creator_ja = $data['creator_ja'];

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/news/',$filename);
            $news_item->image = $filename;
        }

        $news_item->created_by = Auth::user()->id;
        $news_item->save();

        $news_item->category()->attach($request->category);

        return redirect('admin/NewsItem/index')->with('message','Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $news_item = NewsItem::find($content_id);
        $categories = Category::all();
        return view('admin.NewsItem.edit',compact('news_item','categories'));
    }

    Public function update(UpdateNewsItemRequest $request, $content_id)
    {
        $data = $request->validated();
        $news_item = NewsItem::find($content_id);
        $news_item->title_en = $data['title_en'];
        $news_item->title_my = $data['title_my'];
        $news_item->title_ja = $data['title_ja'];
        $news_item->description_en = $data['description_en'];
        $news_item->description_my = $data['description_my'];
        $news_item->description_ja = $data['description_ja'];
        $news_item->creator_en = $data['creator_en'];
        $news_item->creator_my = $data['creator_my'];
        $news_item->creator_ja = $data['creator_ja'];

        if ($request->hasfile('image')) {

            $destination = 'uploads/news/'.$news_item->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file  = $request->file('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move('uploads/news/', $filename);
            $news_item->image = $filename;
        }

        $news_item->created_by = Auth::user()->id;
        $news_item->update();

        $news_item->category()->sync($request->category);

        return redirect('admin/NewsItem/index')->with('message','Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = NewsItem::find($content_id);
        if($content)
        {
            $content->category()->detach();
            $content->delete();
            return redirect('admin/NewsItem/index')->with('message','Content Deleted Successfully');
        }
        else{
            return redirect('admin/NewsItem/index')->with('message','No Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $news_item = NewsItem::find($content_id);
        return view('admin.NewsItem.view',compact('news_item'));

    }
}
