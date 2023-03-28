@extends('layouts.master')

@section('title','JM UNITY')

@php
use App\Http\Controllers\Admin\UsersController;
use App\Models\Permission;
$permission = new Permission;

@endphp


@section('content')

<div class="container-fluid px-4">
        @if(session('message'))
            <div class="alert alert-success">{{ session('message') }}</div>
        @endif
        <div class='title-flex'>
            <h1 class="mt-4">Our Client</h1>
            
            <div class="d-flex">
                <div class="search-item">
                    <form action="{{ url('admin/Client/index') }}" method="GET" class="d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                        <div class="input-group">
                            <a href="{{ url('admin/Client/index') }}" class="refresh-btn">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        <span class="fas fa-sync-alt"></span>
                                    </button>
                                </span>
                            </a>
                            <input class="form-control" type="text" name="keyword" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>

                @if($permission->checkPermission('Template create'))
                    <a href="{{ url('admin/Client/add-content') }}" class='btn btn-primary'><i class="fa-solid fa-square-plus"></i>ADD</a>
                @else
                    <a class="btn btn-primary"><i class="fas fa-exclamation-triangle"></i></a>
                @endif
            </div>
        </div>
        <hr>

        <div class="tablescroll">
            <table class="table">
                <thead class="table_bottom">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" >English</th>
                        <th scope="col" >Myanmar</th>
                        <th scope="col" >Japan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contents as $key=>$content)
                    <tr>
                        <td scope="row">{!!  $contents->firstItem() +$key!!}</td>
                        <td>
                           <p>{{$content->name_en}}</p>
                        </td>
                        <td>
                            <p>{{$content->name_my}}</p>
                        </td>
                        <td>
                            <p>{{$content->name_ja}}</p>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                @if($permission->checkPermission('Template view'))
                                    <a href="{{ url('admin/Client/show-content/'.$content->id) }}" class="btn btn-success view"><i class="fa-solid fa-eye"></i></a>
                                @else
                                    <a class="btn btn-success view"><i class="fas fa-exclamation-triangle"></i></a>
                                @endif

                                @if($permission->checkPermission('Template edit'))
                                    <a href="{{ url('admin/Client/edit-content/'.$content->id) }}" class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                @else
                                    <a class="btn btn-success edit"><i class="fas fa-exclamation-triangle"></i></a>
                                @endif

                                @if($permission->checkPermission('Template delete'))
                                    <form method="POST" action="{{ url('admin/Client/delete-content/'.$content->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <!-- <a href="{{ url('admin/Client/delete-content/'.$content->id) }}" class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></a> -->
                                @else
                                    <a class="btn btn-danger delete"><i class="fas fa-exclamation-triangle"></i></a>
                                @endif
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $contents->links() !!}
       
    </div>

@endsection