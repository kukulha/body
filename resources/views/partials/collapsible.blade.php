{{-- Servicios --}}
<li>
    <div class="collapsible-header black white-text">Servicios</div>
    <div class="collapsible-body center">
		<div class="row">
			<div class="col s12 center">
				<img src="/img/park.png" class="responsive-img" alt="">
				<h5 class="white-text">Estacionamiento</h5>
			</div>

			<div class="col s12 center">
				<img src="/img/showers.png" class="responsive-img" alt="">
				<h5 class="white-text">Regaderas</h5>
			</div>

			<div class="col s12 center">
				<img src="/img/sauna.png" class="responsive-img" alt="">
				<h5 class="white-text">Vapor</h5>
			</div>

			<div class="col s12 center">
				<img src="/img/personal.png" class="responsive-img" alt="">
				<h5 class="white-text">Instructures<br>Certificados</h5>
			</div>

			<div class="col s12 center">
				<img src="/img/daycare.png" class="responsive-img" alt="">
				<h5 class="white-text">Estancia<br>Infantil</h5>
			</div>

			<div class="col s12 center">
				<img src="/img/nutrition.png" class="responsive-img" alt="">
				<h5 class="white-text">Asesoría<br>Nutricional</h5>
			</div>
		</div>
	</div>
</li>

{{-- Instructores --}}
<li>
	<div class="collapsible-header black white-text">Instructores</div>
	<div class="collapsible-body center">
		<div class="row">
			@foreach($instructors as $instructor)
				<div class="col m4 s12">
					<img src="{{ $instructor->file }}" class="responsive-img" alt="">
					<p class="bold title white-text">{{ $instructor->name }}</p>
					<div class="white-text">{!! $instructor->body !!}</div>
				</div>
				@endforeach
		</div>
	</div>
</li>

{{-- Instalaciones --}}

<li>
	<div class="collapsible-header black white-text">Instalaciones</div>
	<div class="collapsible-body">
		<div class="row">
			<div class="col m3 s12">
				<a href="/img/gallery/gal1@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal1.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal2@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal2.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal3@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal3.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal4@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal4.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal5@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal5.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal6@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal6.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal7@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal7.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal8@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal8.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal9@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal9.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal10@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal10.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal11@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal11.jpg" class="responsive-img" alt=""></a>
			</div>
			<div class="col m3 s12">
				<a href="/img/gallery/gal12@2x.jpg" data-lightbox="gallery"><img src="/img/gallery/gal12.jpg" class="responsive-img" alt=""></a>
			</div>
		</div>
	</div>
</li>

{{-- Horarios --}}

<li>
	<div class="collapsible-header black white-text">Horarios</div>
	<div class="collapsible-body">
		<ul>
			<li class="amarillo-text">Lunes a Viernes : <span class="white-text">6:00am a 10:00pm</span></li>
			<li class="amarillo-text">Sábados : <span class="white-text">7:00am a 02:00pm</span></li>
			<li class="amarillo-text">Domingos : <span class="white-text">9:00am a 03:00pm</span></li>
		</ul>
	</div>
</li>

{{-- Clases --}}

<li>
	<div class="collapsible-header black white-text">Clases</div>
	<div class="collapsible-body">
		<div class="row">
			<div class="col m2 s12">
				<h5 class="white-text">Lunes</h5>
				@foreach($lunes as $lesson)
					<p class="amarillo-text justify">{{ $lesson->type->name}}<span class="white-text">-{{ date('H:i', strtotime($lesson->time)) }}</span></p>
				@endforeach
			</div>

			<div class="col m2 s12">
				<h5 class="white-text">Martes</h5>
				@foreach($martes as $lesson)
					<p class="amarillo-text justify">{{ $lesson->type->name}}<span class="white-text">-{{ date('H:i', strtotime($lesson->time)) }}</span></p>
				@endforeach
			</div>

			<div class="col m2 s12">
				<h5 class="white-text">Miercoles</h5>
				@foreach($miercoles as $lesson)
					<p class="amarillo-text justify">{{ $lesson->type->name}}<span class="white-text">-{{ date('H:i', strtotime($lesson->time)) }}</span></p>
				@endforeach
			</div>

			<div class="col m2 s12">
				<h5 class="white-text">Jueves</h5>
				@foreach($jueves as $lesson)
					<p class="amarillo-text justify">{{ $lesson->type->name}}<span class="white-text">-{{ date('H:i', strtotime($lesson->time)) }}</span></p>
				@endforeach
			</div>

			<div class="col m2 s12">
				<h5 class="white-text">Viernes</h5>
				@foreach($viernes as $lesson)
					<p class="amarillo-text justify">{{ $lesson->type->name}}<span class="white-text">-{{ date('H:i', strtotime($lesson->time)) }}</span></p>
				@endforeach
			</div>

			<div class="col m2 s12">
				<h5 class="white-text">Sabado</h5>
				@foreach($sabado as $lesson)
					<p class="amarillo-text justify">{{ $lesson->type->name}}<span class="white-text">-{{ date('H:i', strtotime($lesson->time)) }}</span></p>
				@endforeach
			</div>
		</div>
	</div>
</li>

{{-- Promociones --}}

<li>
	<div class="collapsible-header black white-text">Promociones</div>
	<div class="collapsible-body">
		<div class="row">
				@foreach($promotions as $promotion)
					@if($promotion->end >= $today)
					<div class="col m4 s12">			
						<div class="card transparent z-depth-0">
							<div class="card-image">
			          			<img src="{{ $promotion->file }}" class="materialboxed">
			        		</div>
							<div class="card-content">
								<h4 class="white-text title">{{$promotion->name}}</h4>
								<div class="amarillo-text title">{!!$promotion->body!!}</div>
								<p class="white-text small light">Fecha de Inicio: {{ date('d \d\e M', strtotime($promotion->start)) }}</p>
								<p class="white-text small light">Fecha de Fin: {{ date('d \d\e M', strtotime($promotion->end)) }}</p>
							</div>
						</div>
					</div>
					@else
					<em class="white-text">No hay Promociones</em>
					@endif
				@endforeach
			</div>
	</div>
</li>