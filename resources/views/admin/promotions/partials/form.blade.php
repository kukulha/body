
<div class="row">
	<div class="col m8 s12">


		<div class="input-field">
			{{ Form::label('name', 'Titulo') }}
			{{ Form::text('name', null, ['id' => 'name']) }}
		</div>

		<div class="input-field">
			{{ Form::label('slug', 'URL Amigable') }}
			{{ Form::text('slug', null, ['id' => 'slug']) }}
		</div>

		{{ Form::textarea('body', null, ['id' => 'body']) }}
		<div class="input-field"> 
			{{ Form::label('star', 'Fecha de Inicio de la Promoción') }}
			{{ Form::text('start', null, ['class' => 'datepicker']) }}
		</div>

		<div class="input-field"> 
			{{ Form::label('end', 'Fecha de Finalización de la Promoción') }}
			{{ Form::text('end', null, ['class' => 'datepicker']) }}
		</div>


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
			@if(!empty($promotion))
				<img src="{{ Storage::url($promotion->file) }}" class="responsive-img">
			@else
				<img src="https://via.placeholder.com/800x800" class="responsive-img">
			@endif
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