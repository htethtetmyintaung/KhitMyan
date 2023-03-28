@extends('layouts.master')

@section('title','JM UNITY')

@section('content')

    <div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Edit News Item</h1>
        <a href="{{ url('admin/NewsItem/index') }}" class='btn btn-primary'>Go to Back</a>
        </div>
        <hr>

        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#english" type="button" role="tab" aria-controls="home" aria-selected="true">ENGLISH</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="myanmar-tab" data-bs-toggle="tab" data-bs-target="#myanmar" type="button" role="tab" aria-controls="profile" aria-selected="false">MYANMAR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="japan-tab" data-bs-toggle="tab" data-bs-target="#japan" type="button" role="tab" aria-controls="contact" aria-selected="false">JAPAN</button>
            </li>
        </ul>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif
        
        <form action="{{ url('admin/NewsItem/update-content/'.$news_item->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
                    <h3>News Item (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_en" value="{{ old('title_en',$news_item->title_en) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_en" id="news_desp_en_summernote" class="form-control" rows="4">{!! $news_item->description_en !!}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Creator</label>
                    <input class="form-control" type="text" name="creator_en" value="{{ old('creator_en',$news_item->creator_en) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class='form-group form-flex'>
                    <label for="basicSelect1">Category</label>
                    <select class='form-control' name="category" id='basicSelect1'>
                    @foreach($categories as $category )
                    @foreach ($news_item->category as $news_items)
                    <option value="{{ $category->id }}" {{ $category->name_en == $news_items->name_en ? 'selected' : '' }}>{{ $category->name_en }}</option>
                    @endforeach
                    @endforeach
                    
                    </select>
                    </div>
                </div>
                <div class="tab-pane fade" id="myanmar" role="tabpanel" aria-labelledby="myanmar-tab">
                    <h3>News Item (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_my" value="{{ old('title_my',$news_item->title_my) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Despcription</label>
                    <textarea name="description_my" id="news_desp_my_summernote" class="form-control" rows="4">{!! $news_item->description_my !!}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Creator</label>
                    <input class="form-control" type="text" name="creator_my" value="{{ old('creator_my',$news_item->creator_my) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class='form-group form-flex'>
                    <label for="basicSelect1">Category</label>
                    <select class='form-control' name="category" id='basicSelect1'>
                    @foreach($categories as $category )
                    @foreach ($news_item->category as $news_items)
                    <option value="{{ $category->id }}" {{ $category->name_my == $news_items->name_my ? 'selected' : '' }}>{{ $category->name_my }}</option>
                    @endforeach
                    @endforeach
                    </select>
                    </div>
                </div>
                <div class="tab-pane fade" id="japan" role="tabpanel" aria-labelledby="japan-tab">
                    <h3>News Item (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_ja" value="{{ old('title_ja',$news_item->title_ja) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_ja" id="news_desp_ja_summernote" class="form-control" rows="4">{!! $news_item->description_ja !!}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Creator</label>
                    <input class="form-control" type="text" name="creator_ja" value="{{ old('creator_ja',$news_item->creator_ja) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class='form-group form-flex'>
                    <label for="basicSelect1">Category</label>
                    <select class='form-control' name="category" id='basicSelect1'>
                    @foreach($categories as $category )
                    @foreach ($news_item->category as $news_items)
                    <option value="{{ $category->id }}" {{ $category->name_ja == $news_items->name_ja ? 'selected' : '' }}>{{ $category->name_ja }}</option>
                    @endforeach
                    @endforeach
                    </select>
                    </div>
                </div>
            </div>

            <div class="form-group form-flex">
            <label for="inputFile">Image</label>
            <div class="w-100">
            <input type="file" name="image" class="form-control-file" id="inputFile"><br><br>
            <img src="{{ asset('uploads/news/'.$news_item->image) }}" width="150px" height="70px" alt="" srcset="">
            </div> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>

@endsection