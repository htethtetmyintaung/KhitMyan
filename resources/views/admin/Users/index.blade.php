@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">All Users</h1>
        <a href="{{ url('admin/Users/add-content') }}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <td scope="row">{{++$key}}</td>
                    <td scope="row">{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <ul class="permission-name ">
                        @foreach($user->user_role as $role)
                            <li class="text-align-center">{{$role->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{url('admin/Users/show-content/'.$user->id)}}" class="btn btn-success view">View</a>
                            <a href="{{url('admin/Users/edit-content/'.$user->id)}}" class="btn btn-success edit">Edit</a>
                            <a href="{{url('admin/Users/delete-content/'.$user->id)}}" class="btn btn-danger delete">Delete</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection