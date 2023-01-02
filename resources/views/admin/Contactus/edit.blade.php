@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Add Contact Us</h1>
        <a href="{{url('admin/Contactus/index')}}" class='btn btn-primary'>Go to back</a>
        </div>
        <hr>

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
        <form action="{{ url('admin/Contactus/update-content/'.$contents->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>Contact Us (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <textarea name="title_en" id="" cols="30" rows="5" class="w-100">{{$contents->title_en}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Address</label>
                    <textarea name="address_en" id="" cols="30" rows="5" class="w-100">{{$contents->address_en}}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <h3>Contact Us (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <textarea name="title_my" id="" cols="30" rows="5" class="w-100">{{$contents->title_my}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Address</label>
                    <textarea name="address_my" id="" cols="30" rows="5" class="w-100">{{$contents->address_my}}</textarea>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <h3>Contact Us (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <textarea name="title_ja" id="" cols="30" rows="5" class="w-100">{{$contents->title_ja}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Address</label>
                    <textarea name="address_ja" id="" cols="30" rows="5" class="w-100">{{$contents->address_ja}}</textarea>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="form-group form-flex">
            <label for="basicEmailInput">Phone</label>
            <input class="form-control" type="input" name="phone" value="{{$contents->phone}}" id="basicEmailInput" placeholder="">
            </div>
            <div class="form-group form-flex">
            <label for="basicEmailInput">Email</label>
            <input class="form-control" type="email" name="email" value="{{$contents->email}}" id="basicEmailInput" placeholder="">
            </div>
            <div class="form-group form-flex">
            <label for="basicEmailInput">Map</label>
            <input class="form-control" type="text" name="map" value="{{$contents->map}}" id="basicEmailInput" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

@endsection