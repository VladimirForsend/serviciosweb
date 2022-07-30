<?php
 /*speakers*/

function microbox() {

	$labels = array(
		'name'                  => _x( 'Home 9: Reportajes', 'Post Type General Name', 'microbox' ),
		'singular_name'         => _x( 'Reportajes', 'Post Type Singular Name', 'microbox' ),
		'menu_name'             => __( 'Home 9: Reportajes', 'microbox' ),
		'name_admin_bar'        => __( 'Reportajes', 'microbox' ),
		'archives'              => __( 'Reportajes', 'microbox' ),
		'attributes'            => __( 'Reportajes', 'microbox' ),
		'parent_item_colon'     => __( 'Basado en:', 'microbox' ),
		'all_items'             => __( 'Todos los reportajes', 'microbox' ),
		'add_new_item'          => __( 'Agregar nuevo microbox', 'microbox' ),
		'add_new'               => __( 'Agregar nueva', 'microbox' ),
		'new_item'              => __( 'nuevo microbox', 'microbox' ),
		'edit_item'             => __( 'editar microbox', 'microbox' ),
		'update_item'           => __( 'actualizar', 'microbox' ),
		'view_item'             => __( 'Ver microbox', 'microbox' ),
		'view_items'            => __( 'ver el microbox', 'microbox' ),
		'search_items'          => __( 'buscar un microbox', 'microbox' ),
		'not_found'             => __( 'no se encuentra', 'microbox' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'microbox' ),
		'featured_image'        => __( 'imagen destacada', 'microbox' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'microbox' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'microbox' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'microbox' ),
		'insert_into_item'      => __( 'insertar en el item', 'microbox' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'microbox' ),
		'items_list'            => __( 'Lista de artículos', 'microbox' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'microbox' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'microbox' ),
	);
	$args = array(
		'label'                 => __( 'microbox', 'microbox' ),
		'description'           => __( 'microbox', 'microbox' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'categoria-microbox', 'etiqueta-microbox', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-book-alt',
		'menu_position' => 39,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'microbox', 'with_front' => FALSE)
	);




	register_post_type( 'microbox', $args );

}

// Register Custom Post Type
add_action( 'init', 'microbox', 0 );
