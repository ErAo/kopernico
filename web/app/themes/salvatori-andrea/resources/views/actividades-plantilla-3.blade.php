{{--
  Template Name: Page actividades evento
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="column is-10 content-center" style="margin-top: 10vh;">
	<div class="columns is-multiline">
		<div class="column is-7" style="background: url({{ get_field('imagen_actividad_evento', $post->ID) }}) center center / cover fixed; min-height: 300px;">
			
		</div>
		<div class="column is-5" style="padding: 2vh 3vw;">
			<div>
				<h3 class="titulo">{{ get_field('subtitulo_actividades_evento', $post->ID) }}</h3>
				<p class="parrafo">{!! get_field('area_de_texto_evento', $post->ID) !!}</p>
			</div>
		</div>
	</div>
</div>
<div class="column is-10 content-center" style="margin-top: 10vh;">
	<div class="columns is-multiline">
		<div class="column is-5" style="padding: 2vh 3vw;">
			<div>
				<h3 class="titulo">{{ get_field('subtitulo_actividades_evento_1', $post->ID) }}</h3>
				<p class="parrafo">{!! get_field('area_de_texto_evento_1', $post->ID) !!}</p>
			</div>
		</div>
		<div class="column is-7" style="background: url({{ get_field('imagen_actividad_evento_1', $post->ID) }}) center center / cover fixed; min-height: 300px;">
			
		</div>
	</div>
</div>

<div class="column is-8 content-center" style="margin-top: 10vh;">
	<div style="margin-bottom: 10vh;">
		<h3 class="titulo" style="text-align: center;">{{ get_field('titulo_cursos', $post->ID) }}</h3>
		<h3 class="parrafo" style="text-align: center;">{{ get_field('resumen_cursos', $post->ID) }}</h3>
	</div>
	<div class="columns is-multiline">
		@foreach($cursos_loop as $curso)
			<div class="objetoCat column is-4 actividad-padre displayFlex">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $curso['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $curso['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $curso['resumen'] }}</p>
					<a href="{{ $curso['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>
			<div class="objetoCat column is-4 actividad-padre displayFlex">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $curso['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $curso['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $curso['resumen'] }}</p>
					<a href="{{ $curso['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>
			<div class="objetoCat column is-4 actividad-padre displayFlex">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $curso['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $curso['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $curso['resumen'] }}</p>
					<a href="{{ $curso['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>
		@endforeach
	</div>
</div>
@php
$btn = get_field('boton_evento', $post->ID);
@endphp
<a class="btn2 displayInline-block centerLeft" style="position: relative; margin-top: 10vh;" href="{{ $btn['url'] }}">{{ $btn['title'] }}</a>
@endsection
