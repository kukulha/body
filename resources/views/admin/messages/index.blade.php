@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Mensajes</h4>
	</div>
</header>

<main>
	<section class="section container center">
		<table class="centered">
			<thead>
				<th class="amarillo light">Nombre</th>
				<th class="amarillo light">Email</th>
				<th class="amarillo light">Teléfono</th>
				<th class="amarillo light">Acciones</th>
			</thead>
			<tbody>
				@foreach($messages as $message)
					<tr>
						<td>{{ $message->name }}</td>
						<td>{{ $message->email }}</td>
						<td>{{ $message->phone }}</td>
						<td width="10px">
							{{ Form::open(['route' => ['messages.destroy', $message->id], 'method' => 'DELETE']) }}
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