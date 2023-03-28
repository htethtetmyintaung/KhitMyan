@extends('layouts.master')

@section('title','JM UNITY')

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

        <form action="{{url('admin/Users/update-content/'.$users->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group form-flex">
                <label for="basicEmailInput">Name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name',$users->name) }}"
                      placeholder="Enter name" id="basicEmailInput" placeholder="">
            </div>
            <div class="form-group form-flex">
                <label for="basicEmailInput">Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email',$users->email) }}"
                      placeholder="Enter email" id="basicEmailInput" placeholder="">
            </div>
            <div class="form-group form-flex">
                <label for="password" class="">Password</label>

                <div class="w-100">
                    <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Enter password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group form-flex">
                <label for="password-confirm" class="">Confirm Password</label>

                <div class="w-100">
                    <input id="password-confirm" type="text" class="form-control" name="password_confirmation" placeholder="Re-enter password"  required autocomplete="new-password">
                </div>
            </div>
            <div class="form-group form-flex">
            <label for="basicSelect1">Select Role</label>
            <select class='form-control' name="role" id='basicSelect1'>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection