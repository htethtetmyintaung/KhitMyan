<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">

        <a href="{{url('/ja')}}" class="navbar-brand"><img src="{{asset('assets/images/jmugroup-logo.png')}}" class="top-logo" alt="" srcset=""></a>
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-position" id="navbarNav">
            <div class="navbar-position w-100">
                <ul class="nav-ul p-0">
                @foreach ($contents as $content)
                    <li class="nav-item w-100">
                        <!-- <a href="index.html" class="nav-link click-scroll-no "  >{{ $content->title_en }}</a> -->
                        <!-- <a href="index.html" class="nav-link click-scroll-no autolang"  >{{ $content->title_my }}</a> -->
                        <a href="{{'../ja/'.$content->link_ja}}" class="nav-link click-scroll-no "  >{{ $content->title_ja }}</a>
                    </li>
                @endforeach
                </ul>
            </div>

            <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Japan
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="{{url('/about/my')}}">Myanmar</a></li>
                <li><a class="dropdown-item" href="{{url('/about')}}">English</a></li>
            </ul>
            </div>
        </div>       
    </div>
</nav>