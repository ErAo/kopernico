<div class="main-cover">
        @if(has_post_thumbnail())
        <div class="featured" style="background: url({!! App::thumbnail() !!}) center center / cover fixed">
        </div>
        @endif
    <div class="content-cover">
        <h1 class="titulo letter-white animated fadeInUp" data-wow-delay="0.4s">{!! App::title() !!}</h1>
        @if(App::excerpt())
        <p class="parrafo letter-white  animated fadeInUp " data-wow-delay="0.6s">{!! App::excerpt() !!}</p>
        @else
        <p class="parrafo letter-white  animated fadeInUp " data-wow-delay="0.6s">{{ get_field('extracto_page', $post->ID) }}</p>
        @endif
        
    </div>
</div>
