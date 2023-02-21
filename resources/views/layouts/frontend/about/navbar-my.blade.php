<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">

        <a href="{{url('/my')}}" class="navbar-brand"><img src="{{asset('assets/images/rsz_khitmyan-logo.jpg')}}" class="top-logo" alt="" srcset=""></a>

        <div class="navbar-position w-100">
            <ul class="nav-ul p-0">
            @foreach ($contents as $content)
                <li class="nav-item w-100">
                    <!-- <a href="index.html" class="nav-link click-scroll-no "  >{{ $content->title_en }}</a> -->
                    <a href="{{'../my/'.$content->link_my}}" class="nav-link click-scroll-no "  >{{ $content->title_my }}</a>
                    <!-- <a href="index.html" class="nav-link click-scroll-no autolang"  >{{ $content->title_ja }}</a> -->
                </li>
            @endforeach
            </ul>
        </div>

        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Myanmar
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="{{url('/about')}}">English</a></li>
            <li><a class="dropdown-item" href="{{url('/about/ja')}}">Japan</a></li>
        </ul>
        </div>
                
    </div>
</nav>