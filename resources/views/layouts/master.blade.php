<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/summernote.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/summernote-lite.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/fontawesome-6.2.1.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    
</head>
<body class="adminbody">

    @include('layouts.backend.admin-navbar')

    <div id="layoutSidenav">

        @include('layouts.backend.admin-sidebar')
        <div id="layoutSidenav_content" >
            <main class="admincontents">
                @yield('content')
            </main>
            @include('layouts.backend.admin-footer')
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" ></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/js/summernote-lite.min.js') }}"></script>
    <script src="{{ asset('assets/js/fontawesome-6.2.1.js') }}" ></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script>
        $(document).ready(function () {
        var num = $('.property-fields__row').length;
        if (num - 1 == 0)
            $('#btnDel').attr('disabled', 'disabled');

        $('#btnAdd').click(function () {

            var num = $('.property-fields__row').length;
            var newNum = num + 1;
            var newElem = $('#property-fields__row-1').clone().attr('id', 'property-fields__row-' + newNum);


            newElem.find('.line-item-property__year label').attr('for', 'year_' + newNum).val('');
            newElem.find('.line-item-property__year input').attr('id', 'year_' + newNum).attr('name', 'slide_image[]').val('');


            $('#property-fields__row-' + num).after(newElem);

            $('#btnDel').attr('disabled', false);

            if (newNum == 19)

            $('#btnAdd').attr('disabled', 'disabled');

        });

        $('#btnDel').click(function () {
            var num = $('.property-fields__row').length; 

            $('#property-fields__row-' + num).remove();

            $('#btnAdd').attr('disabled', false);

            if (num - 1 == 1)

            $('#btnDel').attr('disabled', 'disabled');

        });
        });

    </script>

    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
    
        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                }
            });
        });
    
    </script>

    <script>
        $(function(){
            var current = location.pathname;
            $('.admin-sidebar').each(function(){
                var $this = $(this);
                // if the current path is like this link, make it active
                if($this.attr('href').indexOf(current) !== -1){
                    $this.addClass('active');
                }
            })
        })
    </script>

    <!-- <script>
    function myFunction() {
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
    }
    </script> -->
</body>
</html>