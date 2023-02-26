@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
        <h1 class="mt-4">Edit Client</h1>
        <a href="{{ url('admin/Client/index') }}" class='btn btn-primary'>Go to Back</a>
        </div>
        <hr>
        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="english-tab" data-bs-toggle="tab" data-bs-target="#english" type="button" role="tab" aria-controls="english" aria-selected="true">ENGLISH</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="myanmar-tab" data-bs-toggle="tab" data-bs-target="#myanmar" type="button" role="tab" aria-controls="myanmar" aria-selected="false">MYANMAR</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="japan-tab" data-bs-toggle="tab" data-bs-target="#japan" type="button" role="tab" aria-controls="japan" aria-selected="false">JAPAN</button>
            </li>
        </ul>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ url('admin/Client/update-content/'.$client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
                    <h3>Client (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Name</label>
                    <input class="form-control" type="text" name="name_en" id="basicEmailInput" value="{{old('name_en',$client->name_en)}}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_en" id="client_en_summernote" class="form-control" rows="4">{!! $client->description_en !!}</textarea>
                    </div>
                </div>

                <div class="tab-pane fade" id="myanmar" role="tabpanel" aria-labelledby="myanmar-tab">
                    <h3>Client (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Name</label>
                    <input class="form-control" type="text" name="name_my" id="basicEmailInput" value="{{old('name_my',$client->name_my)}}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_my" id="client_my_summernote" class="form-control" rows="4">{!! $client->description_my !!}</textarea>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="japan" role="tabpanel" aria-labelledby="japan-tab">
                    <h3>Client (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Name</label>
                    <input class="form-control" type="text" name="name_ja" id="basicEmailInput" value="{{old('name_ja',$client->name_ja)}}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_ja" id="client_ja_summernote" class="form-control" rows="4">{!! $client->description_ja !!}</textarea>
                    </div>
                </div>                
            </div>

            <div class="form-group form-flex">
                <label for="basicEmailInput">Related Link</label>
                <input class="form-control" type="text" name="link" id="basicEmailInput" value="{{old('link',$client->link)}}" placeholder="">
            </div>

            <div class="form-group form-flex">
            <label for="inputFile">Image/Logo</label>
            <div class="w-100">
            <input type="file" name="image" class="form-control-file" id="inputFile"><br><br>
            <img src="{{ asset('uploads/client/'.$client->image) }}" width="150px" height="70px" alt="" srcset="">
            </div> 
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection