@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        <div class='title-flex'>
        <h1 class="mt-4">Edit User</h1>
        <a href="{{url('admin/Users/index')}}" class='btn btn-primary'>Go to Back</a>
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
        @endif

        <form action="" method="" enctype="">
            <div class="form-group form-flex">
                <label for="basicEmailInput">Name</label>
                <input class="form-control" type="text" name="permission" id="basicEmailInput" placeholder="">
            </div>
            <div class="form-group form-flex">
                <label for="basicEmailInput">Email</label>
                <input class="form-control" type="email" name="permission" id="basicEmailInput" placeholder="">
            </div>
            <div class="form-group form-flex">
            <label for="basicSelect2">Role</label>
            <select multiple class="form-control" id='basicSelect2'>
            <option>go</option>
            <option>to</option>
            <option>it</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection