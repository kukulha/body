@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Nuevo Instructor</h4>
	</div>
</header>
<main>
	<section class="section container">
		
				{{ Form::open(['route' => 'instructors.store', 'files' => 'true']) }}

					@include('admin.instructors.partials.form')
					
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection