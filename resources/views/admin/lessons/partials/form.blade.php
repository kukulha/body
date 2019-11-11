<div class="row">
	<div class="col m8 offset-m2 s12">

		<div class="input-field">
			{{ Form::select('type_id', $types) }}
			{{ Form::label('type_id', 'Categoría') }}
		</div>

		<div class="input-field">
			<p>
      	{{ Form::label('day', 'Dia') }}
      	<label >
      	{{ Form::radio('day', 'Lunes') }}
        <span>Lunes</span>
        </label>
        <label>
        {{ Form::radio('day', 'Martes') }}
        <span>Martes</span>
        </label>
        <label>
        {{ Form::radio('day', 'Miercoles') }}
        <span>Miercoles</span>
        </label>
        <label>
        {{ Form::radio('day', 'Jueves') }}
        <span>Jueves</span>
        </label>
        <label>
        {{ Form::radio('day', 'Viernes') }}
        <span>Viernes</span>
        </label>
        <label>
        {{ Form::radio('day', 'Sabado') }}
        <span>Sabado</span>
        </label>
      </label>
    </p>
		</div>

		<div class="input-field"> 
			{{ Form::label('time', 'Hora') }}
			{{ Form::text('time', null, ['class' => 'timepicker']) }}
		</div>


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
		});
	</script>
@endsection