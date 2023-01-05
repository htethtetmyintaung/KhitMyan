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

    Public function edit($content_id)
    {
        $permissions = Permission::find($content_id);
        return view('admin.Permissions.edit',compact('permissions'));
    }

    Public function update(PermissionRequest $request,$content_id)
    {
        $data = $request->validated();
        $permission = Permission::find($content_id);
        $permission->name = $data['permission'];
        $permission->created_by = Auth::user()->id;
        $permission->update();

        return redirect('admin/Permissions/index')->with('message','Main Content Updated Successfully');
    }

    Public function destroy($content_id)
    {
        $content = Permission::find($content_id);
        if ($content) 
        {
            $content->role()->detach();
            $content->delete();
            return redirect('admin/Permissions/index')->with('message','Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Permissions/index')->with('message','No Content Id Found');
        }
    }
}
