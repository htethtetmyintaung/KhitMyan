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
        <h1 class="mt-4">Role</h1>
        @if($permission->checkPermission('Role create'))
            <a href="{{ url('admin/Roles/add-content') }}" class="btn btn-primary"><i class="fa-solid fa-square-plus"></i>ADD</a>
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
                            @if($permission->checkPermission('Role view'))
                                <a href="{{url('admin/Roles/show-content/'.$role->id)}}" class="btn btn-success view"><i class="fa-solid fa-eye"></i></a>
                            @else
                            <a class="btn btn-success view"><i class="fas fa-exclamation-triangle"></i></a>
                            @endif

                            @if($permission->checkPermission('Role edit'))
                                <a href="{{url('admin/Roles/edit-content/'.$role->id)}}" class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></a>
                            @else
                            <a class="btn btn-success edit"><i class="fas fa-exclamation-triangle"></i></a>
                            @endif

                            @if($permission->checkPermission('Role delete'))
                                <a href="{{url('admin/Roles/delete-content/'.$role->id)}}" class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></a>
                            @else
                            <a class="btn btn-danger delete"><i class="fas fa-exclamation-triangle"></i></a>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {!! $roles->links() !!}
    </div>

@endsection