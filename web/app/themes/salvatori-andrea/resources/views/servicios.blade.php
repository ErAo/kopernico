{{--
  Template Name: Page servicios
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
@foreach($servicios_loop as $servicio)

	<div class="column is-10 content-center servicio-item-page" style="margin-top: 10vh;margin-bottom-: 10vh;">
		<div class="columns is-multiline">
			<div class="column is-7" style="background: url({{ $servicio['thumbnail'] }}) center center / cover fixed; min-height: 300px;">
				
			</div>
			<div class="column is-5" style="padding: 2vh 3vw;">
				<div>
					<h3 class="titulo">{{ $servicio['title'] }}</h3>
					<p class="parrafo">{{ $servicio['resumen'] }}</p>
					<ul class="lista_servicio">
						@for($i = 0; $i < count($servicio['lista_servicio']); $i++)
						@php
						$lista = $servicio['lista_servicio'][$i];
						@endphp
						<li class="item_lista">{{ $lista['item_lista'] }}</li>
						@endfor
					</ul>
					<a class="btn2 displayInline-block" href="{{ $servicio['link'] }}">Ver más</a>
				</div>
			</div>
		</div>
	</div>

@endforeach
@endsection
