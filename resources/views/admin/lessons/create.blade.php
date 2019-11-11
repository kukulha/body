@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Nueva Clase</h4>
	</div>
</header>
<main>
	<section class="section container">
		
				{{ Form::open(['route' => 'lessons.store', 'files' => 'true']) }}

					@include('admin.lessons.partials.form')
					
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection