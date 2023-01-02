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

        <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th colspan="3" scope="col">Address</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Email Address</th>
            <th scope="col">Map</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        <tr>
            <th></th>
            <th>English</th>
            <th>Myanmar</th>
            <th>Japan</th>
            <th colspan="5"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($contents as $content)
        <tr>
            <th scope="row">{{$content->id}}</th>
            <td>{{$content->address_en}}</td>
            <td>{{$content->address_myan}}</td>
            <td>{{$content->address_jp}}</td>
            <td>{{$content->phone}}</td>
            <td>{{$content->email}}</td>
            <td class="map">{!! $content->map !!}</td>
            <td><a href="{{ url('admin/Contactus/edit-content/'.$content->id) }}" class="btn btn-success">Edit</a></td>
            <td><a href="{{ url('admin/Contactus/delete-content/'.$content->id) }}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
        </table>
        
    </div>

@endsection