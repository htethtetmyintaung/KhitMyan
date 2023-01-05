<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\RoleRequest;

class RoleController extends Controller
{
    Public function index()
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.Roles.index',compact('roles','permissions'));
    }

    Public function create()
    {
        $permissions = Permission::all();
        return view('admin.Roles.create',compact('permissions'));
    }

    Public function store(RoleRequest $request)
    {
    
        $data = $request->validated();
        $role = new Role;
        $role->name = $data['role'];
        $role->created_by = Auth::user()->id;
        $role->save();

        $role->permission()->attach($request->permission);

        return redirect('admin/Roles/index')->with('message','Main Content Added Successfully');
    }
}
