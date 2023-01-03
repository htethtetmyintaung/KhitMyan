@extends('layouts.home-ja')

@section('title','Khit Myan')

@section('content')

    <section class="hero">
        <div class="container-fluid h-100">
            <div class="row h-100">

                <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide padding-0" data-bs-ride="carousel">
                    <ul class="carousel-inner padding-0">
                    @foreach ($home_contents as $home_content)
                        <li class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="container position-relative h-100">
                                <div class="carousel-caption d-flex flex-column justify-content-center">
                                    <small class="small-title text-warning">{{$home_content->small_text_ja}} </small>

                                    <h1>{{$home_content->banner_text_ja}}</h1>

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


    <section class="about section-padding" id="section_2">
        <div class="container">
        
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    
                    <div class="about-image-wrap h-100">
                        <img src="{{ asset('uploads/aboutus/'.$about_contents->image) }}" class="img-fluid about-image" alt="">

                        <div class="about-image-info">
                            <h4 class="text-white">{{ $about_contents->image_title_ja }}</h4>

                            <p class="text-white mb-0">{{ $about_contents->image_description_ja }}</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-12 d-flex flex-column">
                    <div class="about-thumb bg-white shadow-lg mb-0 h-100">
                        
                        <div class="about-info">

                            <h2 class="mb-3">{{ $about_contents->title_ja }}</h2>

                            <h5 class="mb-3">{{ $about_contents->sub_title_ja }}</h5>

                            <p>{{ $about_contents->description_ja }}</p>
                        </div>
                        <div class="projects-btn-wrap mt-4 seemore">
                            <a href="{{url('/about/ja')}}">
                                <span class="custom-btn btn ">
                                続きを見る<i class="bi-arrow-right"></i>
                                </span>
                            </a>
                            
                        </div>
                        
                    </div>
                </div>

            </div>
     
        </div>
    </section>

@endsection