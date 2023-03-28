<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">

        <a href="{{url('/')}}" class="navbar-brand"><img src="{{asset('assets/images/jmugroup-logo.png')}}" class="top-logo w-100" alt="" srcset=""></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-position" id="navbarNav">
           
            <ul class="nav-ul p-0">
                @foreach ($contents as $content)
                    <li class="nav-item w-100">
                        <a href="{{$content->link_en}}" class="nav-link click-scroll-no "  >{{ $content->title_en }}</a>
                        <!-- <a href="index.html" class="nav-link click-scroll-no autolang"  >{{ $content->title_my }}</a> -->
                        <!-- <a href="index.html" class="nav-link click-scroll-no autolang"  >{{ $content->title_ja }}</a> -->
                    </li>
                @endforeach
            </ul>
         

            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    English
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{url('/my')}}">မြန်မာ</a></li>
                    <li><a class="dropdown-item" href="{{url('/ja')}}">日本語</a></li>
                </ul>
            </div>
        </div>       
    </div>
</nav>