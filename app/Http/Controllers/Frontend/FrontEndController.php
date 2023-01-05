<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Maincontents;
use App\Models\Homecontents;
use App\Models\AboutUs;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function english()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::all();
        $contacts = ContactUs::all();
        return view('template.home.index', compact('contents','contacts','home_contents','about_contents'));
    }

    public function myanmar()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::first();
        $contacts = ContactUs::first();
        return view('template.home.index-my', compact('contents','contacts','home_contents','about_contents'));
    }

    public function japan()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::first();
        $contacts = ContactUs::first();
        return view('template.home.index-ja', compact('contents','contacts','home_contents','about_contents'));
    }

    public function about()
    {
        $contents = Maincontents::all();
        $about_contents = AboutUs::first();   
        return view('template.about.detail', compact('contents','about_contents'));
    }

    public function about_my()
    {
        $contents = Maincontents::all();
        $about_contents = AboutUs::first();   
        return view('template.about.detail-my', compact('contents','about_contents'));
    }

    public function about_ja()
    {
        $contents = Maincontents::all();
        $about_contents = AboutUs::first();   
        return view('template.about.detail-ja', compact('contents','about_contents'));
    }
}
