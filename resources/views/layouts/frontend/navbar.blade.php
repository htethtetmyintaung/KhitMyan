<nav class="navbar navbar-expand-lg bg-white shadow-lg">
    <div class="container">

        <a href="index.html" class="navbar-brand">Khit <span class="text-danger">Myan</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse navbar-position" id="navbarNav">
            <ul id="lang_selected" class="nav-ul">
            @foreach ($contents as $content)
                <li class="nav-item w-100">
                    <a href="index.html" class="nav-link click-scroll-no "  >{{ $content->title_en }}</a>
                    <a href="index.html" class="nav-link click-scroll-no autolang"  >{{ $content->title_my }}</a>
                    <a href="index.html" class="nav-link click-scroll-no autolang"  >{{ $content->title_ja }}</a>
                </li>
            @endforeach

            </ul>
            <div>
            <ul class=" w-100">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class=" " title="EN">
                        
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}" class="transition-all duration-300 hover:text-blue2z">
                            @if($localeCode == 'en') 
                                EN
                            @elseif($localeCode == 'my')
                                Myanmar
                            @else
                                Japan
                            @endif
                            </a>
                    </li>
                    
                @endforeach
                </ul>
            </div>
            <!-- <div id="lang_selector" class="language-dropdown">
                <label for="toggle" class="lang-flag lang-en w-100" title="Click to select the language">
                    <span class="flag">English</span>
                </label>

                
            </div> -->

            
        </div>
                
    </div>
</nav>