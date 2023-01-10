@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
    <h1 class="mt-4">Home Content</h1>
    <a href="{{url('admin/Home/index')}}" class='btn btn-primary'>Go to Back</a>
    </div>
    <hr>

    <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
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

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <dl class="row">
                <dt class="col-sm-3">Banner small text</dt>
                <dd class="col-sm-9">- {{$contents->small_text_en}}</dd>

                <dt class="col-sm-3">Banner text</dt>
                <dd class="col-sm-9">- {{$contents->banner_text_en}}</dd>

                <dt class="col-sm-3">Banner image</dt>
                <dd class="col-sm-9">- <img src="{{ asset('uploads/home/'.$contents->image) }}" alt="banner" srcset=""></dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <dl class="row">
                <dt class="col-sm-3">Banner small text</dt>
                <dd class="col-sm-9">- {{$contents->small_text_my}}</dd>

                <dt class="col-sm-3">Banner text</dt>
                <dd class="col-sm-9">- {{$contents->banner_text_my}}</dd>

                <dt class="col-sm-3">Banner image</dt>
                <dd class="col-sm-9">- <img src="{{ asset('uploads/home/'.$contents->image) }}" alt="banner" srcset=""></dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <dl class="row">
                <dt class="col-sm-3">Banner small text</dt>
                <dd class="col-sm-9">- {{$contents->small_text_ja}}</dd>

                <dt class="col-sm-3">Banner text</dt>
                <dd class="col-sm-9">- {{$contents->banner_text_ja}}</dd>

                <dt class="col-sm-3">Banner image</dt>
                <dd class="col-sm-9">- <img src="{{ asset('uploads/home/'.$contents->image) }}" alt="banner" srcset=""></dd>
            </dl>
        </div>
    </div>
    

</div>

@endsection