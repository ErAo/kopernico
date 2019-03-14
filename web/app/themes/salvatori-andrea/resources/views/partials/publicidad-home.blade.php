<div class="publicidad-home column is-10 content-center">
	<div class="column is-10 back-blue centerLeft fondo-azul-publicidad">
		
	</div>
	<div class="column is-12 img-pulbicidad" style="background: url(http://kewiña.org/wp-content/uploads/2017/07/RONDA.jpg) center center / cover;">
		
	</div>
	<div class="column is-8 content-center padre-texto-publicidad">
		<h3 class="titulo">{{ get_field('titulo_publicitario', 'options') }}</h3>
		<p class="subtitulo">{{ get_field('subtitulo_publicitario', 'options') }}</p>
		<p class="parrafo">{{ get_field('resumen_publicitario', 'options') }}</p>
		@php
		$btn = get_field('boton_publicitario', 'options');
		@endphp
		<a href="{{ $btn['url'] }}" class="btn1">{{ $btn['title'] }}</a>
	</div>
</div>