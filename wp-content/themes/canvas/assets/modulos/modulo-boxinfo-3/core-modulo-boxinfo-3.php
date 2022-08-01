<?php  /*  boxinfo */

function boxinfo_3_register() {

    $labels = array(
        'name' => _x('ServiSeniors 2: Únete', 'post type general name'),
        'singular_name' => _x('ServiSeniors 2: Únete', 'post type singular name'),
        'add_new' => _x('Agregar banner de categoría', 'slideshow_two item'),
        'add_new_item' => __('Agregar bloque web'),
        'edit_item' => __('Editar bloque web'),
        'new_item' => __('Nuevo bloque web'),
        'view_item' => __('Ver el bloque web'),
        'search_items' => __('Buscar bloque web'),
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
        'menu_icon'  => 'dashicons-grid-view',
        'hierarchical' => false,
        'menu_position' => 51,
        /*'taxonomies'	=> array( 'categoria-boxinfo_3', 'etiqueta-boxinfo_3', ), */
        'supports' => array('title', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'boxinfo_3', 'with_front' => false)
      ); 

    register_post_type( 'boxinfo_3' , $args );
}

add_action('init', 'boxinfo_3_register');