<?php
 /*speakers*/

// Register Custom Post Type
add_action( 'init', 'banner_2', 0 );

function banner() {

	$labels = array(
		'name'                  => _x( 'Quienes somos 9: Banner Footer', 'Post Type General Name', 'banner_2' ),
		'singular_name'         => _x( 'banner', 'Post Type Singular Name', 'banner_2' ),
		'menu_name'             => __( 'Quienes somos 9: Banner Footer', 'banner_2' ),
		'name_admin_bar'        => __( 'banner_2', 'banner_2' ),
		'archives'              => __( 'banner_2', 'banner_2' ),
		'attributes'            => __( 'banner_2', 'banner_2' ),
		'parent_item_colon'     => __( 'Basado en:', 'banner_2' ),
		'all_items'             => __( 'Todos los banner_2', 'banner_2' ),
		'add_new_item'          => __( 'Agregar nuevo banner_2', 'banner_2' ),
		'add_new'               => __( 'Agregar nueva', 'banner_2' ),
		'new_item'              => __( 'nuevo banner_2', 'banner_2' ),
		'edit_item'             => __( 'editar banner_2', 'banner_2' ),
		'update_item'           => __( 'actualizar', 'banner_2' ),
		'view_item'             => __( 'Ver banner_2', 'banner_2' ),
		'view_items'            => __( 'ver el banner_2', 'banner_2' ),
		'search_items'          => __( 'buscar un banner_2', 'banner_2' ),
		'not_found'             => __( 'no se encuentra', 'banner_2' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'banner_2' ),
		'featured_image'        => __( 'imagen destacada', 'banner_2' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'banner_2' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'banner_2' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'banner_2' ),
		'insert_into_item'      => __( 'insertar en el item', 'banner_2' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'banner_2' ),
		'items_list'            => __( 'Lista de artículos', 'banner_2' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'banner_2' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'banner_2' ),
	);
	$args = array(
		'label'                 => __( 'banner_2', 'banner_2' ),
		'description'           => __( 'banner_2', 'banner_2' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'categoria-banner_2', 'etiqueta-banner_2', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 50,
		'menu_icon'             => 'dashicons-book-alt',
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'banner_2', 'with_front' => FALSE)
		
	);

	register_post_type( 'banner_2', $args );

}
