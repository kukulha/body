@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Editar Instructor</h4>
	</div>
</header>
<main>
	<section class="section container">
		{{ Form::model($instructor,['route' => ['instructors.update', $instructor->id], 'method' => 'PUT', 'files' => 'true']) }}

			@include('admin.instructors.partials.form')
			
		{{ Form::close() }}
	</section>
</main>
@endsection