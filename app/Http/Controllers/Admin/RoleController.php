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
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $roles = Role::where(function($query) use ($keyword)
        {
            if($keyword !=null){
                $query->where('name','LIKE','%'.$keyword.'%')->get();
            }
           
        })
        ->paginate(5);
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
        $role->created_by = Auth::user()->name;
        $role->save();

        $role->permission()->attach($request->permission);

        return redirect('admin/Roles/index')->with('message','Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $roles = Role::find($content_id);
        $permissions = Permission::all();
        return view('admin.Roles.edit',compact('roles','permissions'));
    }

    Public function update(RoleRequest $request,$content_id)
    {
        $data = $request->validated();
        $role = Role::find($content_id);
        $role->name = $data['role'];
        $role->created_by = Auth::user()->name;
        $role->update();

        $role->permission()->sync($request->permission);

        return redirect('admin/Roles/index')->with('message','Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        
        $content = Role::find($content_id);
        if ($content) 
        {
            $content->permission()->detach();
            $content->delete();
            return redirect('admin/Roles/index')->with('message','Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Roles/index')->with('message','No Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $roles = Role::find($content_id);
        $permissions = Permission::all();
        return view('admin.Roles.view',compact('roles','permissions'));
    }
}
