@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Editar Clase</h4>
	</div>
</header>
<main>
	<section class="section container">
		{{ Form::model($lesson,['route' => ['lessons.update', $lesson->id], 'method' => 'PUT']) }}

			@include('admin.lessons.partials.form')
			
		{{ Form::close() }}
	</section>
</main>
@endsection