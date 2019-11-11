@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Crear Tipo</h4>
	</div>
</header>
<main>
	<section class="section container center">
		<div class="row">
			<div class="col m8 s12 offset-m2">
				{{ Form::open(['route' => 'types.store']) }}

					@include('admin.types.partials.form')
					
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection