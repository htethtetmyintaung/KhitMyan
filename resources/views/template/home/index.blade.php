@extends('layouts.home')

@section('title','Khit Myan')

@section('content')

    <section class="hero" id="home">
        <div class="container-fluid h-100">
            <div class="row h-100">

                <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide padding-0" data-bs-ride="carousel">
                    <ul class="carousel-inner padding-0">
                    @foreach ($home_contents as $home_content)
                        <li class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="container position-relative h-100">
                                <div class="carousel-caption d-flex flex-column justify-content-center">
                                    <small class="small-title text-warning">{{$home_content->small_text_en}} </small>

                                    <h1>{!! \Illuminate\Support\Str::words($home_content->banner_text_en) !!}</h1>

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

    <section class="about section-padding" id="aboutus">
        <div class="container">
        
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    
                    <div class="about-image-wrap h-100">
                        <img src="{{ asset('uploads/aboutus/'.$about_contents->image) }}" class="img-fluid about-image" alt="">

                        <div class="about-image-info">
                            <h4 class="text-white">{{ $about_contents->image_title_en }}</h4>

                            <p class="text-white mb-0">{!! \Illuminate\Support\Str::words($about_contents->image_description_en) !!}</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-12 d-flex flex-column">
                    <div class="about-thumb bg-white shadow-lg mb-0 h-100">
                        
                        <div class="about-info">

                            <h2 class="mb-3">{{ $about_contents->title_en }}</h2>

                            <h5 class="mb-3">{{ $about_contents->sub_title_en }}</h5>

                            <p>{!! \Illuminate\Support\Str::words($about_contents->description_en, 20,'....') !!}</p>
                        </div>
                        <div class="projects-btn-wrap mt-4 seemore">
                            <a href="{{url('/about')}}">
                                <span class="custom-btn btn ">
                                    See More<i class="bi-arrow-right"></i>
                                </span>
                            </a>
                            
                        </div>
                        
                    </div>
                </div>

            </div>
           
        </div>
    </section>


    @foreach ($main_galleries->galleries as $gallery)
    <section class="projects section-padding pb-0" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                    
                    <small class="small-title">{{$gallery->title_en}}</small>

                    <h2>{{$gallery->sub_title_en}}</h2>
                    
                </div>
            </div>

                <div class="row grid-gallery">
                    @foreach($galleries->main_galleries as $main_gallery)
                    
                        <div class="sub-grid-gallery">
                            <div class="projects-thumb projects-thumb-small">
                                <a href="{{ url('/gallery/'.$main_gallery->id) }}">
                                    <img src="{{ asset('uploads/maingalleries/'.$main_gallery->image) }}" class="img-fluid projects-image" alt="">
                                    
                                    <div class="projects-info">
                                        <div class="projects-title-wrap">
                                            <small class="projects-small-title">{{$main_gallery->title_en}}</small>

                                            <h2 class="projects-title">{!! \Illuminate\Support\Str::words($main_gallery->description_en) !!}</h2>
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

@endsection