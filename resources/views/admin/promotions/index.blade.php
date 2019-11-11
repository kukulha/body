@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Promociones</h4>
		<a href="{{ route('promotions.create') }}" class="btn black amarillo-text">Nueva Promoción</a>
	</div>
</header>

<main>
	<section class="section container center">
		<table class="centered">
			<thead>
				<th class="amarillo light">Imagen</th>
				<th class="amarillo light">Nombre de la Promoción</th>
				<th class="amarillo light">Descripción</th>
				<th class="amarillo light">Fecha de Inicio</th>
				<th class="amarillo light">Fecha de Finalización</th>
				<th colspan="2" class="amarillo light">Acciones</th>
			</thead>
			<tbody>
				@foreach($promotions as $promotion)
					<tr>
						<td width="100px"><img src="{{ Storage::url($promotion->file) }}" class="responsive-img" alt=""></td>
						<td>{{ $promotion->name }}</td>
						<td>{!! $promotion->body !!}</td>
						<td>{{ $promotion->start }}</td>
						<td>{{ $promotion->end }}</td>
						<td width="10px"><a href="{{ route('promotions.edit', $promotion->id) }}" class="btn orange">Editar</a></td>
						<td width="10px">
							{{ Form::open(['route' => ['promotions.destroy', $promotion->id], 'method' => 'DELETE']) }}
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