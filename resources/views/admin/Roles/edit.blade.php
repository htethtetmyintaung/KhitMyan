@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Edit Role</h1>
        <a href="{{url('admin/Roles/index')}}" class='btn btn-primary'>Go to Back</a>
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="{{url('admin/Roles/update-content/'.$roles->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group form-flex">
                <label for="basicEmailInput">Name</label>
                <input class="form-control" type="text" name="role" value="{{$roles->name}}" id="basicEmailInput" placeholder="">
            </div>
            <div class="form-check form-flex">
            <label class="form-check-label">Permision</label>
            <ul class="permision-list">
                <li>
                    @foreach ($permissions as $permission)
                    <label >
                        <input type="checkbox" name="permission[]" value="{{$permission->id}}"> 
                        {{$permission->name}}
                        <span class="checkmark"></span>
                    </label>

                    @endforeach 

                </li>
            </ul>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection