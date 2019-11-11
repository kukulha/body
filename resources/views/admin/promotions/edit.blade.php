@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Editar Categoría</h4>
	</div>
</header>
<main>
	<section class="section container">
		{{ Form::model($promotion,['route' => ['promotions.update', $promotion->id], 'method' => 'PUT', 'files' => 'true']) }}

			@include('admin.promotions.partials.form')
			
		{{ Form::close() }}
	</section>
</main>
@endsection