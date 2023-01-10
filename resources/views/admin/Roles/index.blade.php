@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">Role</h1>
        <a href="{{ url('admin/Roles/add-content') }}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Permissions</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $key=>$role)
                <tr>
                    <td scope="row">{{++$key}}</td>
                    <td scope="row">{{$role->name}}</td>
                    <td>
                        <ul class="permission-name">
                            @foreach($role->permission as $permission)
                            <li>{{$permission->name}}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{$role->created_at}}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                        <a href="{{url('admin/Roles/show-content/'.$role->id)}}" class="btn btn-success view">View</a>
                        <a href="{{url('admin/Roles/edit-content/'.$role->id)}}" class="btn btn-success edit">Edit</a>
                        <a href="{{url('admin/Roles/delete-content/'.$role->id)}}" class="btn btn-danger delete">Delete</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection