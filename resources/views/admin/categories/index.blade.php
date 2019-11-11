@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Categorías</h4>
		<a href="{{ route('categories.create') }}" class="btn black amarillo-text">Nueva Categoría</a>
	</div>
</header>

<main>
	<section class="section container center">
		<table class="centered">
			<thead>
				<th class="amarillo light">Nombre</th>
				<th class="amarillo light">URL</th>
				<th colspan="2" class="amarillo light">Acciones</th>
			</thead>
			<tbody>
				@foreach($categories as $category)
					<tr>
						<td>{{ $category->name }}</td>
						<td>{{ $category->slug }}</td>
						<td width="10px"><a href="{{ route('categories.edit', $category->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) }}
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