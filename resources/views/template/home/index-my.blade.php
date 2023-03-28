@extends('layouts.home-my')

@section('title','JM UNITY')

@section('content')

    <section class="hero" id="ပင်မစာမျက်နှာ">
        <div class="container-fluid h-100">
            <div class="row h-100">

                <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide padding-0" data-bs-ride="carousel">
                    <ul class="carousel-inner padding-0">
                    @foreach ($home_contents as $home_content)
                        <li class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="container position-relative h-100">
                                <div class="carousel-caption d-flex flex-column justify-content-center">
                                    <small class="small-title text-warning">{{$home_content->small_text_my}} </small>

                                    <h1 class="header-text">{!! \Illuminate\Support\Str::words($home_content->banner_text_my) !!}</h1>

                                </div>
                            </div>

                            <div class="carousel-image-wrap">
                                <img src="{{ asset('uploads/home/'.$home_content->image) }}" class="img-fluid carousel-image" alt="">
                            </div>
                        </li>
                    @endforeach
                    </ul>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section class="about section-padding" id="အကြောင်းအရာ">
        <div class="container">
        
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    
                    <div class="about-image-wrap h-100">
                        <img src="{{ asset('uploads/aboutus/'.$about_contents->image) }}" class="img-fluid about-image" alt="">

                        <div class="about-image-info">
                            <h4 class="text-white">{{ $about_contents->image_title_my }}</h4>

                            <p class="text-white mb-0">{!! \Illuminate\Support\Str::words($about_contents->image_description_my) !!}</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-12 d-flex flex-column">
                    <div class="about-thumb bg-white shadow-lg mb-0 h-100">
                        
                        <div class="about-info">

                            <h2 class="mb-3">{{ $about_contents->title_my }}</h2>

                            <h5 class="mb-3">{{ $about_contents->sub_title_my }}</h5>

                            <p>{!! \Illuminate\Support\Str::words($about_contents->description_my, 20,'....') !!}</p>
                        </div>
                        <div class="projects-btn-wrap mt-4 seemore">
                            <a href="{{url('/about/my')}}">
                                <span class="custom-btn btn ">
                                ပိုမိုကြည့်ရှုရန်<i class="bi-arrow-right"></i>
                                </span>
                            </a>
                            
                        </div>
                        
                    </div>
                </div>

            </div>
        
        </div>
    </section>

    <section class="services section-padding" id="ဝန်ဆောင်မှု">
        <div class="container">
            <div class="row">

                <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                    <small class="small-title">{{ $service->title_my }}</small>

                    <h2>{!! $service->description_my !!}</h2>

                </div>

                <div class="col-lg-6 col-12">
                    <nav>
                        <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                            <div class="nav-link active" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="" role="tab" aria-controls="nav-business" aria-selected="true" style="width: 90%;">
                                <h3>{{$mission->title_my}}</h3>

                                <div>{{ Illuminate\Support\Str::limit(strip_tags($mission->description_my), 30) }}</div>
                            </div>

                            <div class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab" data-bs-target="#nav-strategy" type="" role="tab" aria-controls="nav-strategy" aria-selected="false" style="width: 90%;">
                                <h3>{{$vision->title_my}}</h3>
                                
                                <div>{!! \Illuminate\Support\Str::words(strip_tags($vision->description_my), 30) !!}</div>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-business" role="tabpanel" aria-labelledby="nav-intro-tab">
                            <img src="{{ asset('uploads/mission/cover/'.$mission->cover_image) }}" class="img-fluid w-100" alt="">

                            <h5 class="mt-4 mb-2">{{$mission->subtitle_my}}</h5>

                            <div>{!! Illuminate\Support\Str::limit(strip_tags($mission->description_my), 50) !!}</div>

                            <div class="projects-btn-wrap mt-4 seemore">
                                <a href="{{url('/mission/my')}}">
                                    <span class="custom-btn btn ">
                                        See More<i class="bi-arrow-right"></i>
                                    </span>
                                </a>
                                
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="nav-strategy" role="tabpanel" aria-labelledby="nav-strategy-tab">
                            <img src="{{ asset('uploads/vision/cover/'.$vision->cover_image) }}" class="img-fluid w-100" alt="">

                            <h5 class="mt-4 mb-2">{{$vision->subtitle_my}}</h5>

                            <div>{!! \Illuminate\Support\Str::words(strip_tags($vision->description_my), 50) !!}</div>

                            <div class="projects-btn-wrap mt-4 seemore">
                                <a href="/vision/my">
                                    <span class="custom-btn btn ">
                                        See More<i class="bi-arrow-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- <div class="tab-pane fade show" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                            <img src="images/khitmyan/khitmyan05.jpg" class="img-fluid w-100" alt="">

                            <h5 class="mt-4 mb-2">Events</h5>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>
                            <div class="projects-btn-wrap mt-4 seemore">
                                <a href="event-detail.html">
                                    <span class="custom-btn btn ">
                                        See More Eng<i class="bi-arrow-right"></i>
                                    </span>
                                    <span class="custom-btn btn autoseemore">
                                        See More Myan<i class="bi-arrow-right"></i>
                                    </span>
                                    <span class="custom-btn btn autoseemore">
                                        See More Jp<i class="bi-arrow-right"></i>
                                    </span>
                                </a>
                                
                            </div>
                        </div> -->

                    </div>
                </div>

            </div>
        </div>
    </section>


    @foreach ($main_galleries->galleries as $gallery)
    <section class="projects section-padding pb-0" id="မှတ်တမ်း">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                    
                    <small class="small-title">{{$gallery->title_my}}</small>

                    <h2>{{$gallery->sub_title_my}}</h2>
                    
                </div>
            </div>

                    <div class="row grid-gallery">
                        @foreach($galleries->main_galleries as $main_gallery)
                        
                            <div class="sub-grid-gallery">
                                <div class="projects-thumb projects-thumb-small">
                                    <a href="{{ url('/gallery/'.$main_gallery->id.'/my') }}">
                                        <img src="{{ asset('uploads/maingalleries/'.$main_gallery->image) }}" class="img-fluid projects-image" alt="">
                                        
                                        <div class="projects-info">
                                            <div class="projects-title-wrap">
                                                <small class="projects-small-title">{{$main_gallery->title_my}}</small>

                                                <h2 class="projects-title">{!! \Illuminate\Support\Str::words($main_gallery->description_my) !!}</h2>
                                            </div>

                                            <div class="projects-btn-wrap mt-4">
                                                <span class="custom-btn btn">
                                                    <i class="bi-arrow-right"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                       
                 </div>
                
            
           
        </div>
    </section>
    @endforeach

    <section class="news section-padding" id="သတင်းများ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                    <small class="small-title">{{ $news->title_my }} </small>

                    <h2>{!! $news->description_my !!}</h2>

                </div>
                <div class=" col-12 mx-auto">
                    <div id="carouselExampleControls" class="carousel slide news-carousel carousel-dark d-none d-md-block" data-bs-ride="carousel">
                        <div class="carousel-inner ">
                        @foreach($news_item->chunk(3) as $newsCollections)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="card-wrapper">
                                @foreach($newsCollections as $news_items)
                                    <div class="card" >
                                        <div class="image-wrapper">
                                            <img src="{{ asset('uploads/news/'.$news_items->image) }}"  alt="...">
                                        </div>
                                        <div class="card-body">
                                            <a href="{{url('/news/'.$news_items->id.'/my')}}">
                                                <h5 class="card-title">{{$news_items->title_my}}</h5>
                                                <p class="card-text">{!! $news_items->description_my !!}</p>
                                                <p>
                                                    @foreach($news_items->category as $category)
                                                    <span class="category">{{$category->name_my}}</span>
                                                    @endforeach
                                                    <span class="created-by">{{ $news_items->creator_my }}</span><br>
                                                    <span class="date">Posted on: {{$news_items->created_at->format("Y-m-d")}}</span>
                                                </p>
                                                
                                                <span class="btn btn-primary news-detail-link">More Detail<i class="bi-arrow-right"></i></span>
                                                
                                            </a>
                                        </div>
                                    </div>
                                @endforeach 
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div id="carouselExampleControlsScreen" class="carousel slide news-md-carousel " data-bs-ride="carousel">
                        <div class="carousel-inner">
                        @foreach($news_item->chunk(1) as $newsCollections)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            @foreach($newsCollections as $news_items)  
                                <div class="card">
                                    <img src="{{ asset('uploads/news/'.$news_items->image) }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                            <a href="{{url('/news/'.$news_items->id.'/my')}}">
                                                <h5 class="card-title">{{$news_items->title_my}}</h5>
                                                <p class="card-text">{!! $news_items->description_my !!}</p>
                                                <p>
                                                    @foreach($news_items->category as $category)
                                                    <span class="category">{{$category->name_my}}</span>
                                                    @endforeach
                                                    <span class="created-by">{{ $news_items->creator_my }}</span><br>
                                                    <span class="date">Posted on: {{$news_items->created_at->format("Y-m-d")}}</span>
                                                </p>
                                                
                                                <span class="btn btn-primary news-detail-link">More Detail<i class="bi-arrow-right"></i></span>
                                                
                                            </a>
                                        </div>
                                </div>
                            @endforeach
                            </div>
                        @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsScreen" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsScreen" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <div class="news-list">
                        <a href="{{url('/newslist/my')}}">
                        <span class="custom-btn btn ">
                            See More News<i class="bi-arrow-right"></i>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection