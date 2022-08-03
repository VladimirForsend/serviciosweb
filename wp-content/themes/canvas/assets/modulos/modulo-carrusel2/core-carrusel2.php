<?php  /*  carrusels */

function carrusel_register_2() {

    $labels = array(
        'name' => _x('Quienes Somos 4: Otros servicios', 'post type general name'),
        'singular_name' => _x('Quienes Somos 4: Otros Servicios', 'post type singular name'),
        'add_new' => _x('Agregar nuevo Otros servicios', 'slideshow_two item'),
        'add_new_item' => __('Agregar nuevo Otros servicios'),
        'edit_item' => __('Editar Otros servicios'),
        'new_item' => __('Nuevo Otros servicios'),
        'view_item' => __('Ver el Otros servicios'),
        'search_items' => __('Buscar Otros servicios'),
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
        'menu_position' => 38,
        'taxonomies'	=> array( 'categoria-carrusel2', 'etiqueta-carrusel', ), 
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'carrusel2', 'with_front' => false)
      ); 

    register_post_type( 'carrusel2' , $args );
}

add_action('init', 'carrusel_register_2');
