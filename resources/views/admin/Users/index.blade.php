@extends('layouts.master')

@section('title','Khit Myan')

@section('content')

    <div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
        <h1 class="mt-4">All Users</h1>
        <a href="{{ url('admin/Users/add-content') }}" class='btn btn-primary'>+ ADD Content</a>
        </div>
        <hr>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            
                <tr>
                    <td scope="row">1</td>
                    <td scope="row">HHMA</td>
                    <td>hhma@gmail.com</td>
                    <td>Admin</td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>
           
            </tbody>
        </table>
    </div>

@endsection