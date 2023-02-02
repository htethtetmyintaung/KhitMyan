<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maincontents;

class DashboardController extends Controller
{
    Public function index()
    {
        $contents = Maincontents::paginate(5);
        return view('admin.Maincontents.index', compact('contents'));
    }
}
