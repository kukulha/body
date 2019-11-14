@extends('layouts.app')

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
        <p class="yellow-text light">Etiquetas: @foreach($tags as $tag)<span class="chip">{{ $tag }}</span>   @endforeach</p>
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