<div class="input-field">
	{{ Form::label('name', 'Categoría') }}
	{{ Form::text('name', null, ['id' => 'name']) }}
</div>

<div class="input-field">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['id' => 'slug']) }}
</div>

<div class="input-field">
    {{ Form::submit('Guardar', ['class' => 'btn amarillo black-text']) }}	
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
    			.create( document.querySelector( '#body' ) )
    			.catch( error => {
        		console.error( error );
    		} );
		});
	</script>
@endsection