@extends('layouts.master')

@section('title','Khit Myan')

@php
use App\Http\Controllers\Admin\UsersController;
use App\Models\Permission;
$permission = new Permission;
@endphp

@section('content')

<div class="container-fluid px-4">
    <div class='title-flex'>
        <h1 class="mt-4">Galleries</h1>
        @if($permission->checkPermission('Template create'))
            <a href="{{ url('admin/Galleries/add-content') }}" class='btn btn-primary'><i class="fa-solid fa-square-plus"></i>ADD</a>
        @else
        <a class="btn btn-primary"><i class="fas fa-exclamation-triangle"></i></a>
        @endif
    </div>
    <hr>

    <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">English</th>
                <th scope="col">Myanmar</th>
                <th scope="col">Japan</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($galleries as $key=>$gallery)
                <tr>
                <td scope="row">{{ ++$key }}</td>
                <td>
                    <p>{{ $gallery->title_en }}</p>
                </td>
                <td>
                    <p>{{ $gallery->title_my }}</p>
                </td>
                <td>
                    <p>{{ $gallery->title_ja }}</p>
                </td>
                <td>
                    <div class="d-flex justify-content-center">
                        @if($permission->checkPermission('Template view'))
                            <a href="{{ url('admin/Galleries/show-content/'.$gallery->id) }}" class="btn btn-success view"><i class="fa-solid fa-eye"></i></a>
                        @else
                        <a class="btn btn-success view"><i class="fas fa-exclamation-triangle"></i></a>
                        @endif   

                        @if($permission->checkPermission('Template edit'))
                            <a href="{{ url('admin/Galleries/edit-content/'.$gallery->id) }}" class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        @else
                        <a class="btn btn-success edit"><i class="fas fa-exclamation-triangle"></i></a>
                        @endif  

                        @if($permission->checkPermission('Template delete'))
                            <a href="{{ url('admin/Galleries/delete-content/'.$gallery->id) }}" class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></a>
                        @else
                        <a class="btn btn-danger delete"><i class="fas fa-exclamation-triangle"></i></a>
                        @endif  
                        
                    </div>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {!! $galleries->links() !!}
</div>


@endsection