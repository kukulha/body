
<div class="row">
	<div class="col m8 s12">
		{{ Form::hidden('user_id', Auth()->user()->id) }}


		<div class="input-field">
			{{ Form::label('name', 'Titulo') }}
			{{ Form::text('name', null, ['id' => 'name']) }}
		</div>

		<div class="input-field">
			{{ Form::label('slug', 'URL Amigable') }}
			{{ Form::text('slug', null, ['id' => 'slug']) }}
		</div>

		<div class="input-field">
			
			{{ Form::select('category_id', $categories) }}
			{{ Form::label('category_id', 'Categoría') }}
		</div>
	

		<div class="input-field">
			{{ Form::label('tags','Tags') }}
			@if($tags)
				{{ Form::text('tags[]', $tags, ['data-role' => 'materialtags']) }}
			@else
				{{ Form::text('tags[]', null , ['data-role' => 'materialtags']) }}
			@endif
		</div>

		<div class="input-field">
			{{ Form::label('excerpt', 'Extracto') }}
			{{ Form::text('excerpt', null, ['data-length' => '144', 'id' => 'excerpt']) }}
		</div>

		<div class="file-field input-field">
			<h5>Imagen Principal</h5>
			<a href="">
				{{ Form::file('file', null) }}
			</a>
			@if(!empty($post))
				<img src="{{ Storage::url($post->file) }}" class="responsive-img">
			@else
				<img src="https://via.placeholder.com/1200x400" class="responsive-img">
			@endif
		</div>
		
	</div>

	<div class="col m4 s12">
		<div class="file-field input-field">
			<h5>Imagen Destacada</h5>
			<a href="">
				{{ Form::file('featured', null) }}
			</a>
			@if(!empty($post))
				<img src="{{ Storage::url($post->featured) }}" class="responsive-img">
			@else
				<img src="https://via.placeholder.com/500" class="responsive-img">
			@endif
		</div>
	</div>

	<div class="col s12">
		{{ Form::textarea('body', null, ['id' => 'body']) }}

		<div class="input-field">
		    {{ Form::submit('Guardar', ['class' => 'btn amarillo black-text']) }}	
		</div>
	</div>


@section('scripts')
	<script src="{{ asset('vendor/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
	<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
	<script>
		$(document).ready(function(){
			$('#name, #slug').stringToSlug({
				callback: function(text){
					$('#slug').val(text);
				}
			});

			ClassicEditor
				.create( document.querySelector( '#body' ),{
					 toolbar: ['heading','bold','italic','link','bulletedList','numberedList','blockQuote'],
				})
			    .then( editor => {
			        console.log( editor );
			    } )
			    .catch( error => {
			        console.error( error );
			    } );
		});
	</script>
@endsection