<?php  /*  slider home */
add_action('init', 'slideshow_2_register');

function slideshow_2_register() {

    $labels = array(
        'name' => _x('Quienes Somos 1: Slider', 'post type general name'),
        'singular_name' => _x('Quienes Somos 1: Slider', 'post type singular name'),
        'add_new' => _x('Agregar nuevo', 'slideshow item'),
        'add_new_item' => __('Agregar nuevo banner'),
        'edit_item' => __('Editar banner de Slider'),
        'new_item' => __('Nuevo banner de Slider'),
        'view_item' => __('Ver el banner de Slider'),
        'search_items' => __('Buscar Slider'),
        'not_found' =>  __('No se encontro'),
        'not_found_in_trash' => __('No se encontro el la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 42,
        'supports' => array('title', 'extract'),
        'rewrite' => array('slug' => 'slideshow_2', 'with_front' => FALSE)
      ); 

    register_post_type( 'slideshow_2' , $args );
}