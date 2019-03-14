<div class="nosotros-home">
	<div class="column is-10 is-paddingless content-center">
		<div class="columns is-multiline is-paddingless is-marginless">
			<div class="column is-7" style="min-height: 250px; position: relative;overflow: hidden;">
				@if(have_rows('slider_nosotros', 'options'))
						@while(have_rows('slider_nosotros', 'options'))
						@php(the_row())
							<div class="slider-img-nosotros" style="background: url({{ the_sub_field('imagen_slider_nosotros') }}) center center / cover;"></div>
						@endwhile
					@else
					@endif
				
			</div>
			<div class="column is-5 is-paddingless">

				<div class="column centerflex-top" id="padre-slider-nosotros-text" style="padding: 4vh 2vw;">
					
					@if(have_rows('slider_nosotros', 'options'))
						@while(have_rows('slider_nosotros', 'options'))
						@php(the_row())
						<div class="slider-text-nosotros">
							<h3 class="titulo">{{ the_sub_field('titulo_slider_nosotros') }}</h3>
							{{ the_sub_field('descripcion_slider_nosotros') }}
						</div>
						@endwhile
					@else
					@endif

				</div>

				<div class="columns is-paddingless is-marginless is-multiline">
					<div class="column is-3 is-paddingless back-blue">
						<div class="columns is-paddingless is-marginless is-multiline panel-nosotros-home">
							<div class="column is-6 content-center centerflex"> <img class="paneles" id="slider-nosotros-prev" src="app/uploads/2019/02/flecha-blanca.png" alt=""> </div>
							<div class="column is-6 content-center centerflex"> <img class="paneles" id="slider-nosotros-next" src="app/uploads/2019/02/flecha-blanca.png" alt="" style="transform: rotate(180deg)"> </div>
						</div>
					</div>
					<div class="column is-9 displayFlex centerflex-top is-paddingless">
						<a href="{{ home_url('nosotros') }}" class="btn1" style="margin-left: 2vw;">Conocer más</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
