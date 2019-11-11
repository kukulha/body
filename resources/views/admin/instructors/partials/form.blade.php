<div class="row">
	<div class="col m8 s12">


		<div class="input-field">
			{{ Form::label('name', 'Nombre') }}
			{{ Form::text('name', null, ['id' => 'name']) }}
		</div>

		<div class="input-field">
			{{ Form::label('slug', 'URL Amigable') }}
			{{ Form::text('slug', null, ['id' => 'slug']) }}
		</div>

		{{ Form::textarea('body', null, ['id' => 'body', 'class' => 'small']) }}

		<div class="input-field">
		    {{ Form::submit('Guardar', ['class' => 'btn amarillo black-text']) }}	
		</div>
		
	</div>

	<div class="col m4 s12">
		<div class="file-field input-field">
			<h5>Imagen</h5>
			<a href="">
				{{ Form::file('file', null) }}
			</a>
			@if(!empty($instructor))
				<img src="{{ Storage::url($instructor->file) }}" class="responsive-img">
			@else
				<img src="https://via.placeholder.com/800x800" class="responsive-img">
			@endif
		</div>
	</div>
	

@section('scripts')

	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>

	<script type="module">
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});

			ClassicEditor
				.create( document.querySelector( '#body' ))
			    .catch( error => {
			        console.error( error );
			    } );
		});
	</script>
@endsection