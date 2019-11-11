@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Artículos</h4>
		<a href="{{ route('posts.create') }}" class="btn black amarillo-text">Nuevo Artículo</a>
	</div>
</header>

<main>
	<section class="section container center">
		<table class="centered">
			<thead>
				<th class="amarillo light">Imagen Destacada</th>
				<th class="amarillo light">Titulo</th>
				<th class="amarillo light">Extracto</th>
				<th colspan="2" class="amarillo light">Acciones</th>
			</thead>
			<tbody>
				@foreach($posts as $post)
					<tr>
						<td width="100px"><img src="{{ Storage::url($post->featured) }}" class="responsive-img" alt=""></td>
						<td>{{ $post->name }}</td>
						<td>{{ $post->excerpt }}</td>
						<td width="10px"><a href="{{ route('posts.edit', $post->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) }}
								{{ Form::submit('Eliminar', ['class' => 'btn red']) }}
							{{ Form::close() }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</main>
@endsection