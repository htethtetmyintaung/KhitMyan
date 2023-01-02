@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">About Us</h1>
        <a href="{{ url('admin/Aboutus/add-content') }}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>

        <table class="table">
            <thead class="table_bottom">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Image</th>
                    <th scope="col" colspan="3">Image Description</th>
                    <th scope="col" colspan="3">About Us Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
                <tr>
                    <th scope="col" colspan="2"></th>
                    <th scope="col">English</th>
                    <th scope="col">Myanmar</th>
                    <th scope="col">Japan</th>
                    <th scope="col">English</th>
                    <th scope="col">Myanmar</th>
                    <th scope="col">Japan</th>
                    <th scope="col" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
            @foreach($contents as $content)
                <tr>
                    <td scope="row">{{ $content->id }}</td>
                    <td><img src="{{ asset('uploads/aboutus/'.$content->image) }}" width="100px" height="50px" alt="banner" srcset=""></td>
                    <td>
                        <span>{{ $content->image_title_en }}</span>
                        <p>{{ $content->image_description_en }}</p>
                    </td>
                    <td>
                        <span>{{ $content->image_title_myan }}</span>
                        <p>{{ $content->image_description_myan }}</p>
                    </td>
                    <td>
                        <span>{{ $content->image_title_jp }}</span>
                        <p>{{ $content->image_description_jp }}</p>
                    </td>
                    <td>
                        <span>{{ $content->title_en }}</span>
                        <p>{{ $content->sub_title_en }}</p>
                        <p>{{ $content->description_en }}</p>
                    </td>
                    <td>
                        <span>{{ $content->title_myan }}</span>
                        <p>{{ $content->sub_title_myan }}</p>
                        <p>{{ $content->description_myan }}</p>
                    </td>
                    <td>
                        <span>{{ $content->title_jp }}</span>
                        <p>{{ $content->sub_title_jp }}</p>
                        <p>{{ $content->description_jp }}</p>
                    </td>
                    <td><a href="{{ url('admin/Aboutus/edit-content/'.$content->id) }}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{ url('admin/Aboutus/delete-content/'.$content->id) }}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection