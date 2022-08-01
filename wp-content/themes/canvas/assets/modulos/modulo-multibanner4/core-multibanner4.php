<?php  /*  Multibanners */

function multihistoria_register() {

    $labels = array(
        'name' => _x('Quienes somos 3: Nuestra historia', 'post type general name'),
        'singular_name' => _x('Quienes somos 3: Nuestra historia', 'post type singular name'),
        'add_new' => _x('Agregar nuevo historia', 'multihistoria item'),
        'add_new_item' => __('Agregar nuevo historia'),
        'edit_item' => __('Editar historia'),
        'new_item' => __('Nuevo historia'),
        'view_item' => __('Ver la historia'),
        'search_items' => __('Buscar historia'),
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
        'menu_position' => 37,
        /*'taxonomies'	=> array( 'categoria-multihistoriab', 'etiqueta-multihistoriab', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'multihistoria', 'with_front' => false)
      ); 

    register_post_type( 'multihistoria' , $args );
}

add_action('init', 'multihistoria_register');