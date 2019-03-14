@extends('layouts.app')

@section('content')
@include('partials.page-header')


	<div class="column is-10 content-center actividad-detalle" style="margin-top: 10vh;margin-bottom-: 10vh;">
		<div class="columns is-multiline" style="position: relative;">
			<div class="column is-7 contendor-imgenes is-paddingless">
				@if(have_rows('slide_show', $post->ID))
				@while(have_rows('slide_show', $post->ID))
				@php
				the_row()
				@endphp
				<div style="background: url({{ get_sub_field('imagen_detalle_a') }}) center center / cover fixed;"></div>
				@endwhile
				@else
				@endif
			</div>
			<div class="column is-5" style="padding: 2vh 3vw;">
				<div>
					<h3 class="titulo">{{ get_field('subtitulo_detalle', $post->ID) }}</h3>
					<p class="parrafo">{{ get_field('resumen_detalle', $post->ID) }}</p>
					<p class="titulo-competencias">{{ get_field('competencias', $post->ID) }}</p>
					<div class="columns list-icono">
						@if(have_rows('iconos_competencias', $post->ID))
						@while(have_rows('iconos_competencias', $post->ID))
						@php
						the_row()
						@endphp
						<div class="column is-3 iconos-item is-paddingless">
							<img src="{{ get_sub_field('imagen') }}" alt="{{ get_sub_field('titulo') }}">
							<p>{{ get_sub_field('titulo') }}</p>
						</div>
						@endwhile
						@else
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="column is-10 is-paddingless caracteristicas-act content-center">
		<div class="columns is-paddingless is-multiline is-marginless">
			<div class="column is-7 padre-caracteristica">
				<div class="panel-detalle">
					<a href="#" class="btn2" id="caracteristica">{{ get_field('caracteristica_detalle', $post->ID) }}</a>
					<a href="#" class="btn2" id="incluye">{{ get_field('incluye', $post->ID) }}</a>
				</div>
				<div style="height: 85%; width: 100%;">
					<div class="caract-item">
						<div id="tipo_duracion" class="caracteristica-item caracteristica-crono">
							<div class="columns tipo_duracion is-marginless">
								@if(have_rows('tipo_y_duracion', $post->ID))
								@while(have_rows('tipo_y_duracion', $post->ID))
								@php
								the_row()
								@endphp
									<div>
										<img src="{{ get_sub_field('imagen') }}" alt="">
										<p class="subtitulo">{{ get_sub_field('titulo') }}</p>
										<p class="parrafo">{{ get_sub_field('detalle') }}</p>
									</div>
								@endwhile
								@else
								@endif
							</div>
							<div>
								<p class="titulo-crono">{{ get_field('cronograma_detalle', $post->ID) }}</p>
							</div>
							<div>
								{!! get_field('detalle_cronograma', $post->ID) !!}
							</div>
						</div>
						<div id="caracteristica-incluye" class="caracteristica-item caracteristica-incluye">
							<div>
								{!! get_field('detalle_incluye', $post->ID) !!}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="column is-5">
				@php
					$archivo_a = get_field('archivo_a', $post->ID);
					$archivo_b = get_field('archivo_b', $post->ID);
				@endphp
				<div>
					@if(!empty($archivo_a))
						<iframe src="{{ $archivo_a }}" frameborder="0" style="width: 100%;height: 45vh;min-height: 300px;margin-bottom: 4vh;"></iframe>
					@else
						<img src="{{ get_field('Imagen_a', $post->ID) }}" alt="">
					@endif
				</div>
				<div>
					@if(!empty($archivo_b))
						<iframe src="{{ $archivo_b }}" frameborder="0" style="width: 100%;height: 45vh;min-height: 300px;margin-bottom: 4vh;"></iframe>
					@else
						<img src="{{ get_field('Imagen_b', $post->ID) }}" alt="">
					@endif
				</div>
			</div>
		</div>
	</div>

@endsection
