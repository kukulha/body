@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Nueva Promoción</h4>
	</div>
</header>
<main>
	<section class="section container">
		
				{{ Form::open(['route' => 'promotions.store', 'files' => 'true']) }}

					@include('admin.promotions.partials.form')
					
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection