<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    Public function index()
    {
        return view('admin.Users.index');
    }

    Public function create()
    {
        return view('admin.Users.create');
    }
}
