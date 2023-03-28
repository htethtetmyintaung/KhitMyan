@extends('layouts.gallery-my')

@section('title','JM UNITY')

@section('content')

        <section class="hero section-hero section-padding" style="background-image: url({{asset('uploads/maingalleries/'.$main_galleries->image) }})">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 text-center mx-auto">
                        <div class="section-hero-text">
                            <small class="small-title text-warning">{{$main_galleries->title_my}}</small>

                            <h1 class="text-white main-gallery-desp">{!! $main_galleries->description_my !!}</h1>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="projects section-padding">
            <div class="container">
                <div class="row mb-5">

                    <div class="col-lg-10 col-12 mb-5">
                        <h2 class="mb-3">{{$galleries->title_my}}</h2>

                        <p>{!! $galleries->description_my !!}</p>
                    </div>
                </div>

                <div class="row mb-5">
                @foreach($main_galleries->sub_galleries as $sub_gallery)
                    <div class="col-lg-6 col-12 mb-5">
                        <img src="{{ asset('uploads/subgalleries/'.$sub_gallery->image) }}" class="img-fluid projects-image" alt="">

                        <h2 class="mt-3 mb-1">{{$sub_gallery->title_my}}</h2>

                        <p>{!! $sub_gallery->description_my !!}</p>
                    </div>
                @endforeach
                </div>

                {!! $sub_galleries->links() !!}

            </div>
        </section>

@endsection

