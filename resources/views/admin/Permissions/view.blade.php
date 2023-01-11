@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
    <h1 class="mt-4">{{$permissions->name}}</h1>
    <a href="{{url('admin/Permissions/index')}}" class='btn btn-primary'>Go to Back</a>
    </div>
    <hr>
    <dl class="row">
        <dt class="col-sm-3">Permission name</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$permissions->name}}</p>
        </dd>

        <dt class="col-sm-3">Created by</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$permissions->created_by}}</p>
        </dd>

        <dt class="col-sm-3">Created at</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$permissions->created_at}}</p>
        </dd>

        <dt class="col-sm-3 text-truncate">Updated at</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$permissions->updated_at}}</p>
        </dd>

        <dt class="col-sm-3">Description</dt>
        <dd class="col-sm-9 d-flex">
            <span class="mr-5">-</span>
            <p>{{$permissions->description}}</p>
        </dd>
    </dl>

</div>

@endsection