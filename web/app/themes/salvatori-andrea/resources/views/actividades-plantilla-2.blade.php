{{--
  Template Name: Page actividades
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="column is-10 content-center" style="margin-top: 10vh;">
	<div class="columns is-multiline">
		<div class="column is-7" style="background: url({{ get_field('imagen_actividad_simple', $post->ID) }}) center center / cover fixed; min-height: 300px;">
			
		</div>
		<div class="column is-5" style="padding: 2vh 3vw;">
			<div>
				<h3 class="titulo">{{ get_field('subtitulo_actividades_simple', $post->ID) }}</h3>
				<p class="parrafo">{!! get_field('area_de_texto_simple', $post->ID) !!}</p>
			</div>
		</div>
	</div>
</div>
<div class="column is-10 content-center" style="margin-top: 10vh;">
	<div class="columns is-multiline">
		<div class="column is-5" style="padding: 2vh 3vw;">
			<div>
				<h3 class="titulo">{{ get_field('subtitulo_actividades_simple_1', $post->ID) }}</h3>
				<p class="parrafo">{!! get_field('area_de_texto_simple_1', $post->ID) !!}</p>
			</div>
		</div>
		<div class="column is-7" style="background: url({{ get_field('imagen_actividad_simple_1', $post->ID) }}) center center / cover fixed; min-height: 300px;">
			
		</div>
	</div>
</div>
@php
$btn = get_field('boton_simple', $post->ID);
@endphp
<a class="btn2 displayInline-block centerLeft" style="position: relative; margin-top: 10vh;" href="{{ $btn['url'] }}">{{ $btn['title'] }}</a>
@endsection
