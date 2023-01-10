@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">Permission</h1>
        <a href="{{ url('admin/Permissions/add-content') }}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>

        <table class="table ">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col" colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($permissions as $key=>$permission)
                <tr>
                    <td scope="row">{{++$key}}</td>
                    <td>{{$permission->name}}</td>
                    <td>{{$permission->created_at}}</td>
                    <td><a href="{{url('admin/Permissions/show-content/'.$permission->id)}}" class="btn btn-success">View</a></td>
                    <td><a href="{{url('admin/Permissions/edit-content/'.$permission->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{url('admin/Permissions/delete-content/'.$permission->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection