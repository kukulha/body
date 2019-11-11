@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Clases</h4>
		<a href="{{ route('lessons.create') }}" class="btn black amarillo-text">Nueva Clase</a>
	</div>
</header>

<main>
	<section class="section container center">
		<table class="centered">
			<thead>
				<th class="amarillo light">Tipo</th>
				<th class="amarillo light">Dia</th>
				<th class="amarillo light">Hora</th>
				<th colspan="2" class="amarillo light">Acciones</th>
			</thead>
			<tbody>
				@foreach($lessons as $lesson)
					<tr>
						<td>{{ $lesson->type->name }}</td>
						<td>{{ $lesson->day }}</td>
						<td>{{ $lesson->time }}</td>
						<td width="10px"><a href="{{ route('lessons.edit', $lesson->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['lessons.destroy', $lesson->id], 'method' => 'DELETE']) }}
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