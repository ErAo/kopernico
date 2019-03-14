<div class="hero-home columns is-multiline is-paddingless is-marginless" id="hero-home">
	<div class="info-hero column is-5 is-paddingless is-marginless">
		<div class="content-center info-hero-text">
			<h1 class="titulo">{{ get_field('titulo_hero', 'options') }}</h1>

			<p class="subtitulo">{{ get_field('subtitulo_hero', 'options') }}</p>

			<p class="parrafo">{{ get_field('resumen_hero', 'options') }}</p>
			<a href="#footer" class="btn1 btn-info-hero-text">¡Contactanos!</a>
		</div>
	</div>
	<div class="slider-hero column is-7 is-paddingless is-marginless">
		<div class="column is-12 slider-hero-img">
			@if(have_rows('slider_hero', 'options'))
				@while(have_rows('slider_hero', 'options'))
				@php(the_row())
				<div class="item-slider-hero" style="background: url({{ the_sub_field('imagen_slider_hero') }}) center center / cover;"></div>
				@endwhile
			@else
			@endif
		</div>
		<div class="column is-11 is-paddingless" style="margin: 0 0 0 auto;">
			<div class="columns is-multiline is-marginless is-paddingless back-darkblue">
				<div class="column is-3 is-paddingless padreflechas">
					<div class="flechas back-white"><img class="paneles" id="hero-slide-prev"src="/app/uploads/2019/02/flecha-azul.png" alt=""></div>
					<div class="flechas back-blue"><img class="paneles" id="hero-slide-next"src="/app/uploads/2019/02/flecha-azul.png" alt="" style="transform: rotate(180deg);"></div>
				</div>
				<div class="column is-9" id="slide-hero-cont">
					@if(have_rows('slider_hero', 'options'))
						@while(have_rows('slider_hero', 'options'))
						@php(the_row())
						<div class="slider-hero-texto">
						<p class="titulo-p letter-white">{{ the_sub_field('titulo_slider_hero') }}</p>
						<p class="parrafo letter-white">{{ the_sub_field('descripcion_slider_hero') }}
						</p>
						</div>
						@endwhile
					@else
					@endif
				</div>
			</div>
		</div>
	</div>
</div>