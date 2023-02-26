@extends('layouts.mission-my')

@section('title','Khit Myan')

@section('content')

@php
    $values = explode(',',$mission->slide_image);
@endphp

<section class="abouttitle padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <a href="{{url('/my')}}"> <strong>ပင်မစာမျက်နှာ</strong> </a> 
                <span>></span>
                <a href="{{url('/my#service')}}"> <strong>ဝန်ဆောင်မှု</strong> </a> 
                <span>></span>
                <span>Mission</span>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-end">
                <a href="#">Facebook</a> 
                <span class="mr-5 ml-5"> | </span>
                <a href="#">Twitter</a>
            </div>
        </div>

        <div>
            <div>
                <h2 class="text-align-center">{{$mission->title_my}}</h2>
                <hr>
            </div>

            <div class="row mb-5">
                <div class="col-lg-6 col-12">
                    <img src="{{ asset('uploads/mission/cover/'.$mission->cover_image) }}" class="w-100" alt="">
                </div>
                <div class="col-lg-6 col-12">
                {!! $mission->description_my !!}
                </div>
            </div>

            <div class="service-img-slider text-center my-3 mb-5">
                <div class="row mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                        @foreach($values as $value)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{ asset('uploads/mission/slider/'.$value) }}" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>		
            </div>
        </div>   
         
        <div>   
            @php 
            use App\Models\Service;
            $service = Service::get(['id', 'category_my']);
            foreach($service as $category)
            {
                foreach($clients as $client)
                if($category->id == $client->service_id)
                {
                    $category_title = $category->category_my;
                }
            }
            
            @endphp
            
            <h3 class="text-align-center">{{$category_title}}</h3>
            <hr>

            <div class="row mb-5">
            @foreach($clients as $client)
                <div class="col-lg-4 col-12 clients">
                    <a href="{{$client->link}}">
                    <img src="{{ asset('uploads/client/'.$client->image) }}" alt="">
                    <h6>{{$client->name_my}}</h6>
                    <p>{!! $client->description_my !!}</p>
                    <span class="custom-btn btn ">
                        See More<i class="bi-arrow-right"></i>
                    </span>
                    </a>
                </div>
            @endforeach
            </div>
            
            <div class="d-flex justify-content-center">
            {!! $clients->links() !!}
            </div>
        </div>
        
        </div>
    </div>
</section>

@endsection

