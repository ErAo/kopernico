{{--
  Template Name: Actividades team building
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="areasubtitulo">
	<h3 class="titulo">{{ get_field('subtitulo_pagina_actividades', $post->ID) }}</h3>
	<p class="parrafo">{{ get_field('resumen_pagina_actividades', $post->ID) }}</p>
</div>
<div class="column is-10 content-center" style="margin-bottom: 5vh;">
	<div class="contain-activiti columns is-paddingless is-multiline">

		@foreach($pages_loop as $page)
			@if($page['mostrar'])
				<div class="column is-6 displayInline-flex is-paddingless" style="min-width: 270px;margin-bottom: 6vh;">
					<div class="tarjetas-actividades back-white column content-center is-11 displayFlex">
						<div class="page-item-actividad">
							<div class="imgAct column is-5" style="background: url({{ $page['thumbnail'] }}) center center / cover;">
							</div>
							<div class="contenidoAct back-darkblue column is-7">
							<img src="{{ $page['ilustracion_actividad'] }}" alt="">
							<h3 class="titulo letter-white">{{ $page['title'] }}</h3>
							<p class="parrafo letter-white">
								{{ $page['extracto_page'] }}
							</p>
							<a href="{{ $page['link'] }}" class="btn2 letter-white displayInline-block">Ver más</a>
							</div>
						</div>
					</div>
				</div>
			@else

			@endif

		@endforeach
	</div>
</div>
<a href="#" class="btn2 back-darkblue displayInline-block centerLeft" style="position: relative;">contactanos</a>
@endsection
