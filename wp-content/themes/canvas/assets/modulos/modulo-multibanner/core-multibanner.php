<?php  /*  Multibanners */

function multibanner_register() {

    $labels = array(
        'name' => _x('Home 6: Nos integramos', 'post type general name'),
        'singular_name' => _x('Logos Integraciones', 'post type singular name'),
        'add_new' => _x('Agregar nuevo socio', 'slideshow_two item'),
        'add_new_item' => __('Agregar nuevo socio'),
        'edit_item' => __('Editar socio'),
        'new_item' => __('Nuevo socio'),
        'view_item' => __('Ver el socio'),
        'search_items' => __('Buscar socio'),
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
        'menu_position' => 36,
        /*'taxonomies'	=> array( 'categoria-multibanner', 'etiqueta-multibanner', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'multibanner', 'with_front' => false)
      ); 

    register_post_type( 'multibanner' , $args );
}

add_action('init', 'multibanner_register');
