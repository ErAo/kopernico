<footer class="footer columns is-paddingless is-marginless" id="footer">

<div class="contain-contain-form column is-8 displayInline-block">
<div class="contain-form content-center centerTop">
	<h3 class="titulo">{{ get_field('titulo_formulario', 'options') }}</h3>
	<p class="subtitulo">
		{{ get_field('descripcion_formulario', 'options') }}
	</p>
	<form action="" class="columns is-multiline is-paddingless is-marginless form-contact">
		<input name="name" type="text" placeholder="Nombre" class="column is-5 field-name back-white">
		<input name="phone" type="number" placeholder="Telefono" class="column is-5 field-phone back-white">
		<input name="email" type="text" placeholder="E-mail" class="column is-12 field-email back-white">
		<textarea name="message" id="" placeholder="Mensaje" class="column is-12 field-message back-white"></textarea>
		<input type="submit" value="Enviar" class="btn2 back-darkblue btn-send">
	</form>
</div>
</div>
<div class="contain-contain-info column is-4 displayInline-block is-paddingless">
	<div class="info-footer back-darkblue letter-white centerTop">
		<div class="info-footer-correo texto-info-footer">
			<h3 class="titulo letter-white">
				{{ get_field('titulo_correo', 'options') }}
			</h3>
			<p class="parrafo letter-white">
				@if(have_rows('correos', 'options'))
					@while(have_rows('correos', 'options'))
					@php(the_row())
					{{ the_sub_field('correo') }}</br>
					@endwhile
				@else
				@endif
			</p>
		</div>
		<div class="info-footer-numeros texto-info-footer">
			<h3 class="titulo letter-white">
				{{ get_field('titulo_telefonos', 'options') }}
			</h3>
			<p class="parrafo letter-white">
				@if(have_rows('telefonos', 'options'))
					@while(have_rows('telefonos', 'options'))
					@php(the_row())
						{{ get_sub_field('telefono') }}
					@endwhile
				@else
				@endif
			</p>
		</div>
		<div class="info-footer-direccion texto-info-footer">
			<h3 class="titulo letter-white">
				visitanos en
			</h3>
			<p class="parrafo letter-white">
				Av. Ernesto Blohm, C.C.C.T., Nivel Terraza, Local AHL-01, Madrid
			</p>
		</div>

		<p class="copyright">
			COPYRIGHT - &#169; 2018 VIBRAEXTREMA.COM.VE <br>.ALL RIGHTS RESERVED.
		</p>
	</div>
</div>

</footer>
<!--         <div class="content has-text-centered">
<p>
<strong>Andrea</strong> by <a href="https://salvatoriagencies.com">Adrian Salvatori / Salvatori Agencies</a>. The source code is licensed
<a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
</p>
</div> -->