<nav role="navigation" aria-label="main navigation" class="columns menu-main is-paddingless is-marginless" id="menu-main">
<!--     <div>
        <a href="{{ home_url('/') }}">
            {{ get_bloginfo('name', 'display') }}
        </a>
    </div> -->
    <div class="logo-menu">
    	<a href="{{ home_url('/') }}">
            <img id="logo" src="{{ get_field('logo', 'options') }}" alt="kopernico">
        </a>
    </div>
    	<div class="menu-padre">
        <div class="mi-burger" id="mi-burger">
            <p class="mi-burger-item mi-b-1"></p>
            <p class="mi-burger-item mi-b-2"></p>
            <p class="mi-burger-item mi-b-3"></p>
        </div>
         @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'sage-menu']) !!}
        @endif   
        </div>
</nav>
