<?php  /*  Multibanners */

function multiimpacto2_register() {

    $labels = array(
        'name' => _x('Quienes somos 6: Impacto 2', 'post type general name'),
        'singular_name' => _x('Quienes somos 6: Impacto 2', 'post type singular name'),
        'add_new' => _x('Agregar nuevo banner', 'multiimpacto2 item'),
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
        'menu_position' => 46,
        /*'taxonomies'	=> array( 'categoria-multiimpacto2', 'etiqueta-multiimpacto2', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'multiimpacto2', 'with_front' => false)
      ); 

    register_post_type( 'multiimpacto2' , $args );
}

add_action('init', 'multiimpacto2_register');