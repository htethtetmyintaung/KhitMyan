<!doctype html>
<html lang="en" class="h-100">
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
    
    <body id="newslist" class="h-100">


        @include('layouts.frontend.newslist.navbar-ja')
            <main class="">
                @yield('content')

            </main>
        @include('layouts.frontend.newslist.detail-footer')
            
 
        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>


    </body>
</html>