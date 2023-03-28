@extends('layouts.master')

@section('title','JM UNITY')

@section('content')

@php
    $values = explode(',',$vision->slide_image);
@endphp

<div class="container-fluid px-4">
    <div class='title-flex'>
        <h1 class="mt-4">Add Vision</h1>
        <a href="{{ url('admin/Vision/index') }}" class='btn btn-primary'>Go to Back</a>
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

        <form action="{{ url('admin/Vision/update-content/'.$vision->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="english" role="tabpanel" aria-labelledby="english-tab">
                    <h3>Mission (English Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_en" id="basicEmailInput" value="{{ old('title_en',$vision->title_en) }}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Sub-Title</label>
                    <input class="form-control" type="text" name="subtitle_en" id="basicEmailInput" value="{{ old('subtitle_en',$vision->subtitle_en) }}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_en" id="vision_en_summernote" class="form-control" rows="4">{{ old('description_en',$vision->description_en) }}</textarea>
                    </div>
                </div>

                <div class="tab-pane fade" id="myanmar" role="tabpanel" aria-labelledby="myanmar-tab">
                    <h3>Vision (Myanmar Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_my" id="basicEmailInput" value="{{ old('title_my',$vision->title_my) }}"  placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Sub-Title</label>
                    <input class="form-control" type="text" name="subtitle_my" id="basicEmailInput" value="{{ old('subtitle_my',$vision->subtitle_my) }}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_my" id="vision_my_summernote" class="form-control" rows="4">{{ old('description_en',$vision->description_my) }}</textarea>
                    </div>
                </div>
                
                <div class="tab-pane fade" id="japan" role="tabpanel" aria-labelledby="japan-tab">
                    <h3>Vision (Japan Language)</h3>
                    <hr>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Title</label>
                    <input class="form-control" type="text" name="title_ja" id="basicEmailInput" value="{{ old('title_my',$vision->title_ja) }}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Sub-Title</label>
                    <input class="form-control" type="text" name="subtitle_ja" id="basicEmailInput" value="{{ old('subtitle_my',$vision->subtitle_ja) }}" placeholder="">
                    </div>
                    <div class="form-group form-flex">
                    <label for="basicEmailInput">Description</label>
                    <textarea name="description_ja" id="vision_ja_summernote" class="form-control" rows="4">{{ old('description_en',$vision->description_ja) }}</textarea>
                    </div>
                </div>                
            </div>
            <!-- Cover Image -->
            <div class="form-group form-flex">
            <label for="inputFile">Cover Image</label>
            <div class="w-100">
            <input type="file" name="cover_image" class="form-control-file" id="inputFile"><br><br>
            <img src="{{ asset('uploads/vision/cover/'.$vision->cover_image) }}" width="150px" height="70px" alt="" srcset="">
            </div> 
            </div>

            <!-- Image Slider -->
            <div class="form-group form-flex" style="align-items: flex-start;">
                <label for="inputFile">Image Slider</label>
                <div class="w-100">
                    <div class="w-100">
                        <div class="property-fields__rows ">
                            <div id="property-fields__row-1" class="property-fields__row property-fields__row-item ">
                                <div class="line-item-property__field line-item-property__year" >
                                    <input id="year" type="file" name="slide_image[]"/>
                                </div>
                            </div>
                            <div class="line-item-property__actions">
                                <input type="button" id="btnAdd" value="+" />
                                <input type="button" id="btnDel" value="-" />
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled d-flex slider-img" style="margin-top:10px;">
                        @foreach($values as $value)
                        <li>
                            <img src="{{ asset('uploads/vision/slider/'.$value) }}" alt="" srcset="" width="150px">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

@endsection