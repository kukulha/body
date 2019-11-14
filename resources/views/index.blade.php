@extends('layouts.app')

@section('title', 'Rendirse está prohibido')

@section('seo')
    <meta name="keywords" content="gimnasios en tepatitlan,gimnasios en tepatitlán,gym en tepatitlan,gimnasios cerca de mi,gimnasio con guarderia,gimnasio cerca de mi,gimnasio abierto hoy,instructores de gym,instructores de yoga,instructores certificados,instructores de gimnasio,ejercicios para pecho,ejercicios para espalda,ejercicio de calentamiento,ejercicio fisico,ejercicio para pecho,ejercicio para abdomen,ejercicio para gluteos,ejercicio para brazos,ejercicio abdomen,ejercicio bicicleta,ejercicio brazos,ejercicio bajo impacto,ejercicio con mancuernas,ejercicio cardio,ejercicio con pesas,ejercicio crunch,ejercicio con pelota,sauna vapor,sauna baja de peso,yoga para principiantes,yoga en pareja,yoga cerca de mi,yoga adelgaza,yoga al aire libre,yoga clases,yoga cerca,yoga con pelota,bicicleta de spinning,spinning gym,spinning intenso,spinning indoor cycling">
    <meta name="description" content="En Body Factory estamos comprometidos contigo, en ayudarte a cumplir tus metas , con los mejores asesores y además, el mejor ambiente.">
    <meta name="author" content="Kukulha.com">
    <meta name="designer" content="Kukulha.com">

    <!--SEO Facebook -->    
    <meta property="og:title" content="Body Factory">
    <meta property="og:description" content="En Body Factory estamos comprometidos contigo, en ayudarte a cumplir tus metas , con los mejores asesores y además, el mejor ambiente."> 
    <meta property="og:type" content="website">
    <meta property="og:url" content="http:gymbodyfactory.com">
    <meta property="og:image" content="http://gymbodyfactory.com/img/logo.png">
    <meta property=og:locale content="es_MX">

    <!--SEO Twitter -->    
    <meta property=twitter:card content="summary">
    <meta property=twitter:title content="Body Factory">
    <meta property=twitter:description content="En Body Factory estamos comprometidos contigo, en ayudarte a cumplir tus metas , con los mejores asesores y además, el mejor ambiente.">
    <meta property=twitter:url content="http://gymbodyfactory.com.mx">

    <!--Schema.org --> 
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "LocalBusiness",
            "name": "Body Factory",
            "url": "http://www.gymbodyfactory.com",
            "image": "http://gymbodyfactory.com/img/logo.png",
            "description" : "En Body Factory estamos comprometidos contigo, en ayudarte a cumplir tus metas , con los mejores asesores y además, el mejor ambiente.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Tepatitlán",
                "addressRegion": "MX-JAL",
                "postalCode": "47600",
                "streetAddress": "Av Jacarandas 517"
            },
            "telephone": "+52 3787015136",
            "priceRange" : "$"
        }
    </script>   
@endsection

@section('content')
<header>
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="/img/hero1@2x.jpg" >
                <div class="caption right-align">
                    <h2 class="amarillo-text title bold">¡Entrena</h3>
                    <h5 class="white-text bold title">Toda la semana!</h5>
                    <a href="#horarios" class="btn amarillo black-text">Horarios</a>
                </div>
            </li>
            <li>
                <img src="/img/hero2.jpg">
                <div class="caption left-align">
                    <h2 class="amarillo-text title bold">¡Rendirse</h3>
                    <h5 class="white-text bold title">está prohibido!</h5>
                    <a href="#instructores" class="btn amarillo black-text">Instructores</a>
                </div>
            </li>
            <li>
                <img src="/img/hero3.jpg" alt="">
                <div class="caption center-align">
                    <h2 class="white-text title bold">"La <span class="amarillo-text">fuerza</span> <br>está en ti"</h3>
                </div>
            </li>
        </ul>
    </div>
</header>

<main>
    <section class="section container center">
        <h4 class="white-text">Nosotros</h4>
        <p class="justify white-text light">En <span class="bold amarillo-text title">Body Factory</span> estamos comprometidos contigo, en ayudarte a cumplir tus metas , con los mejores asesores y además, el mejor ambiente.</p>
        <img src="/img/fuerza.png" class="responsive-img section" alt="">
        <h4 class="white-text title">Tenemos al mejor equipo <br><span class="amarillo-text bold">pensado para ti</span></h4>
    </section>

    <section class="section">
        <div class="row">
            <div class="col s12 hide-on-med-and-down">
                <ul class="tabs black ">
                    <li class="tab col s2"><a href="#servicios" class="amarillo-text">Servicios</a></li>
                    <li class="tab col s2"><a href="#instructores" class="amarillo-text">Instructores</a></li>
                    <li class="tab col s2"><a href="#instalaciones" class="amarillo-text">Instalaciones</a></li>
                    <li class="tab col s2"><a href="#horarios" class="amarillo-text">Horarios</a></li>
                    <li class="tab col s2"><a href="#clases" class="amarillo-text">Clases</a></li>
                    <li class="tab col s2"><a href="#promociones" class="amarillo-text">Promociones</a></li>
                </ul>
                @include('partials.tabs')
                
            </div>
        </div>
        
        <div class="row hide-on-large-only">
            <div class="col s12">
                <ul class="collapsible">
                    @include('partials.collapsible')
                </ul>
            </div>
        </div>
    </section>

    <section class="section container center">
        <h5 class="white-text title">No te pierdas las promociones <br> que tenemos para ti</h5>
        <h4 class="amarillo-text title">¿Qué esperas?</h4>
        <div class="row">
            <div class="col m8 s12 offset-m2">
                {{ Form::open(['route' => 'messages.store', 'method' => 'post']) }}
                    <div class="input-field center">
                        {{ Form::label('name', 'Nombre completo') }}
                        {{ Form::text('name', null, ['class' => 'white-text']) }}
                    </div>

                    <div class="input-field">
                        {{ Form::label('email', 'Correo Electrónico') }}
                        {{ Form::email('email', null,['class' => 'white-text']) }}
                    </div>

                    <div class="input-field">
                        {{ Form::label('phone', 'Teléfono') }}
                        {{ Form::tel('phone', null,['class' => 'white-text']) }}
                    </div>
                    <div class="input-field">
                        {{ Form::submit('Enviar', ['class' => 'btn amarillo black-text']) }}
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </section>

    <section class="section container center">
        <h4 class="white-text">Blog</h4>
        <div class="row">
          
                @forelse($posts as $post)
                <div class="col m4 s12 center card black">
                    <div class="card-image">
                        <img src="{{ Storage::url($post->featured) }}" class="responsive-img" alt="">
                    </div>
                    <div class="card-content">
                        <span class="card-title"><a href="" class="amarillo-text title">{{$post->name}}</a></span>
                        <p class="white-text justify">{{$post->excerpt}}</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('post', $post->slug) }}" class="btn amarillo black-text">Ver más</a>
                    </div> 
                </div>
                @empty
                    <em class="white-text title">No hay artículos.</em>
                @endforelse

        </div>
    </section>
</main>
@endsection
