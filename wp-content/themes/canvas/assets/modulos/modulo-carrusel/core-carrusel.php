<?php  /*  carrusels */

function carrusel_register() {

    $labels = array(
        'name' => _x('Carrusel Testimonios', 'post type general name'),
        'singular_name' => _x('Carrusel Testimonios', 'post type singular name'),
        'add_new' => _x('Agregar nuevo testimonio', 'slideshow_two item'),
        'add_new_item' => __('Agregar nuevo testimonio'),
        'edit_item' => __('Editar testimonio'),
        'new_item' => __('Nuevo testimonio'),
        'view_item' => __('Ver el testimonio'),
        'search_items' => __('Buscar testimonio'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-images-alt',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies'	=> array( 'categoria-carrusel', 'etiqueta-carrusel', ), 
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'carrusel', 'with_front' => false)
      ); 

    register_post_type( 'carrusel' , $args );
}

add_action('init', 'carrusel_register');
