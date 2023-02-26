@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Add Service</h1>
        <a href="{{ url('admin/Services/index') }}" class='btn btn-primary'>Go to Back</a>
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

        <form action="{{ url('admin/Services/add-content') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
                    <h3>Service (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_en" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Desciption</label>
                    <textarea name="description_en" id="service_en_summernote" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Category</label>
                    <input class="form-control" type="text" name="category_en" id="basicEmailInput" placeholder="">
                    </div>
                </div>
                <div class="tab-pane fade" id="myanmar" role="tabpanel" aria-labelledby="myanmar-tab">
                    <h3>Service (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_my" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Desciption</label>
                    <textarea name="description_my" id="service_my_summernote" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Category</label>
                    <input class="form-control" type="text" name="category_my" id="basicEmailInput" placeholder="">
                    </div>
                </div>
                <div class="tab-pane fade" id="japan" role="tabpanel" aria-labelledby="japan-tab">
                    <h3>Service (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_ja" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Desciption</label>
                    <textarea name="description_ja" id="service_ja_summernote" class="form-control" rows="4"></textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Category</label>
                    <input class="form-control" type="text" name="category_ja" id="basicEmailInput" placeholder="">
                    </div>
                </div>
            </div>

            <div class='form-group form-flex'>
            <label for="basicSelect1">Select Main Content</label>
            <select class='form-control' name="main_content_id" id='basicSelect1'>
            @foreach ($main_contents as $main_content)
            <option value="{{ $main_content->id }}" > {{$main_content->title_en}} </option>
            @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>

@endsection