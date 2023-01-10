@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
    <h1 class="mt-4">{{$roles->name}}</h1>
    <a href="{{url('admin/Roles/index')}}" class='btn btn-primary'>Go to Back</a>
    </div>
    <hr>
    <dl class="row">
        <dt class="col-sm-3">Role name</dt>
        <dd class="col-sm-9">- {{$roles->name}}</dd>

        <dt class="col-sm-3">Created by</dt>
        <dd class="col-sm-9">- {{$roles->created_by}}</dd>

        <dt class="col-sm-3">Created at</dt>
        <dd class="col-sm-9">- {{$roles->created_at}}</dd>

        <dt class="col-sm-3 text-truncate">Updated at</dt>
        <dd class="col-sm-9">- {{$roles->updated_at}}</dd>

        <dt class="col-sm-3">Permissions</dt>
        <dd class="col-sm-9">
            <ul class="permission-name">
                @foreach($roles->permission as $permission)
                <li>- {{$permission->description}}</li>
                @endforeach
            </ul>
        </dd>
    </dl>

</div>

@endsection