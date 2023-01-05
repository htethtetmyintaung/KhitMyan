<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\PermissionRequest;
use App\Http\Controllers\Controller;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
    Public function index()
    {
        $permissions = Permission::all();
        return view('admin.Permissions.index', compact('permissions'));
    }

    Public function create()
    {
        return view('admin.Permissions.create');
    }

    Public function store(PermissionRequest $request)
    {
        $data = $request->validated();
        $permission = new Permission;
        $permission->name = $data['permission'];
        $permission->created_by = Auth::user()->id;
        $permission->save();

        return redirect('admin/Permissions/index')->with('message','Main Content Added Successfully');
    }
}
