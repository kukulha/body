@extends('layouts.dashboard')

@section('content')
<header>
	<div class="container center">
		<h4 class="title">Nuevo Artículo</h4>
	</div>
</header>
<main>
	<section class="section container">
		
				{{ Form::open(['route' => 'posts.store', 'id' => 'updloadForm', 'files' => 'true']) }}

					@include('admin.posts.partials.form')
					
				{{ Form::close() }}
			</div>
		</div>
	</section>
</main>
@endsection