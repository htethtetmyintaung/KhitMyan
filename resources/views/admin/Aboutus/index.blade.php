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

        <div class="tablescroll">
            <table class="table">
                <thead class="table_bottom">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" colspan="3">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    <tr>
                        <th scope="col" ></th>
                        <th scope="col">English</th>
                        <th scope="col">Myanmar</th>
                        <th scope="col">Japan</th>
                        <th scope="col" ></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contents as $key=>$content)
                    <tr>
                        <td scope="row">{{ ++$key }}</td>
                        <td>
                            <p>{!! \Illuminate\Support\Str::words($content->description_en, 5,'....')  !!}</p>
                        </td>
                        <td>
                            <p>{!! \Illuminate\Support\Str::words($content->description_my, 5,'....')  !!}</p>
                        </td>
                        <td>
                            <p>{!! \Illuminate\Support\Str::words($content->description_ja, 5,'....')  !!}</p>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ url('admin/Aboutus/show-content/'.$content->id) }}" class="btn btn-success view">View</a>
                                <a href="{{ url('admin/Aboutus/edit-content/'.$content->id) }}" class="btn btn-success edit">Edit</a>
                                <a href="{{ url('admin/Aboutus/delete-content/'.$content->id) }}" class="btn btn-danger delete">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection