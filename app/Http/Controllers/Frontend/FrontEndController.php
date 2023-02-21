<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Maincontents;
use App\Models\Homecontents;
use App\Models\AboutUs;
use App\Models\Galleries;
use App\Models\MainGalleries;
use App\Models\SubGalleries;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function english()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::first();
        if (!$about_contents) {
            abort(404);
        }
        $galleries = Galleries::first();
        if (!$galleries) {
            abort(404);
        }
        $main_galleries = MainGalleries::first();
        if (!$main_galleries) {
            abort(404);
        }
        $contacts = ContactUs::first();
        if (!$contacts) {
            abort(404);
        }
        return view('template.home.index', compact('contents','contacts','home_contents','about_contents','galleries','main_galleries'));
    }

    public function myanmar()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::first();
        $galleries = Galleries::first();
        $main_galleries = MainGalleries::first();
        $contacts = ContactUs::first();
        return view('template.home.index-my', compact('contents','contacts','home_contents','about_contents','galleries','main_galleries'));
    }

    public function japan()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::first();
        $galleries = Galleries::first();
        $main_galleries = MainGalleries::first();
        $contacts = ContactUs::first();
        return view('template.home.index-ja', compact('contents','contacts','home_contents','about_contents','galleries','main_galleries'));
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

    public function gallery($content_id)
    {
        $main_galleries = MainGalleries::find($content_id);
        $sub_galleries = SubGalleries::paginate(5);
        $contents = Maincontents::all();
        $galleries = Galleries::first();
        return view('template.gallery.detail', compact('contents','galleries','main_galleries','sub_galleries'));
    }

    public function gallery_my($content_id)
    {
        $main_galleries = MainGalleries::find($content_id);
        $sub_galleries = SubGalleries::paginate(5);
        $contents = Maincontents::all();
        $galleries = Galleries::first();
        return view('template.gallery.detail-my', compact('contents','galleries','main_galleries','sub_galleries'));
    }

    public function gallery_ja($content_id)
    {
        $main_galleries = MainGalleries::find($content_id);
        $sub_galleries = SubGalleries::paginate(5);
        $contents = Maincontents::all();
        $galleries = Galleries::first();
        return view('template.gallery.detail-ja', compact('contents','galleries','main_galleries','sub_galleries'));
    }
}
