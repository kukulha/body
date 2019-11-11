<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,600,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="dashboard">

    <div class="navbar-fixed">
        <nav class="black">
            <div class="nav-wrapper container">
                <a href="{{ route('home') }}" class="brand-logo"><img src="/img/logo.png" width="180px" alt=""></a>
                <a href="" class="sidenav-trigger" data-target="movil"><i class="material-icons">menu</i></a>
                <ul class="hide-on-med-and-down right">
                    <li><a href="{{ route('home') }}">Ver Página</a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='articulos'>Articulos <i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='clases'>Clases <i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class='dropdown-trigger' href='#' data-target='pagina'>Pagina <i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="{{ route('messages.index') }}">Mensajes</a></li>

                </ul>
            </div>
        </nav>
    </div>

    <!-- Dropdown Structure -->
    <ul id='articulos' class='dropdown-content black'>
        <li><a href="{{ route('categories.index') }}" class="white-text">Categorias</a></li>
        <li><a href="{{ route('posts.index') }}" class="white-text">Articulos</a></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id='clases' class='dropdown-content black'>
        <li><a href="{{ route('types.index') }}" class="white-text">Tipo de clase</a></li>
        <li><a href="{{ route('lessons.index') }}" class="white-text">Horarios</a></li>
    </ul>

    <!-- Dropdown Structure -->
    <ul id='pagina' class='dropdown-content black'>
        <li><a href="{{ route('promotions.index') }}" class="white-text">Promociones</a></li>
        <li><a href="{{ route('instructors.index') }}" class="white-text">Instructores</a></li>
    </ul>

    @include('partials.movil')

    @if(session('info'))
            <div class="container section center">
                <div class="row">
                    <div class="col s12 green lighten-5 ">
                        <p class="green-text text-darken-4 light">{{ session('info') }}</p>
                    </div>
                </div>
            </div>
        @endif

        @if(count($errors))
            <div class="container section">
                <div class="row">
                    <div class="col s12 red lighten-4">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li class="red-text text-accent-4">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif


    @yield('content')




    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
