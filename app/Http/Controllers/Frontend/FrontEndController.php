<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Maincontents;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $contents = Maincontents::all();
        return view('layouts.frontend', compact('contents'));
    }
}
