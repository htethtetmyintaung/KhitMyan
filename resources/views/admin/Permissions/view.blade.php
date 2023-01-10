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
        <dd class="col-sm-9">- {{$permissions->name}}</dd>

        <dt class="col-sm-3">Created by</dt>
        <dd class="col-sm-9">- {{$permissions->created_by}}</dd>

        <dt class="col-sm-3">Created at</dt>
        <dd class="col-sm-9">- {{$permissions->created_at}}</dd>

        <dt class="col-sm-3 text-truncate">Updated at</dt>
        <dd class="col-sm-9">- {{$permissions->updated_at}}</dd>

        <dt class="col-sm-3">Description</dt>
        <dd class="col-sm-9">- {{$permissions->description}}</dd>
    </dl>

</div>

@endsection