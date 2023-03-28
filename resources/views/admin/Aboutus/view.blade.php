@extends('layouts.master')

@section('title','JM UNITY')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
    <h1 class="mt-4">About Us</h1>
    <a href="{{url('admin/Aboutus/index')}}" class='btn btn-primary'>Go to Back</a>
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

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
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
                    <div>{!! $content->image_description_en !!}</div>
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
                    <div>{!! $content->description_en !!}</div>
                </dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="myanmar" role="tabpanel" aria-labelledby="myanmar-tab">
            <dl class="row">
                <dt class="col-sm-3">Image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <img src="{{ asset('uploads/aboutus/'.$content->image) }}" width="200px" height="150px" alt="banner" srcset="">
                </dd>

                <dt class="col-sm-3">Title of image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <div>{{ $content->image_title_my }}</div>
                </dd>

                <dt class="col-sm-3">Description of image</dt>
                <dd class="col-sm-9 d-flex">
                    <span class="mr-5">-</span> 
                    <div>{!! $content->image_description_my !!}</div>
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
                    <div>{!! $content->description_my !!}</div>
                </dd>
            </dl>
        </div>
        <div class="tab-pane fade" id="japan" role="tabpanel" aria-labelledby="japan-tab">
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
                    <div>{!! $content->image_description_ja !!}</div>
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
                    <div>{!! $content->description_ja !!}</div>
                </dd>
            </dl>
        </div>
    </div>
    

</div>

@endsection