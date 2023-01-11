@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
    <h1 class="mt-4">{{$users->name}}</h1>
    <a href="{{url('admin/Users/index')}}" class='btn btn-primary'>Go to Back</a>
    </div>
    <hr>
    <dl class="row">
        <dt class="col-sm-3">User name</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$users->name}}</p>
        </dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$users->email}}</p>
        </dd>

        <dt class="col-sm-3">Created by</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$users->created_by}}</p>
        </dd>

        <dt class="col-sm-3">Created at</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$users->created_at}}</p>
        </dd>

        <dt class="col-sm-3">Updated at</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$users->updated_at}}</p>
        </dd>

        <dt class="col-sm-3">Role as</dt>
        <dd class="col-sm-9 ">
            <ul class="permission-name">
                @foreach($users->user_role as $role)
                <li class="d-flex">
                    <span class="mr-5">-</span>
                    <p>{{$role->name}}</p>
                </li>
                @endforeach
            </ul>
        </dd>

        <dt class="col-sm-3">Permission</dt>
        <dd class="col-sm-9 ">
            <ul class="permission-name">
            @foreach($users->user_role as $role)
                @foreach($role->permission as $permission)
                <li class="d-flex">
                    <span class="mr-5">-</span>
                    <p>{{$permission->description}}</p>
                </li>
                @endforeach
            @endforeach
            </ul>
        </dd>
    </dl>

</div>

@endsection