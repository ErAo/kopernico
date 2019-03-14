{{--
  Template Name: Page actividades filtro
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="column is-10 content-center" style="margin-top: 10vh;">
	<div class="columns is-multiline">
		<div class="column is-7" style="background: url({{ get_field('imagen_actividad_filtro', $post->ID) }}) center center / cover fixed; min-height: 300px;">
			
		</div>
		<div class="column is-5" style="padding: 2vh 3vw;">
			<div>
				<h3 class="titulo">{{ get_field('subtitulo_actividades_filtro', $post->ID) }}</h3>
				{!! get_field('area_de_texto_filtro', $post->ID) !!}
				@php
				$btn = get_field('boton_filtro', $post->ID);
				@endphp
				<a class="btn2 displayInline-block" href="{{ $btn['url'] }}">{{ $btn['title'] }}</a>
			</div>
		</div>
	</div>
</div>

<div class="filtro-categorias back-darkblue content-center">
	<div class="columns content-center">
		@foreach($categorias_loop as $categoria)
		<a href="#" class="btn2 item-categoria back-white displayInline-flex">{{ $categoria['title'] }}</a>
		@endforeach
	</div>
</div>

<div class="column is-8 content-center">
	<div class="columns is-multiline">
		@foreach($actividades_loop as $actividad)
			<div class="objetoCat column is-4 actividad-padre displayFlex" data-text="{{ $actividad['categorias']->name }}">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
					<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>
			<div class="objetoCat column is-4 actividad-padre displayFlex" data-text="{{ $actividad['categorias']->name }}">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
					<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>

			<div class="objetoCat column is-4 actividad-padre displayFlex" data-text="{{ $actividad['categorias']->name }}">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
					<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>

			<div class="objetoCat column is-4 actividad-padre displayFlex" data-text="{{ $actividad['categorias']->name }}">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
					<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>

			<div class="objetoCat column is-4 actividad-padre displayFlex" data-text="{{ $actividad['categorias']->name }}">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
					<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>

			<div class="objetoCat column is-4 actividad-padre displayFlex" data-text="{{ $actividad['categorias']->name }}">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
					<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>

			<div class="objetoCat column is-4 actividad-padre displayFlex" data-text="{{ $actividad['categorias']->name }}">
				<div class="actividad-hijo content-center displayFlex" style="background: url({{ $actividad['thumbnail'] }}) center center / cover;">
					<h4 class="titulo titulo-actividad-hijo add-index">{{ $actividad['title'] }}</h4>
					<p class="subtitulo subtitulo-actividad-hijo add-index recortar-text">{{ $actividad['resumen'] }}</p>
					<a href="{{ $actividad['link'] }}" class="btn2 back-darkblue letter-white displayInline-block add-index">Ver más</a>

				</div>
			</div>
		@endforeach
	</div>
</div>

@endsection
