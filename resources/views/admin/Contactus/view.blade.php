@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
    <h1 class="mt-4">Contact Us</h1>
    <a href="{{url('admin/Contactus/index')}}" class='btn btn-primary'>Go to Back</a>
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
                <dt class="col-sm-3">Title</dt>
                <dd class="col-sm-9">- {{ $content->title_en }}</dd>

                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">- {{ $content->address_en }}</dd>

                <dt class="col-sm-3">Email Address</dt>
                <dd class="col-sm-9">- {{ $content->email }}</dd>

                <dt class="col-sm-3">Phone Number</dt>
                <dd class="col-sm-9">- {{ $content->phone }}</dd>

                <dt class="col-sm-3">Map</dt>
                <dd class="col-sm-9">- {!! $content->map !!}</dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <dl class="row">
                <dt class="col-sm-3">Title</dt>
                <dd class="col-sm-9">- {{ $content->title_my }}</dd>

                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">- {{ $content->address_my }}</dd>

                <dt class="col-sm-3">Email Address</dt>
                <dd class="col-sm-9">- {{ $content->email }}</dd>

                <dt class="col-sm-3">Phone Number</dt>
                <dd class="col-sm-9">- {{ $content->phone }}</dd>

                <dt class="col-sm-3">Map</dt>
                <dd class="col-sm-9">- {!! $content->map !!}</dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <dl class="row">
                <dt class="col-sm-3">Title</dt>
                <dd class="col-sm-9">- {{ $content->title_ja }}</dd>

                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">- {{ $content->address_ja }}</dd>

                <dt class="col-sm-3">Email Address</dt>
                <dd class="col-sm-9">- {{ $content->email }}</dd>

                <dt class="col-sm-3">Phone Number</dt>
                <dd class="col-sm-9">- {{ $content->phone }}</dd>

                <dt class="col-sm-3">Map</dt>
                <dd class="col-sm-9">- {!! $content->map !!}</dd>
            </dl>
        </div>
    </div>
    

</div>

@endsection