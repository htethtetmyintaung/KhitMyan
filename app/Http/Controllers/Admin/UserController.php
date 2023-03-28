<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;


class UserController extends Controller
{
    Public function index(Request $request)
    {
        $keyword = $request->keyword;
        $users = User::where(function($query) use ($keyword)
        {
            if ($keyword !=null) {
                $query->where('name','LIKE','%'.$keyword.'%')
                        ->orWhere('email','LIKE','%'.$keyword.'%')
                        ->get();
            }
        })->paginate(5);
        
        $roles = Role::all();
        $permission = Permission::all();

        // $data = auth()->user()->user_role()->first()->permission;
        // $arrPermission = [];
        // foreach($data as $value) 
        // $arrPermission[] = $value->name;
        // $collection = new Collection($arrPermission);
        // dd($collection->contains("Permission create")); //check permissions

        return view('admin.Users.index',compact('users','roles'));
    }

    Public function create()
    {
        $roles = Role::all();
        return view('admin.Users.create',compact('roles'));
    }

    Public function store(UserRequest $request)
    {
        $data = $request->validated();
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->created_by = Auth::user()->name;
        $user->save();

        $user->user_role()->attach($request->role);

        return redirect('admin/Users/index')->with('message','Content Added Successfully');
    }

    Public function edit($content_id)
    {
        $users = User::find($content_id);
        $roles = Role::all();
        return view('admin.Users.edit',compact('users','roles'));   
    }

    Public function update(UserRequest $request,$content_id)
    {
        $data = $request->validated();
        $user = User::find($content_id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->created_by = Auth::user()->name;
        $user->update();

        $user->user_role()->sync($request->role);

        return redirect('admin/Users/index')->with('message','Content Added Successfully');
    }

    Public function destroy($content_id)
    {
        $content = User::find($content_id);
        if ($content) 
        {
            $content->user_role()->detach();
            $content->delete();
            return redirect('admin/Users/index')->with('message','Content Deleted Successfully');
        }
        else
        {
            return redirect('admin/Users/index')->with('message','No Content Id Found');
        }
    }

    Public function show($content_id)
    {
        $users = User::find($content_id);
        return view('admin.Users.view',compact('users'));
    }
}

