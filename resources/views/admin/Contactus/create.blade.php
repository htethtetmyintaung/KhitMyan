@extends('layouts.master')

@section('title','JM UNITY')

@section('content')

<div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Add Contact Us</h1>
        <a href="{{url('admin/Contactus/index')}}" class='btn btn-primary'>Go to back</a>
        </div>
        <hr>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#english" type="button" role="tab" aria-controls="english" aria-selected="true">ENGLISH</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="myanmar-tab" data-bs-toggle="tab" data-bs-target="#myanmar" type="button" role="tab" aria-controls="myanmar" aria-selected="false">MYANMAR</button>
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

        <form action="{{ url('admin/Contactus/add-content') }}" method="POST" enctype="multipart/form-data">
        @csrf   
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
                    <h3>Contact Us (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_en" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Address</label>
                    <textarea name="address_en" id="address_en_summernote" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Phone</label>
                    <input class="form-control" type="input" name="phone_en" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Email</label>
                    <input class="form-control" type="email" name="email_en" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Map</label>
                    <textarea name="map_en" id="" cols="30" rows="5" class="w-100"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="myanmar" role="tabpanel" aria-labelledby="myanmar-tab">
                <h3>Contact Us (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_my" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Address</label>
                    <textarea name="address_my" id="address_my_summernote" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Phone</label>
                    <input class="form-control" type="input" name="phone_my" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Email</label>
                    <input class="form-control" type="email" name="email_my" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Map</label>
                    <textarea name="map_my" id="" cols="30" rows="5" class="w-100"></textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="japan" role="tabpanel" aria-labelledby="japan-tab">
                <h3>Contact Us (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_ja" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Address</label>
                    <textarea name="address_ja" id="address_ja_summernote" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Phone</label>
                    <input class="form-control" type="input" name="phone_ja" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Email</label>
                    <input class="form-control" type="email" name="email_ja" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Map</label>
                    <textarea name="map_ja" id="" cols="30" rows="5" class="w-100"></textarea>
                    </div>
                </div>
            </div>

           
            <div class='form-group form-flex'>
            <label for="basicSelect1">Select Main Content</label>
            <select class='form-control' name="main_content_id" id='basicSelect1'>
            <option value="">Select main content</option>
            @foreach ($main_contents as $main_content)
            <option value="{{ $main_content->id }}" > {{$main_content->title_en}} </option>
            @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

@endsection