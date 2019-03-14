<div class="actividades-home">
	<div class="texto-actividades">
		<h3 class="titulo">
			{{ get_field('titulo_buscar', 'options') }}:
		</h3>

		<p class="parrafo">
			{{ get_field('resumen_buscar', 'options') }}
		</p>
	</div>
	<div class="buscar-actividades back-darkblue columns">

		<p class="subtitulo text-uppercase letter-white is-marginless light titulo-buscar">{{ get_field('texto_filtro', 'options') }}</p>

		<select id="select-search" class="select-search back-white">
		@foreach($categorias_loop as $categoria)
			<option value="{{ $categoria['title'] }}">{{ $categoria['title'] }}</option>
		@endforeach
		</select>
		<a href="#" id="buscar-cat" class="btn2">Buscar</a>
	</div>

	<div class="padre-slider-actividades">

	<div class="texto-actividades">
		<h3 class="titulo">
			{{ get_field('titulo_slider_actvidades', 'options') }}:
		</h3>

		<p class="parrafo">
			{{ get_field('texto_slider_actividades', 'options') }}
		</p>
	</div>

	<div class="actividades-tarjetas">
		<div id="slider-actividades" class="slider-actividades column is-10 is-paddingless">
			<div id="slider-actividades-hijo" class="columns is-paddingless is-marginless">
				@foreach($actividades_loop as $actividad)
					@if($actividad['mostrar_ocultar'])
					<div class="column is-4 actividad-padre displayFlex">
						<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
							<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
							<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
							<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>
						</div>
					</div>
					@else
					@endif
				@endforeach
			</div>
		</div>
		<div class="slider-actividades-panel">
			<img src="app/uploads/2019/02/flecha-blanca.png" id="actividades-prev" alt="">
			<img src="app/uploads/2019/02/flecha-blanca.png" id="actividades-next" alt="">
		</div>
		<a href="#" class="btn2 displayInline-block add-index content-center centerLeft">Ver todas</a> 
	</div>

	</div>
</div>