@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">Contact Us</h1>
        <a href="{{url('admin/Contactus/add-content')}}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>

        <div class="tablescroll">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th colspan="3" scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
                <tr>
                    <th></th>
                    <th>English</th>
                    <th>Myanmar</th>
                    <th>Japan</th>
                    <th colspan="4"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($contents as $content)
                <tr>
                    <td scope="row">{{$content->id}}</td>
                    <td>{{$content->address_en}}</td>
                    <td>{{$content->address_my}}</td>
                    <td>{{$content->address_ja}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ url('admin/Contactus/show-content/'.$content->id) }}" class="btn btn-success view">View</a>
                            <a href="{{ url('admin/Contactus/edit-content/'.$content->id) }}" class="btn btn-success edit">Edit</a>
                            <a href="{{ url('admin/Contactus/delete-content/'.$content->id) }}" class="btn btn-danger delete">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        
        
    </div>

@endsection