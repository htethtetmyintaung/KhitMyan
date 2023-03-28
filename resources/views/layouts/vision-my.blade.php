<!doctype html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="Tooplate">

        <title>JM UNITY</title>

        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/tooplate-waso-strategy.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    </head>
    
    <body id="ဝန်ဆောင်မှု" class="h-100">


        @include('layouts.frontend.vision.navbar-my')
            <main class="main-height">
                @yield('content')

            </main>
        @include('layouts.frontend.vision.detail-footer')
            

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

        <script>
            //Multiple Image Slider
           let items = document.querySelectorAll('.carousel .carousel-item')

           items.forEach((el) => {
               const minPerSlide = 4
               let next = el.nextElementSibling
               for (var i=1; i<minPerSlide; i++) {
                   if (!next) {
               // wrap carousel by using first child
               next = items[0]
           }
           let cloneChild = next.cloneNode(true)
           el.appendChild(cloneChild.children[0])
           next = next.nextElementSibling
           }
           })
        </script>

    </body>
</html>