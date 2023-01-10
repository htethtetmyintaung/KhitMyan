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
                <th scope="col" colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $key=>$user)
                <tr>
                    <td scope="row">{{++$key}}</td>
                    <td scope="row">{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <ul class="permission-name">
                        @foreach($user->user_role as $role)
                            <li>{{$role->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td><a href="{{url('admin/Users/show-content/'.$user->id)}}" class="btn btn-success">View</a></td>
                    <td><a href="{{url('admin/Users/edit-content/'.$user->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{url('admin/Users/delete-content/'.$user->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection