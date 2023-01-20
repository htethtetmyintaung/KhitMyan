@extends('layouts.master')

@section('title','Khit Myan')

@php
use App\Http\Controllers\Admin\UsersController;
use App\Models\Permission;
$permission = new Permission;
@endphp

@section('content')


    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">All Users</h1>
        @if($permission->checkPermission('User create'))
            <a href="{{ url('admin/Users/add-content') }}" class='btn btn-primary'><i class="fa-solid fa-square-plus"></i>ADD</a>
        @else
        <a class="btn btn-primary"><i class="fas fa-exclamation-triangle"></i></a>
        @endif
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
                            @if($permission->checkPermission('User view'))
                                <a href="{{url('admin/Users/show-content/'.$user->id)}}" class="btn btn-success view"><i class="fa-solid fa-eye"></i></a>
                            @else
                            <a class="btn btn-success view"><i class="fas fa-exclamation-triangle"></i></a>
                            @endif

                            @if($permission->checkPermission('User edit'))
                                <a href="{{url('admin/Users/edit-content/'.$user->id)}}" class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            @else
                            <a class="btn btn-success edit"><i class="fas fa-exclamation-triangle"></i></a>
                            @endif
                            
                            @if($permission->checkPermission('User delete'))
                                <a href="{{url('admin/Users/delete-content/'.$user->id)}}" class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></a>
                            @else
                            <a class="btn btn-danger delete"><i class="fas fa-exclamation-triangle"></i></a>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $users->links() !!}
    </div>

@endsection