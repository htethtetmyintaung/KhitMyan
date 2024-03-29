@extends('layouts.master')

@section('title','JM UNITY')

@section('content')

@php
use App\Http\Controllers\Admin\UsersController;
use App\Models\Permission;
$permission = new Permission;
@endphp


    <div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Add Permission</h1>
        <a href="{{url('admin/Permissions/index')}}" class='btn btn-primary'>Go to Back</a>
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="{{ url('admin/Permissions/add-content') }}" method="POST" enctype="multipart/form-data">
        @csrf    
        <div class="form-group form-flex">
            <label for="basicEmailInput">Name</label>
            <input class="form-control" type="text" name="permission" id="basicEmailInput" placeholder="">
        </div>
        <div class="form-group form-flex">
            <label for="basicEmailInput">Description</label>
            <textarea class="w-100" name="description" id="" cols="30" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection