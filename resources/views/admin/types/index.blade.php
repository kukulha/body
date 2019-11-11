@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Tipo de Clase</h4>
		<a href="{{ route('types.create') }}" class="btn black amarillo-text">Nuevo Tipo de Clase</a>
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
				@foreach($types as $type)
					<tr>
						<td>{{ $type->name }}</td>
						<td>{{ $type->slug }}</td>
						<td width="10px"><a href="{{ route('types.edit', $type->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['types.destroy', $type->id], 'method' => 'DELETE']) }}
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