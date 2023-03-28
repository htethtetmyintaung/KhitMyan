@extends('layouts.news-my')

@section('title','JM UNITH')

@section('content')

    <section class="abouttitle padding-top-bottom"> 
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <a href="{{url('/my')}}"> <strong>ပင်မစာမျက်နှာ</strong> </a> 
                    <span>></span>
                    <a href="{{url('/newslist/my')}}"> <strong>သတင်းများ</strong> </a> 
                    <span>></span>
                    <span>{{$news_item->title_my}}</span>
                </div>
                <div class="col-lg-6 col-12 d-flex justify-content-end">
                    <a href="#">Facebook</a> 
                    <span class="mr-5 ml-5"> | </span>
                    <a href="#">Twitter</a>
                </div>
            </div>

            <div>
                <h2 class="text-align-center">{{$news_item->title_my}}</h2>
                <hr>
            </div>

            <div>
                <div class="row mb-5">
                    <div class="col-lg-6 col-12 ">
                        <img src="{{ asset('uploads/news/'.$news_item->image) }}" class="w-100" alt="">
                    </div>
                    <div class="col-lg-6 col-12 new-detail">
                        <p>{!! $news_item->description_my !!}</p>
                        <p>
                        @foreach($news_item->category as $category)
                            <span class="category">{{$category->name_my}}</span>
                        @endforeach
                        <span class="created-by">{{$news_item->creator_my}}</span><br><br>
                        <span class="date">Posted on: {{$news_item->created_at->format("Y-m-d")}}</span>
                        </p>
                    </div>
                </div>

                
                
                <h3 class="text-align-center">Related News</h3>
                <hr>

                <div class="row mb-5">

                @foreach ($related_news->sortByDesc('created_at') as $related_item) 
                    @if ($news_item->id != $related_item->id) 
                        <div class="col-lg-4 news-carousel ">
                            <div class="card-wrapper ">
                                <div class="card w-100" >
                                    <div class="image-wrapper">
                                        <img src="{{ asset('uploads/news/'.$related_item->image) }}"  alt="..." width="100%">
                                    </div>
                                    <div class="card-body">
                                        <a href="{{url('/news/'.$related_item->id)}}">
                                            <h5 class="card-title">{{ $related_item->title_my }}</h5>
                                            <p class="card-text">{!! $related_item->description_my !!}</p>
                                            <p>
                                                @foreach($related_item->category as $cate_name)
                                                    <span class="category">{{$cate_name->name_my}}</span>
                                                @endforeach
                                                <span class="created-by">{{$related_item->creator_my}}</span><br>
                                                <span class="date">Posted on: {{$related_item->created_at->format("Y-m-d")}}</span>
                                            </p>
                                            
                                            <span class="btn btn-primary news-detail-link">More Detail<i class="bi-arrow-right"></i></span>
                                            
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                  

                </div>

            </div>
            </div>
        </div>
    </section>

@endsection