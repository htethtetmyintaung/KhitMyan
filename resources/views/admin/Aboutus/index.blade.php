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
            <h1 class="mt-4">About Us</h1>
      
            @if($permission->checkPermission('Template create') && count($contents) == 0)
                <a href="{{ url('admin/Aboutus/add-content') }}" class='btn btn-primary'><i class="fa-solid fa-square-plus"></i>ADD</a>
            @else
                <a class="btn btn-primary"><i class="fas fa-exclamation-triangle"></i></a>
            @endif
      

        </div>
        <hr>

        <div class="tablescroll">
            <table class="table">
                <thead class="table_bottom">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" colspan="3">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                    <tr>
                        <th scope="col" ></th>
                        <th scope="col">English</th>
                        <th scope="col">Myanmar</th>
                        <th scope="col">Japan</th>
                        <th scope="col" ></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($contents as $key=>$content)
                    <tr>
                        <td scope="row">{!!  $contents->firstItem() +$key!!}</td>
                        <td>
                            <p>{!! \Illuminate\Support\Str::words($content->description_en, 5,'....')  !!}</p>
                        </td>
                        <td>
                            <p>{!! \Illuminate\Support\Str::words($content->description_my, 5,'....')  !!}</p>
                        </td>
                        <td>
                            <p>{!! \Illuminate\Support\Str::words($content->description_ja, 5,'....')  !!}</p>
                        </td>
                        <td>
                            <div class="d-flex justify-content-center">
                                @if($permission->checkPermission('Template view'))
                                    <a href="{{ url('admin/Aboutus/show-content/'.$content->id) }}" class="btn btn-success view"><i class="fa-solid fa-eye"></i></a>
                                @else
                                    <a class="btn btn-success view"><i class="fas fa-exclamation-triangle"></i></a>
                                @endif

                                @if($permission->checkPermission('Template edit'))
                                    <a href="{{ url('admin/Aboutus/edit-content/'.$content->id) }}" class="btn btn-success edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                @else
                                    <a class="btn btn-success edit"><i class="fas fa-exclamation-triangle"></i></a>
                                @endif

                                @if($permission->checkPermission('Template delete'))
                                    <form method="POST" action="{{ url('admin/Aboutus/delete-content/'.$content->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete'><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                    <!-- <a href="{{ url('admin/Aboutus/delete-content/'.$content->id) }}" class="btn btn-danger delete"><i class="fa-solid fa-trash"></i></a> -->
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