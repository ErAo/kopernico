{{--
  Template Name: Nosotros
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="content-center column is-10">
	<h3 class="titulo column is-10 centerLeft" style="text-align: center; position: relative;">{{ get_field('subtitulo', $post->ID) }}</h3>
	<p class="subtitulo column is-10 content-center" style="text-align: center;margin-bottom: 4vh;">{{ get_field('resumen', $post->ID) }}</p>
	{!! get_field('area_de_texto', $post->ID) !!}
</div>
<div class="column is-10 content-center" style="margin: 10vh auto;">
	<div class="columns is-multiline is-padingless is-marginless">
		<div class="column is-7" style="background: url({{ get_field('imagen_mision', $post->ID) }}) center center / cover fixed; min-height: 300px;"></div>
		<div class="column is-5" style="padding: 2vh 3vw;">
			<h3 class="titulo">{{ get_field('mision', $post->ID) }}</h3>
			{!! get_field('resumen_mision', $post->ID) !!}
		</div>
	</div>
</div>
<div class="column is-10 content-center" style="margin: 10vh auto;">
	<div class="columns is-multiline is-padingless is-marginless">
		<div class="column is-5" style="padding: 2vh 3vw;">
			<h3 class="titulo">{{ get_field('vision', $post->ID) }}</h3>
			{!! get_field('resumen_vision', $post->ID) !!}
		</div>
		<div class="column is-7" style="background: url({{ get_field('imagen_vision', $post->ID) }}) center center / cover fixed; min-height: 300px;"></div>
	</div>
</div>

<div style="position: relative;">
	<div class="back-azul">
		
	</div>
	<div class="column is-8 equipo-detalle centerLeft">
		<div class="columns is-multiline">
			<h3 class="column is-5 titulo letter-white">{{ get_field('nuestro_equipo', $post->ID) }}</h3>
			<p class="column is-7 parrafo letter-white">
				{{ get_field('resumen_equipo', $post->ID) }}
			</p>
		</div>
	</div>


	<div class="actividades-tarjetas">
		<div id="slider-equipo" class="column is-10 is-paddingless content-center">
			<div id="slider-equipo-hijo" class="columns is-paddingless is-marginless">
			@if(have_rows('equipo', $post->ID))
				@while(have_rows('equipo', $post->ID))
					@php
						the_row()
					@endphp
					<div class="column is-4 actividad-padre displayFlex">
						<div class="actividad-hijo content-center displayFlex" style="background: url({{ get_sub_field('foto') }}) top center / cover;">
							<h4 class="titulo titulo-actividad-hijo add-index">{{ get_sub_field('nombre') }}</h4>
							<p class="negritas" style="position: relative;z-index: 1;">{{ get_sub_field('cargo') }}</p>
							<p class="subtitulo subtitulo-actividad-hijo add-index">{{ get_sub_field('descripcion') }}</p>					
						</div>
					</div>
				@endwhile
			@endif

			</div>
		</div>
		<div class="slider-actividades-panel centerLeft">
			<img src="{{ home_url('/app/uploads/2019/02/flecha-blanca.png') }}" id="equipo-prev" alt="">
			<img src="{{ home_url('/app/uploads/2019/02/flecha-blanca.png') }}" id="equipo-next" alt="">
		</div>
	</div>

</div>
@endsection
