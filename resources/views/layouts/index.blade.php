<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MidLand Inn') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/appCustom.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/css_LandingPage/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css_LandingPage/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css_LandingPage/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css_LandingPage/animate_carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/css_LandingPage/style_carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('css/css_LandingPage/owl.carousel.css')}}"/>
    <!-- <link rel="stylesheet" href="{{ asset('css/css_LandingPage/style2.css')}}"/> -->
    <link rel="stylesheet" href="{{ asset('css/css_LandingPage/style.css')}}"/>

</head>
<body>
    <!-- Page Preloder -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    @include('home.inc.navbar')
    <div id="app">
        <main class="py-4">
                @yield('content')
                @include('home.inc.footer')
        </main>
    </div>

    <script src="{{ asset('js/js_LandingPage/jquery.min.js')}}"></script>
    <script src="{{ asset('js/js_LandingPage/jquery.easing.min.js')}}"></script>
    <script src="{{ asset('js/js_LandingPage/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/js_LandingPage/wow.js')}}"></script>
    <script src="{{ asset('js/js_LandingPage/custom.js')}}"></script>
    <script src="{{ asset('js/js_LandingPage/owl.carousel.min.js')}}"></script>
    <!-- <script src="{{ asset('js/js_LandingPage/main2.js')}}"></script> -->
    <script src="{{ asset('js/js_LandingPage/main.js')}}"></script>
</body>
</html>
