@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
    <div class='title-flex'>
        <h1 class="mt-4">Edit Home Content</h1>
        <a href="{{ url('admin/Aboutus/index') }}" class='btn btn-primary'>Go to Back</a>
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

        <form action="{{ url('admin/Aboutus/update-content/'.$contents->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3>About Us (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Image Title</label>
                    <input class="form-control" type="text" name="image_title_en" value="{{old('image_title_en',$contents->image_title_en)}}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Image Description</label>
                    <textarea name="image_description_en" value="" id="" cols="30" rows="5" class="w-100">{{$contents->image_description_en}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Title</label>
                    <input class="form-control" type="text" name="title_en" value="{{old('title_en',$contents->title_en)}}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Sub-Title</label>
                    <textarea name="sub_title_en" id="" cols="30" rows="5" class="w-100">{{$contents->sub_title_en}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Description</label>
                    <textarea name="description_en" id="" cols="30" rows="5" class="w-100">{{$contents->description_en}}</textarea>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3>About Us (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Image Title</label>
                    <input class="form-control" type="text" name="image_title_my" value="{{old('image_title_my',$contents->image_title_my)}}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Image Description</label>
                    <textarea name="image_description_my" id="" cols="30" rows="5" class="w-100">{{$contents->image_description_my}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Title</label>
                    <input class="form-control" type="text" name="title_my" value="{{old('title_my',$contents->title_my)}}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Sub-Title</label>
                    <textarea name="sub_title_my" id="" cols="30" rows="5" class="w-100">{{$contents->sub_title_my}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Description</label>
                    <textarea name="description_my" id="" cols="30" rows="5" class="w-100">{{$contents->description_my}}</textarea>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <h3>About Us (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Image Title</label>
                    <input class="form-control" type="text" name="image_title_ja" value="{{old('image_title_ja',$contents->image_title_ja)}}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Image Description</label>
                    <textarea name="image_description_ja" id="" cols="30" rows="5" class="w-100">{{$contents->image_description_ja}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Title</label>
                    <input class="form-control" type="text" name="title_ja" value="{{old('title_ja',$contents->title_ja)}}" id="basicEmailInput" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Sub-Title</label>
                    <textarea name="sub_title_ja" id="" cols="30" rows="5" class="w-100">{{$contents->sub_title_ja}}</textarea>
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">About Us Description</label>
                    <textarea name="description_ja" id="" cols="30" rows="5" class="w-100">{{$contents->description_ja}}</textarea>
                    </div>
                </div>                
            </div>
            <div class="form-group form-flex">
            <label for="inputFile">Image</label>
            <div class="w-100">
            <input type="file" name="image" class="form-control-file" id="inputFile"><br><br>
            <img src="{{ asset('uploads/aboutus/'.$contents->image) }}" width="150px" height="70px" alt="" srcset="">
            </div> 
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection