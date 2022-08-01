<?php  /*  cardss */

function cards_register() {

    $labels = array(
        'name' => _x('ServiSeniors 3: Planes', 'post type general name'),
        'singular_name' => _x('Planes', 'post type singular name'),
        'add_new' => _x('Agregar nuevo planes', 'slideshow_two item'),
        'add_new_item' => __('Agregar nuevo planes'),
        'edit_item' => __('Editar planes'),
        'new_item' => __('Nuevo planes'),
        'view_item' => __('Ver el planes'),
        'search_items' => __('Buscar planes'),
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
        'menu_position' => 53,
        'taxonomies'	=> array( 'categoria-cards', 'etiqueta-cards', ), 
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'cards', 'with_front' => false)
      ); 

    register_post_type( 'cards' , $args );
}

add_action('init', 'cards_register');
