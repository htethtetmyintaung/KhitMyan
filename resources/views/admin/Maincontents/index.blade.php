@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">Main Contents</h1>
        <a href="{{ url('admin/Maincontents/add-content') }}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">English</th>
                <th scope="col">Myanmar</th>
                <th scope="col">Japan</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($contents as $key=>$content)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $content->title_en }}</td>
                    <td>{{ $content->title_my }}</td>
                    <td>{{ $content->title_ja }}</td>   
                    <td><a href="{{ url('admin/Maincontents/edit-content/'.$content->id) }}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{ url('admin/Maincontents/delete-content/'.$content->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection