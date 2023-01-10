@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Add Home Content</h1>
        <a href="{{ url('admin/Home/index') }}" class='btn btn-primary'>Go to Back</a>
        </div>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">ENGLISH</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">MYANMAR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">JAPAN</button>
            </li>
        </ul>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ url('admin/Home/update-content/'.$contents->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>Home (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Banner Title Small</label>
                    <input class="form-control" type="text" name="small_text_en" value="{{ old('small_text_en',$contents->small_text_en) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Banner Title Main</label>
                    <textarea name="banner_text_en" value="" id="" cols="30" rows="5" class="w-100">{{ $contents->banner_text_en }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3>Home (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Banner Title Small</label>
                    <input class="form-control" type="text" name="small_text_my" value="{{ old('small_text_my', $contents->small_text_my) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Banner Title Main</label>
                    <textarea name="banner_text_my" value="" id="" cols="30" rows="5" class="w-100">{{ $contents->banner_text_my }}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <h3>Home (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Banner Title Small</label>
                    <input class="form-control" type="text" name="small_text_ja" value="{{ old('small_text_ja' , $contents->small_text_ja) }}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Banner Title Main</label>
                    <textarea name="banner_text_ja" value="" id="" cols="30" rows="5" class="w-100">{{ $contents->banner_text_ja }}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-group form-flex">
            <label for="inputFile">Banner Images</label>
            <div class="w-100">
            <input type="file" name="image" class="form-control-file" id="inputFile"><br><br>
            <img src="{{ asset('uploads/home/'.$contents->image) }}" width="150px" height="70px" alt="" srcset="">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
        
    </div>

@endsection