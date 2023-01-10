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
                <th scope="col" colspan="3">Action</th>
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
                    <td><a href="{{url('admin/Roles/show-content/'.$role->id)}}" class="btn btn-success">View</a></td>
                    <td><a href="{{url('admin/Roles/edit-content/'.$role->id)}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{url('admin/Roles/delete-content/'.$role->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection