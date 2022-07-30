<?php  /*  Multibanners */

function multibannerb_register() {

    $labels = array(
        'name' => _x('Home 7: ¡No la pienses tanto!', 'post type general name'),
        'singular_name' => _x('No la pienses tanto', 'post type singular name'),
        'add_new' => _x('Agregar nuevo banner', 'multibannerb item'),
        'add_new_item' => __('Agregar nuevo banner'),
        'edit_item' => __('Editar banner'),
        'new_item' => __('Nuevo banner'),
        'view_item' => __('Ver el banner'),
        'search_items' => __('Buscar banner'),
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
        /*'taxonomies'	=> array( 'categoria-multibannerb', 'etiqueta-multibannerb', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'multibannerb', 'with_front' => false)
      ); 

    register_post_type( 'multibannerb' , $args );
}

add_action('init', 'multibannerb_register');