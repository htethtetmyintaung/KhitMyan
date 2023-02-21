@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4 mb-5">
        <div class='title-flex'>
        <h1 class="mt-4">Add Main Gallery</h1>
        <a href="{{ url('admin/Maingalleries/index') }}" class='btn btn-primary'>Go to Back</a>
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

        <form action="{{ url('admin/Maingalleries/add-content') }}" method="POST" enctype="multipart/form-data">
        @csrf

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
                    <h3>Main Galleries (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_en" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Desciption</label>
                    <textarea name="description_en" id="maingalleries_en_summernote" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="myanmar" role="tabpanel" aria-labelledby="myanmar-tab">
                    <h3>Main Galleries (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_my" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Desciption</label>
                    <textarea name="description_my" id="maingalleries_my_summernote" class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="japan" role="tabpanel" aria-labelledby="japan-tab">
                    <h3>Main Galleries (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_ja" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Desciption</label>
                    <textarea name="description_ja" id="maingalleries_ja_summernote" class="form-control" rows="4"></textarea>
                    </div>
                </div>
            </div>

            <div class="form-group form-flex">
            <label for="inputFile">Image</label>
            <div class="w-100">
            <input type="file" name="image" class="form-control-file" id="inputFile">
            </div> 
            </div>
            <div class='form-group form-flex'>
            <label for="basicSelect1">Select Gallery</label>
            <select class='form-control' name="main_gallery_id" id='basicSelect1'>
            @foreach ($galleries as $gallery)
            <option value="{{ $gallery->id }}" > {{$gallery->title_en}} </option>
            @endforeach
            </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

</div>

@endsection