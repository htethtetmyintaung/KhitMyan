@extends('layouts.newslist-ja')

@section('title','JM UNITY')

@section('content')

<section class="abouttitle padding-top-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <a href="{{url('/ja')}}"> <strong>ホーム</strong> </a> 
                <span>></span>
                <span>情報</span>
            </div>
            <div class="col-lg-6 col-12 d-flex justify-content-end">
                <a href="#">Facebook</a> 
                <span class="mr-5 ml-5"> | </span>
                <a href="#">Twitter</a>
            </div>
        </div>

        <div>
            <h2 class="text-align-center">{{$news->title_ja}}</h2>
            <hr>
        </div>

        <div>
            <div class="news-listpage mb-5">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-category1-tab" data-bs-toggle="pill" data-bs-target="#pills-category1" type="button" role="tab" aria-controls="pills-category1" aria-selected="true">All</button>
                    </li>
                    @foreach($categories as $category)
                    
                        <li class="nav-item" role="presentation">
                            <button class="nav-link " id="pills-{{ $category->id }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $category->id }}" type="button" role="tab" aria-controls="pills-{{ $category->id }}" aria-selected="true">{{ $category->name_ja }}</button>
                        </li>

                    @endforeach 
                    
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-category1" role="tabpanel" aria-labelledby="pills-category1-tab">
                        <div class="row">
                            @foreach($newlists as $item)
                            <div class="col-lg-4 news-carousel news-item">
                                <div class="card-wrapper">
                                    <div class="card w-100" >
                                        <div class="image-wrapper">
                                            <img src="{{ asset('uploads/news/'.$item->image) }}"  alt="..." width="100%">
                                        </div>
                                        <div class="card-body">
                                            <a href="{{url('/news/'.$item->id.'/ja')}}">
                                                <h5 class="card-title">{{$item->title_ja}}</h5>
                                                <p class="card-text">{!! $item->description_ja !!}</p>
                                                <p>
                                                    @foreach($item->category as $cate_item)
                                                    <span class="category">{{$cate_item->name_ja}}</span>
                                                    @endforeach
                                                    <span class="created-by">{{$item->creator_ja}}</span><br>
                                                    <span class="date">Posted on: {{$item->created_at->format("Y-m-d")}}</span>
                                                </p>
                                                
                                                <span class="btn btn-primary news-detail-link">More Detail<i class="bi-arrow-right"></i></span>
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {!! $newlists->links() !!}
                    </div>
                    @foreach($categories as $category)
                    <div class="tab-pane " id="pills-{{ $category->id }}" role="tabpanel" aria-labelledby="pills-{{ $category->id }}-tab">
                        <div class="row">
                        @foreach($category->category_news as $item)
                            <div class="col-lg-4 news-carousel news-item">
                                <div class="card-wrapper">
                                    <div class="card w-100" >
                                        <div class="image-wrapper">
                                            <img src="{{ asset('uploads/news/'.$item->image) }}"  alt="..." width="100%">
                                        </div>
                                        <div class="card-body">
                                            <a href="{{url('/news/'.$item->id.'/ja')}}">
                                                <h5 class="card-title">{{$item->title_ja}}</h5>
                                                <p class="card-text">{!! $item->description_ja !!}</p>
                                                <p>
                                                    @foreach($item->category as $cate_item)
                                                    <span class="category">{{$cate_item->name_ja}}</span>
                                                    @endforeach
                                                    <span class="created-by">{{$item->creator_ja}}</span><br>
                                                    <span class="date">Posted on: {{$item->created_at->format("Y-m-d")}}</span>
                                                </p>
                                                
                                                <span class="btn btn-primary news-detail-link">More Detail<i class="bi-arrow-right"></i></span>
                                                
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>     
        </div>
        
    </div>
</section>

@endsection