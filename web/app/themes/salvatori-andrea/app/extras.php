<?php
/**
 * Enable features from Soil when plugin is activated
 * @link https://roots.io/plugins/soil/
 */
add_theme_support('soil-clean-up');
add_theme_support('soil-disable-asset-versioning');
add_theme_support('soil-disable-trackbacks');
add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
add_theme_support('soil-jquery-cdn');
add_theme_support('soil-js-to-footer');
add_theme_support('soil-nav-walker');
add_theme_support('soil-nice-search');
add_theme_support('soil-relative-urls');

// adding the thumbnail to the rest api 

add_action('rest_api_init', 'register_rest_images' );
function register_rest_images(){
    register_rest_field( array('post', 'page', 'post_type'),
        'fimg_url',
        array(
            'get_callback'    => 'get_rest_featured_image',
            'update_callback' => null,
            'schema'          => null,
        )
    );
}
function get_rest_featured_image( $object, $field_name, $request ) {
    if( $object['featured_media'] ){
        $img = wp_get_attachment_image_src( $object['featured_media'], 'app-thumb' );
        return $img[0];
    }
    return false;
}


function create_posttype() {
    
    register_post_type( 'servicios',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Servicios' ),
                'singular_name' => __( 'servicio' ),
            ),

            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'servicio'),
        )

    );

    $labels = array( //labels para las taxonomia de
            'name' => _x( 'Categorias', 'taxonomy general name' ),
            'singular_name' => _x( 'categoria', 'taxonomy singular name' ),
            'search_items' =>  __( 'Buscar Categorias' ),
            'all_items' => __( 'Todas las Categorias' ),
            'edit_item' => __( 'Editar categoria' ), 
            'update_item' => __( 'Actualizar categoria' ),
            'add_new_item' => __( 'Agregar nueva categoria' ),
            'new_item_name' => __( 'Nombre de la nueva categoria' ),
            'menu_name' => __( 'Categorias' ),
          ); 

    register_taxonomy('categorias',array('actividades'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'categorias' ),
      ));

     register_post_type( 'actividades',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Actividades' ),
                'singular_name' => __( 'actividad' )
            ),

            'taxonomies' => array('categorias'),
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'actividad'),
        )
    );

     register_post_type( 'cursos',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Cursos' ),
                'singular_name' => __( 'curso' )
            ),

            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
            'public' => true,
            'publicly_queryable' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'curso'),
        )
    );
}

add_action( 'init', 'create_posttype' );


/// Adding acf to theme. 

// 1. customize ACF path
add_filter('acf/settings/path', __NAMESPACE__. '\my_acf_settings_path');
function my_acf_settings_path( $path ) {
 // update path
 $path = get_stylesheet_directory() . '/mu-plugins/acf/';
 // return
 return $path; 
}
// 2. customize ACF dir
add_filter('acf/settings/dir', __NAMESPACE__ . '\my_acf_settings_dir');
function my_acf_settings_dir( $dir ) {
 // update path
 $dir = get_stylesheet_directory_uri() . '/mu-plugins/acf/';
 // return
 return $dir; 
}
// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_admin', '__return_false');
// 4. Include ACF
include_once( get_stylesheet_directory() . '/mu-plugins/acf/acf.php' );

// Adding ACF to the rest API
include_once( get_stylesheet_directory() . '/mu-plugins/acf-rest/index.php' );

//options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Opciones');
}