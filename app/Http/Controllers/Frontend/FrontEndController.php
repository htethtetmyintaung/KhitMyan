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
use App\Models\News;
use App\Models\Category;
use App\Models\NewsItem;
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
        
        $news = News::first();
        if(!$news) {
            abort(404);
        }
        $categories = Category::all();
        if(!$categories) {
            abort(404);
        }
        $news_item = NewsItem::orderBy('created_at', 'DESC')->get();
        if(!$news_item) {
            abort(404);
        }
        return view('template.home.index', compact('contents','contacts','home_contents','about_contents','service','mission','vision','galleries','main_galleries','news','categories','news_item'));
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
        $news = News::first();
        $categories = Category::all();
        $news_item = NewsItem::orderBy('created_at', 'DESC')->get();
        $contacts = ContactUs::first();
        return view('template.home.index-my', compact('contents','contacts','home_contents','about_contents','service','mission','vision','galleries','main_galleries','news','categories','news_item'));
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
        $news = News::first();
        $categories = Category::all();
        $news_item = NewsItem::orderBy('created_at', 'DESC')->get();
        $contacts = ContactUs::first();
        return view('template.home.index-ja', compact('contents','contacts','home_contents','about_contents','service','mission','vision','galleries','main_galleries','news','categories','news_item'));
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

    public function newslist()
    {
        $contents = Maincontents::all();
        $news = News::first();
        $categories = Category::with('category_news')->get();
        $newlists = NewsItem::orderBy('created_at', 'DESC')->paginate(6);
        return view('template.newslist.list', compact('contents','news','categories','newlists'));
    }

    public function newslist_my()
    {
        $contents = Maincontents::all();
        $news = News::first();
        $categories = Category::with('category_news')->get();
        $newlists = NewsItem::orderBy('created_at', 'DESC')->paginate(6);
        return view('template.newslist.list-my', compact('contents','news','categories','newlists'));
    }

    public function newslist_ja()
    {
        $contents = Maincontents::all();
        $news = News::first();
        $categories = Category::with('category_news')->get();
        $newlists = NewsItem::orderBy('created_at', 'DESC')->paginate(6);
        return view('template.newslist.list-ja', compact('contents','news','categories','newlists'));
    }

    public function news($content_id)
    {
        $contents = Maincontents::all();
        $news_item = NewsItem::find($content_id);
        $categories = Category::all();
        $cat_item = $news_item->category;
        $cat_id  = json_decode($cat_item,',');
        foreach($cat_id as $d){
            $name = $d['id'];
            foreach ($categories as $category) {
                if ($category->id == $name ) {
                       
                        $related_news = $category->category_news;
                    
                }
            }
        }

        // $related = NewsItem::all();
        // foreach ($related as $value) {
        //     foreach ($value->category as $news_value) {
        //         foreach ($categories as $category) {
        //             if ($category->id == $news_value->id) {
        //                 $related_news = $category->category_news;
        //             }
        //         }
        //     }
        // }
        
        return view('template.news.detail', compact('contents','news_item','categories','related_news'));
    }

    public function news_my($content_id){
        $contents = Maincontents::all();
        $news_item = NewsItem::find($content_id);
        $categories = Category::all();
        $cat_item = $news_item->category;
        $cat_id  = json_decode($cat_item,',');
        foreach($cat_id as $d){
            $name = $d['id'];
            foreach ($categories as $category) {
                if ($category->id == $name ) {
                       
                        $related_news = $category->category_news;
                    
                }
            }
        }
        
        
        return view('template.news.detail-my', compact('contents','news_item','categories','related_news'));
    }

    public function news_ja($content_id){
        $contents = Maincontents::all();
        $news_item = NewsItem::find($content_id);
        $categories = Category::all();
        $cat_item = $news_item->category;
        $cat_id  = json_decode($cat_item,',');
        foreach($cat_id as $d){
            $name = $d['id'];
            foreach ($categories as $category) {
                if ($category->id == $name ) {
                       
                        $related_news = $category->category_news;
                    
                }
            }
        }
        
        
        return view('template.news.detail-ja', compact('contents','news_item','categories','related_news'));
    }
}
