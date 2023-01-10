@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
    <h1 class="mt-4">About Us</h1>
    <a href="{{url('admin/Aboutus/index')}}" class='btn btn-primary'>Go to Back</a>
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
                <dt class="col-sm-3">Image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <img src="{{ asset('uploads/aboutus/'.$content->image) }}" width="200px" height="150px" alt="banner" srcset="">
                </dd>

                <dt class="col-sm-3">Title of image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{{ $content->image_title_en }}</p>
                </dd>

                <dt class="col-sm-3">Description of image</dt>
                <dd class="col-sm-9 d-flex"> 
                    <span class="mr-5">-</span> 
                    <p>{!! \Illuminate\Support\Str::words($content->image_description_en) !!}</p>
                </dd>

                <dt class="col-sm-3">Title</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{{ $content->title_en }}</p>
                </dd>

                <dt class="col-sm-3">Sub-title</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{{ $content->sub_title_en }}</p>
                </dd>

                <dt class="col-sm-3">Description</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{!! \Illuminate\Support\Str::words($content->description_en) !!}</p>
                </dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <dl class="row">
                <dt class="col-sm-3">Image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <img src="{{ asset('uploads/aboutus/'.$content->image) }}" width="200px" height="150px" alt="banner" srcset="">
                </dd>

                <dt class="col-sm-3">Title of image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{{ $content->image_title_my }}</p>
                </dd>

                <dt class="col-sm-3">Description of image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{!! \Illuminate\Support\Str::words($content->image_description_my) !!}</p>
                </dd>

                <dt class="col-sm-3">Title</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{{ $content->title_my }}</p>
                </dd>

                <dt class="col-sm-3">Sub-title</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{{ $content->sub_title_my }}</p>
                </dd>

                <dt class="col-sm-3">Description</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <p>{!! \Illuminate\Support\Str::words($content->description_my) !!}</p>
                </dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <dl class="row">
                <dt class="col-sm-3">Image</dt>
                <dd class="col-sm-9 d-flex"> 
                    <span class="mr-5">-</span> 
                    <img src="{{ asset('uploads/aboutus/'.$content->image) }}" width="200px" height="150px" alt="banner" srcset="">
                </dd>

                <dt class="col-sm-3">Title of image</dt>
                <dd class="col-sm-9 d-flex"> 
                    <span class="mr-5">-</span> 
                    <p>{{ $content->image_title_ja }}</p>
                </dd>

                <dt class="col-sm-3">Description of image</dt>
                <dd class="col-sm-9 d-flex"> 
                    <span class="mr-5">-</span> 
                    <p>{!! \Illuminate\Support\Str::words($content->image_description_ja) !!}</p>
                </dd>

                <dt class="col-sm-3">Title</dt>
                <dd class="col-sm-9 d-flex"> 
                    <span class="mr-5">-</span> 
                    <p>{{ $content->title_ja }}</p>
                </dd>

                <dt class="col-sm-3">Sub-title</dt>
                <dd class="col-sm-9 d-flex"> 
                    <span class="mr-5">-</span> 
                    <p>{{ $content->sub_title_ja }}</p>
                </dd>

                <dt class="col-sm-3">Description</dt>
                <dd class="col-sm-9 d-flex"> 
                    <span class="mr-5">-</span> 
                    <p>{!! \Illuminate\Support\Str::words($content->description_ja) !!}</p>
                </dd>
            </dl>
        </div>
    </div>
    

</div>

@endsection