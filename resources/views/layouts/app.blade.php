<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- GOOGLE SEO -->    
    <meta name="robots" content="index,follow" />
    <meta name="geo.region" content="MX" />

    <!--SEO Organico -->  
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    @yield('seo')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,600,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="app">

    <div class="navbar-fixed">
        <nav class="transparent z-depth-0" id="main-menu">
            <div class="nav-wrapper container">
                <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo.png" width="180px" alt=""></a>
                <a href="" class="sidenav-trigger" data-target="movil"><i class="material-icons">menu</i></a>
                <ul class="hide-on-med-and-down right">
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="" class="white-text"><i class="fab fa-facebook-f rs"></i></a></li>
                    <li><a href="" class="white-text"><i class="fab fa-instagram rs"></i></a></li>
                    <li><a href="" class="white-text"><i class="fab fa-youtube rs"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>

    @include('partials.movil')


    @yield('content')

    <footer class="page-footer footer">
        <div class="row container">
            <div class="col m4 s12 offset-m4 center">
                <img src="/img/iso.png" alt="">
                <p class="light">3787015136</p>
                <p class="light">Av. Jacarandas #517, Tepatitlán de Morelos, Jalisco.</p>
                <a href="" class="icon"><i class="fab fa-facebook-f white-text "></i></a>
                <a href="" class="icon"><i class="fab fa-instagram white-text "></i></a>
                <a href="" class="icon"><i class="fab fa-youtube white-text "></i></a>
            </div>
        </div>
    </footer>



    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/3d376d57db.js" crossorigin="anonymous"></script>
    @yield('scripts')
    <script>
        // Nav color on scroll
        $(window).scroll(function() {
            if ($("#main-menu").offset().top > $( window ).height()) {
                $("#main-menu").addClass("black");
                $("#main-menu").removeClass("transparent");
            } else {
                $("#main-menu").removeClass("black");
                $("#main-menu").addClass("transparent");
            }
        });
    </script>
</body>
</html>
