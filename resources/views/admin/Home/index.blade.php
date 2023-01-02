@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">Home</h1>
        <a href="{{ url('admin/Home/add-content') }}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">English</th>
                <th scope="col">Myanmar</th>
                <th scope="col">Japan</th>
                <th scope="col">Banner Image</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($contents as $content)
                <tr>
                <th scope="row">{{ $content->id }}</th>
                <td>
                    <span>{{ $content->small_text_en }}</span>
                    <p>{{ $content->banner_text_en }}</p>
                </td>
                <td>
                    <span>{{ $content->small_text_my }}</span>
                    <p>{{ $content->banner_text_my }}</p>
                </td>
                <td>
                    <span>{{ $content->small_text_ja }}</span>
                    <p>{{ $content->banner_text_ja }}</p>
                </td>
                <td><img src="{{ asset('uploads/home/'.$content->image) }}" width="100px" height="50px" alt="banner" srcset=""></td>
                <td><a href="{{ url('admin/Home/edit-content/'.$content->id) }}" class="btn btn-success">Edit</a></td>
                <td><a href="{{ url('admin/Home/delete-content/'.$content->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection