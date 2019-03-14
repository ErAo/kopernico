<div class="blog-home columns is-multiline is-paddingless is-marginless">
	<div class="column is-4 back-darkblue displayFlex centerflex resumen-blog-home is-paddingless">
		<div class="blog-home-descripcion">
			<h3 class="titulo letter-white">
				{{ get_field('titulo_blog_home', 'options') }}
			</h3>
			<p class="subtitulo letter-white">
				{{ get_field('subtitulo_blog_home', 'options') }}
			</p>
			<p class="parrafo letter-white">
				{{ get_field('resumen_blog_home', 'options') }}
			</p>
		</div>
	</div>

	<div id="blog-slider" class="column is-8 is-paddingless">
		<div id="blog-slider-hijo" class="columns is-paddingless is-marginless content-center">

			@foreach(array_slice($blogs_loop, 0, 10) as $blog)
					<div class="column is-4 tarjeta-blog-padre" style="padding-top: 0;">
					<div class="column content-center tarjeta-blog back-white is-paddingless">
						<div class="tarjeta-blog-img" style="background: url({{ $blog['thumbnail'] }}) center center / cover;">
							
						</div>
						<div class="column tarjeta-blog-text">
						<h3 class="titulo">{{ $blog['title'] }}</h3>
						<p class="parrafo">{{ $blog['resumen'] }}</p>
						<a href="{{ $blog['link'] }}" class="btn2">leer articulo</a>
						</div>
					</div>
				</div>
				@endforeach
		</div>
	</div>
	<div class="columns is-marginless is-multiline back-blue displayFlex" style="width: 100%;">
		<div class="column is-10 displayFlex centerflex-top">
			<a href="#" class="btn2 back-darkblue" style="margin: 0 3vw 0 auto;">visitar blog</a>
		</div>
		<div class="column is-2 is-paddingless is-marginless">
			<div class="columns is-paddingless is-marginless is-multiline panel-blog-tarjetas displayFlex">
				<div class="column is-6"><img class="paneles" id="blog-slider-prev" src="app/uploads/2019/02/flecha-blanca.png" alt=""> </div>
				<div class="column is-6"><img class="paneles" id="blog-slider-next" src="app/uploads/2019/02/flecha-blanca.png" alt="" style="transform: rotate(180deg)"> </div>
			</div>
		</div>
	</div>
</div>