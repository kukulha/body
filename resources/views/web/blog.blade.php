@extends('layouts.app')

@section('content')
<header>
	<div class="container section center">
		<h1 class="yellow-text light title">Blog</h1>
	</div>
</header>
<main class="container">

	<div class="row">
        <div class="col m9 s12">
            
        
            @forelse($posts as $post)
            <div class="col m6 s12 center card black blog">
                <div class="card-image">
                    <a href="{{ route('post', $post->slug) }}"><img src="{{ Storage::url($post->featured) }}" class="responsive-img" alt=""></a>
                </div>
                <div class="card-content">
                    <span class="card-title"><a href="{{ route('post', $post->slug) }}" class="amarillo-text title">{{$post->name}}</a></span>
                    <p class="white-text justify">{{$post->excerpt}}</p>
                </div>
                <div class="card-action">
                    <a href="{{ route('post', $post->slug) }}" class="btn amarillo black-text">Ver más</a>
                </div> 
            </div>
            @empty
                <div class="center"><em class="white-text title">No hay articulos.</em></div>
            @endforelse

        </div>
        <div class="col m3 s12">
            <section class="section">
                <h5 class="white-text title">Categorías</h5>
                <ul>
                    <li><a href="{{ route('blog') }}" class="@if(request()->is('articulos'))white-text @else yellow-text @endif">Todas las categorías</a></li>
                    @forelse($categories as $category)
                        <li><a href="{{ route('category', $category->slug) }}" class="@if(request()->is("categorias/$category->slug"))white-text @else yellow-text @endif">{{ $category->name }}</a></li> 
                    @empty
                        <li><em class="white-text">No hay Categorías</em></li>
                    @endforelse
                </ul>
            </section>
            <section class="section">
                <h5 class="white-text title">Buscar</h5>
                {{ Form::open(['route' => 'blog', 'method' => 'GET']) }}
                    <div class="row">
                        <div class="col m10 s12">
                            <div class="input-field">
                                {{ Form::text('body', null, ['class' => 'white-text'] ) }}
                            </div>
                        </div>
                        <div class="col m2 s12">
                            <div class="input-field">
                                <button type="submit" name="send" class="btn yellow black-text">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                {{ Form::close() }}
            </section>
        </div>
        
    </div>
    <div class="center section">
            {{ $posts->render('pagination::default') }}
        </div>
</main>
@endsection