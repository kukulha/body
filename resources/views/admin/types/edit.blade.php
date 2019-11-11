@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Editar Categoría</h4>
	</div>
</header>
<main>
	<section class="section container center">
		<div class="row">
			<div class="col m8 s12 offset-m2">
				{{ Form::model($type,['route' => ['types.update', $type->id], 'method' => 'PUT']) }}

					@include('admin.types.partials.form')
					
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection