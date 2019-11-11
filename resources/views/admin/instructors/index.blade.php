@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Instructores</h4>
		<a href="{{ route('instructors.create') }}" class="btn black amarillo-text">Nuevo Instructor</a>
	</div>
</header>

<main>
	<section class="section container center">
		<table class="centered">
			<thead>
				<th class="amarillo light">Imagen</th>
				<th class="amarillo light">Nombre</th>
				<th class="amarillo light">Descripción</th>
				<th colspan="2" class="amarillo light">Acciones</th>
			</thead>
			<tbody>
				@foreach($instructors as $instructor)
					<tr>
						<td width="100px"><img src="{{ Storage::url($instructor->file) }}" class="responsive-img" alt=""></td>
						<td>{{ $instructor->name }}</td>
						<td>{!! $instructor->body !!}</td>
						<td width="10px"><a href="{{ route('instructors.edit', $instructor->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['instructors.destroy', $instructor->id], 'method' => 'DELETE']) }}
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