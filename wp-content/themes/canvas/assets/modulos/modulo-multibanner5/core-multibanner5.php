<?php  /*  Multibanners */

function multiimpacto_register() {

    $labels = array(
        'name' => _x('Quienes somos 5: Impacto social', 'post type general name'),
        'singular_name' => _x('Quienes somos 5: Impacto social', 'post type singular name'),
        'add_new' => _x('Agregar nuevo impacto', 'multiimpacto item'),
        'add_new_item' => __('Agregar nuevo impacto'),
        'edit_item' => __('Editar impacto'),
        'new_item' => __('Nuevo impacto'),
        'view_item' => __('Ver la impacto'),
        'search_items' => __('Buscar impacto'),
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
        'menu_position' => 45,
        /*'taxonomies'	=> array( 'categoria-multiimpactob', 'etiqueta-multiimpactob', ), */
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'multiimpacto', 'with_front' => false)
      ); 

    register_post_type( 'multiimpacto' , $args );
}

add_action('init', 'multiimpacto_register');