<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\UpdateCategoryRequest;

class CategoryController extends Controller
{
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $contents = Category::where(function($query) use ($keyword)
        {
            if ($keyword !=null) {
                $query->where('name_en','LIKE','%'.$keyword.'%')
                        ->orWhere('name_my','LIKE','%'.$keyword.'%')
                        ->orWhere('name_ja','LIKE','%'.$keyword.'%')
                        ->get();
            }
        })->paginate(5);
        return view('admin.Category.index',compact('contents'));
    }

    Public function create()
    {
        return view('admin.Category.create');
    }

    Public function store(CategoryRequest $request) 
    {
        $data = $request->validated();
        $category = new Category;
        $category->name_en = $data['name_en'];
        $category->name_my = $data['name_my'];
        $category->name_ja = $data['name_ja'];
        $category->created_by = Auth::user()->id;
        $category->save();

        return redirect('admin/Category/index')->with('message','Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $category = Category::find($content_id);
        return view('admin.Category.edit',compact('category'));
    }

    Public function update(UpdateCategoryRequest $request, $content_id)
    {
        $data = $request->validated();
        $category = Category::find($content_id);
        $category->name_en = $data['name_en'];
        $category->name_my = $data['name_my'];
        $category->name_ja = $data['name_ja'];
        $category->created_by = Auth::user()->id;
        $category->update();

        return redirect('admin/Category/index')->with('message','Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = Category::find($content_id);
        if ($content) {
            $content->category_news()->detach();
            $content->delete();
            return redirect('admin/Category/index')->with('message','Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Category/index')->with('message','No Content Id Found');
        }
    }
}
