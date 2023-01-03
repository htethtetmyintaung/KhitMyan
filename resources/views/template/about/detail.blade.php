@extends('layouts.about')

@section('title','Khit Myan')

@section('content')

    <section class="abouttitle padding-top-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <a href="index.html"> <strong>Home</strong> </a> 
                    <span>></span>
                    <span>About</span>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-end">
                    <a href="#">Facebook</a> 
                    <span class="mr-5 ml-5"> | </span>
                    <a href="#">Twitter</a>
                </div>
            </div>

            <div>
                <h2 class="text-align-center">{{ $about_contents->title_en }}</h2>
                <hr>
            </div>

            <div>
                <img src="images/khitmyan/rsz_khitmyan-logo.jpg" class="w-100" alt="">
                <h3>{{ $about_contents->sub_title_en }}</h3>
                <p>
                {{ $about_contents->description_en }}
                </p>
            </div>
        </div>
    </section>

@endsection

