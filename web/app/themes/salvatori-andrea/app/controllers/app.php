<?php

// Global data available in all views extending app.blade.php

namespace App;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public function currentTemplate()
    {
        return basename(get_page_template() ,'.blade.php');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function excerpt()
    {
        return get_the_excerpt();
    }

    public static function thumbnail()
    {
        return get_the_post_thumbnail_url();
    }


    public static function glideImage()
    {
        return str_replace('/app/uploads/', '/img/', get_the_post_thumbnail_url());
    }

    function blogsLoop()
   {
       $blogs = get_posts([
           'post_type' => 'post',
           'numberposts' => -1,
       ]);

       return array_map(function ($post) {
           return [
               'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
               'title' => get_the_title($post->ID),
               'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
               'link' => get_permalink($post->ID),
               'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
               'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
               'tags' => get_tags($post->ID),
               'date' => get_the_date( 'l F j, Y', $post->ID )
           ];
       }, $blogs);
   }

    function pagesLoop()
   {
       $pages = get_posts([
           'post_type' => 'page',
           'numberposts' => -1,
       ]);

       return array_map(function ($post) {
           return [
               'template' => $post->ID,
               'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
               'title' => get_the_title($post->ID),
               'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
               'link' => get_permalink($post->ID),
               'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
               'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
               'tags' => get_tags($post->ID),
               'date' => get_the_date( 'l F j, Y', $post->ID ),
               'mostrar' => get_field('mostrar', $post->ID),
               'ilustracion_actividad' => get_field('ilustracion_actividad', $post->ID),
               'extracto_page' => get_field('extracto_page', $post->ID),
           ];
       }, $pages);
   }

    function serviciosLoop()
   {
       $servicios = get_posts([
           'post_type' => 'servicios',
           'numberposts' => -1,
       ]);

       return array_map(function ($post) {
           return [
               'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
               'title' => get_the_title($post->ID),
               'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
               'link' => get_permalink($post->ID),
               'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
               'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
               'tags' => get_tags($post->ID),
               'date' => get_the_date( 'l F j, Y', $post->ID ),
               'imagen_servicio' => get_field('imagen_servicio', $post->ID),
               'lista_servicio' => get_field('lista_servicio', $post->ID)
           ];
       }, $servicios);
   }

    function actividadesLoop()
   {
       $actividades = get_posts([
           'post_type' => 'actividades',
           'numberposts' => -1,
       ]);

       return array_map(function ($post) {
           return [
               'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
               'title' => get_the_title($post->ID),
               'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
               'link' => get_permalink($post->ID),
               'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
               'categorias' => get_the_terms( $post->ID, 'categorias')[0],
               'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
               'tags' => get_tags($post->ID),
               'date' => get_the_date( 'l F j, Y', $post->ID ),
               'mostrar_ocultar' => get_field('mostrar_ocultar', $post->ID),
               'slide_show' => get_field('slide_show', $post->ID),
               'subtitulo_detalle' => get_field('subtitulo_detalle', $post->ID),
               'resumen_detalle' => get_field('resumen_detalle', $post->ID),
               'competencias' => get_field('competencias', $post->ID),
               'iconos_competencias' => get_field('iconos_competencias', $post->ID)
           ];
       }, $actividades);
   }

   function cursosLoop()
   {
       $cursos = get_posts([
           'post_type' => 'cursos',
           'numberposts' => -1,
       ]);

       return array_map(function ($post) {
           return [
               'thumbnail' => get_the_post_thumbnail_url($post->ID, 'large'),
               'title' => get_the_title($post->ID),
               'resumen' =>apply_filters( 'the_excerpt',get_the_excerpt($post->ID) ),
               'link' => get_permalink($post->ID),
               'categories' => wp_list_pluck( get_the_category($post->ID),'name'),
               'content' => apply_filters( 'the_content', get_the_content($post->ID) ),
               'tags' => get_tags($post->ID),
               'date' => get_the_date( 'l F j, Y', $post->ID )
           ];
       }, $cursos);
   }

   function categoriasLoop()
    {
        $categorias= get_terms([
            'taxonomy' => 'categorias',
            'order' => 'ASC', 'include' => array(),
            'parent' => 0 
        ]);
 
        return array_map(function ($term) { 
            return [
                'title' => $term->name,
                'link' => get_term_link($term),
                'image' => get_field('imagen-categorias', $term),
                'id' => $term->term_id,
                'slug' => $term->slug,
                'descripcion' => $term->description
            ];
        }, $categorias);
    }
}
