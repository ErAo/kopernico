<div class="servicios-home">
<div class="texto-actividades content-center">
	<h3 class="titulo">
		{{ get_field('titulo_servicios_home', 'options') }}:
	</h3>

	<p class="parrafo">
		{{ get_field('resumen_servicios_home', 'options') }}
	</p>
</div>
<div class="tarjetas-servicios content-center column is-8 back-darkblue">
	<div class="columns is-marginless is-multiline centerflex-left">
		@foreach($servicios_loop as $servicio)

		<div class="column is-4 displayInline-flex" style="min-width: 270px;">
			<div class="item-tarjetas-servicios back-white column content-center is-11">
				<div class="imagen-servicio-item">
				<img src="{{ $servicio['imagen_servicio'] }}" alt="">
				</div>
				<h3 class="titulo titulo-hijo-servicios">{{ $servicio['title'] }}</h3>
				<p class="parrafo">
					{{ $servicio['resumen'] }}
				</p>
				<a href="{{ $servicio['link'] }}" class="btn2 back-darkblue displayInline-block">Ver más</a>
			</div>
		</div>

		@endforeach
	</div>
</div>
</div>