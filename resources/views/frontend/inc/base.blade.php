<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.jpeg') }}">

    @yield('css')

    <style>

    </style>

    <title>@yield('title')</title>
</head>

<body>

    {{-- Preloader --}}
    <div class="preloader">
        <div class="loader">
            <div class="wrapper">
                <div class="circle circle-1"></div>
                <div class="circle circle-1a"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-3"></div>
            </div>
            <span>Loading...</span>
        </div>
    </div>


    {{-- Header --}}
    @include('frontend.inc.header')


    @yield('content')

    @include('frontend.inc.footer')

    <div class="go-top">
        <i class='bx bx-up-arrow-alt'></i>
    </div>



    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('assets/js/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="{{ asset('assets/js/nice-select.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script>
        function toggleSearch() {
            console.log('toggleSearch');

            var x = document.getElementById("search-box");

            if (x.style.visibility === "hidden") {

                console.log('toggleSearch if');

                x.style.visibility = "visible";
                document.getElementById("search-toggle-btn").innerHTML = "<i class='fas fa-times'></i>"


            } else {

                x.style.visibility = "visible";
                console.log('toggleSearch else');
                x.style.visibility = "hidden";
                document.getElementById("search-toggle-btn").innerHTML = "<i class='bx bx-search'></i>"
            }
        }
    </script>

    @yield('js')
</body>

</html>
