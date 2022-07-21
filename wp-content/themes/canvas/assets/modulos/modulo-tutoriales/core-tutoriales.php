<?php  /* tutoriales */

function tutoriales_register() {

    $labels = array(
        'name' => _x('Tutoriales', 'post type general name'),
        'singular_name' => _x('Tutorial', 'post type singular name'),
        'add_new' => _x('Agregar nuevo elemento', 'tutoriales item'),
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
        'menu_icon'  => 'dashicons-welcome-learn-more',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'extract'),
        'rewrite' => array('slug' => 'tutoriales', 'with_front' => TRUE)
      ); 

    register_post_type( 'tutoriales' , $args );
}

add_action('init', 'tutoriales_register');