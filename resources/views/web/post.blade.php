@extends('layouts.app')
@section('title', 'Rendirse está prohibido')

@section('seo')
    <meta name="keywords" content="@foreach($post->tags as $tag) {{ $tag->name }}, @endforeach">
    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="author" content="Kukulha.com">
    <meta name="designer" content="Kukulha.com">

    <!--SEO Facebook -->    
    <meta property="og:title" content="{{ $post->name }}">
    <meta property="og:description" content="{{ $post->excerpt }}">
    <meta property="fb:app_id" content=""/>  
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://.com.mx/">
    <meta property="og:image" content="http://.com.mx/khms.png">
    <meta property=og:locale content="es_MX">

    <!--SEO Twitter -->    
    <meta property=twitter:card content="summary">
    <meta property=twitter:title content="{{ $post->name }}">
    <meta property=twitter:description content="{{ $post->excerpt }}">
    <meta property=twitter:creator content="@">
    <meta property=twitter:url content="http://gymbodyfactory.com.mx">
    <meta property=twitter:image content="">

    <!--Schema.org --> 
    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Article",
            "name": "{{ $post->name }}",
            "headline": "{{ $post->name }}",
            "url": "http://www.gymbodyfactory/articulos/{{ $post->slug }}",
            "image": "http://gymbodyfactory{{ Storage::url($post->file) }}",
            "description" : "{{ $post->excerpt }}",
            "keywords" : "@foreach($post->tags as $tag) {{ $tag->name }}, @endforeach",
            "author": {
                "@type": "Person",
                "name" : "{{ $post->user->name }}"
            },
            "datePublished": "{{ $post->created_at }}",
            "dateModified": "{{ $post->updated_at }}",
            "publisher": {
                "@type": "Organization",
                "name" : "Body Factory",
                "logo": {
                    "@type": "imageObject",
                    "url": "http://www.gymbodyfactory.com/img/logo.png"
                }
            },
            "mainEntityOfPage" : {
                "@type": "WebPage",
                "@id": "http://www.gymbodyfactory.com"
            }
        }
    </script> 
@endsection

@section('content')
<header>
	<div class="container section center">
		<h1 class="yellow-text light title">{{ $post->name }}</h1>
		<img src="{{ Storage::url($post->file) }}" class="responsive-img" alt="">
	</div>
</header>
<main>
	<article class="section container">
		<p class="yellow-text light">Categoría: <span class="white-text">{{ $post->category->name }}</span></p>
        <p class="yellow-text light">Etiquetas: 
        @foreach($tags as $tag)
            <span class="chip">{{ $tag }}</span>
        @endforeach
        </p>
		<div class="divider yellow"></div>
		<div class="white-text justify"><p>{!! $post->body !!}</p></div>
	</article>

	<section class="section container center">
        <h4 class="white-text">Relacionados</h4>
        <div class="row">
            @foreach($related as $post)
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
            @endforeach
        </div>
    </section>
</main>
@endsection