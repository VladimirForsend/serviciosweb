<?php  /*  modulo faq */

function faq_register() {

    $labels = array(
        'name' => _x('Preguntas Frecuentes', 'post type general name'),
        'singular_name' => _x('Pregunta Frecuente', 'post type singular name'),
        'add_new' => _x('Agregar nueva', 'dropdown item'),
        'add_new_item' => __('Agregar nueva pregunta'),
        'edit_item' => __('Editar la pregunta'),
        'new_item' => __('Nueva pregunta'),
        'view_item' => __('Ver la pregunta'),
        'search_items' => __('Buscar preguntas'),
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
        'menu_icon'  => 'dashicons-editor-help',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'faq', 'with_front' => FALSE)
      ); 

    register_post_type( 'faq' , $args );
}

add_action('init', 'faq_register');