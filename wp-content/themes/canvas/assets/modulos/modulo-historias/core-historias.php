<?php  /*  historias */

function historias_register() {

    $labels = array(
        'name' => _x('Historias de Cambios', 'post type general name'),
        'singular_name' => _x('Historia de Cambio', 'post type singular name'),
        'add_new' => _x('Agregar nuevo elemento', 'historias item'),
        'add_new_item' => __('Agregar nuevo elemento'),
        'edit_item' => __('Editar elemento'),
        'new_item' => __('Nuevo elemento'),
        'view_item' => __('Ver el elemento'),
        'search_items' => __('Buscar elementos'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
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
        'menu_icon'  => 'dashicons-format-video',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'extract'),
        'rewrite' => array('slug' => 'historias', 'with_front' => FALSE)
      ); 

    register_post_type( 'historias' , $args );
}

add_action('init', 'historias_register');