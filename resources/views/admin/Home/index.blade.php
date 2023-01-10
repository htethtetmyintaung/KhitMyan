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
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($contents as $key=>$content)
                <tr>
                <td scope="row">{{ ++$key }}</td>
                <td>
                    <p>{{ $content->banner_text_en }}</p>
                </td>
                <td>
                    <p>{{ $content->banner_text_my }}</p>
                </td>
                <td>
                    <p>{{ $content->banner_text_ja }}</p>
                </td>
                <td>
                    <div class="d-flex">
                        <a href="{{ url('admin/Home/show-content/'.$content->id) }}" class="btn btn-success view">View</a>
                        <a href="{{ url('admin/Home/edit-content/'.$content->id) }}" class="btn btn-success edit">Edit</a>
                        <a href="{{ url('admin/Home/delete-content/'.$content->id) }}" class="btn btn-danger delete">Delete</a>
                    </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection