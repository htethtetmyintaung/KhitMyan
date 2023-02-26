<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Maincontents;
use App\Models\Homecontents;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\Mission;
use App\Models\Vision;
use App\Models\Client;
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
        $service = Service::first();
        if (!$service) {
            abort(404);
        }
        $mission = Mission::first();
        if (!$mission) {
            abort(404);
        }
        $vision = Vision::first();
        if (!$vision) {
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
        return view('template.home.index', compact('contents','contacts','home_contents','about_contents','service','mission','vision','galleries','main_galleries'));
    }

    public function myanmar()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::first();
        $service = Service::first();
        $mission = Mission::first();
        $vision = Vision::first();
        $galleries = Galleries::first();
        $main_galleries = MainGalleries::first();
        $contacts = ContactUs::first();
        return view('template.home.index-my', compact('contents','contacts','home_contents','about_contents','service','mission','vision','galleries','main_galleries'));
    }

    public function japan()
    {
        $contents = Maincontents::all();
        $home_contents = Homecontents::all();
        $about_contents = AboutUs::first();
        $service = Service::first();
        $mission = Mission::first();
        $vision = Vision::first();
        $galleries = Galleries::first();
        $main_galleries = MainGalleries::first();
        $contacts = ContactUs::first();
        return view('template.home.index-ja', compact('contents','contacts','home_contents','about_contents','service','mission','vision','galleries','main_galleries'));
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

    public function mission()
    {
        $contents = Maincontents::all();
        $mission = Mission::first();   
        $clients = Client::paginate(6);   
        return view('template.mission.detail', compact('contents','mission','clients'));
    }

    public function mission_my()
    {
        $contents = Maincontents::all();
        $mission = Mission::first();   
        $clients = Client::paginate(3);   
        return view('template.mission.detail-my', compact('contents','mission','clients'));
    }

    public function mission_ja()
    {
        $contents = Maincontents::all();
        $mission = Mission::first();   
        $clients = Client::paginate(6);   
        return view('template.mission.detail-ja', compact('contents','mission','clients'));
    }

    public function vision()
    {
        $contents = Maincontents::all();
        $vision = Vision::first();   
        $clients = Client::paginate(6);   
        return view('template.vision.detail', compact('contents','vision','clients'));
    }

    public function vision_my()
    {
        $contents = Maincontents::all();
        $vision = Vision::first();   
        $clients = Client::paginate(6);    
        return view('template.vision.detail-my', compact('contents','vision','clients'));
    }

    public function vision_ja()
    {
        $contents = Maincontents::all();
        $vision = Vision::first();   
        $clients = Client::paginate(6);     
        return view('template.vision.detail-ja', compact('contents','vision','clients'));
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
