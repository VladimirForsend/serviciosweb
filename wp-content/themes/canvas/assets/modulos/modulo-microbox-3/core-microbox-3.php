<?php
 /*speakers*/

function microbox_3() {

	$labels = array(
		'name'                  => _x( 'Quienes somos 8: Premios', 'Post Type General Name', 'microbox_3' ),
		'singular_name'         => _x( 'Premios', 'Post Type Singular Name', 'microbox_3' ),
		'menu_name'             => __( 'Quienes somos 8: Premios', 'microbox_3' ),
		'name_admin_bar'        => __( 'Premios', 'microbox_3' ),
		'archives'              => __( 'Premios', 'microbox_3' ),
		'attributes'            => __( 'Premios', 'microbox_3' ),
		'parent_item_colon'     => __( 'Basado en:', 'microbox_3' ),
		'all_items'             => __( 'Todos los Premios', 'microbox_3' ),
		'add_new_item'          => __( 'Agregar nuevo microbox_3', 'microbox_3' ),
		'add_new'               => __( 'Agregar nueva', 'microbox_3' ),
		'new_item'              => __( 'nuevo microbox_3', 'microbox_3' ),
		'edit_item'             => __( 'editar microbox_3', 'microbox_3' ),
		'update_item'           => __( 'actualizar', 'microbox_3' ),
		'view_item'             => __( 'Ver microbox_3', 'microbox_3' ),
		'view_items'            => __( 'ver el microbox_3', 'microbox_3' ),
		'search_items'          => __( 'buscar un microbox_3', 'microbox_3' ),
		'not_found'             => __( 'no se encuentra', 'microbox_3' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'microbox_3' ),
		'featured_image'        => __( 'imagen destacada', 'microbox_3' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'microbox_3' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'microbox_3' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'microbox_3' ),
		'insert_into_item'      => __( 'insertar en el item', 'microbox_3' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'microbox_3' ),
		'items_list'            => __( 'Lista de artículos', 'microbox_3' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'microbox_3' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'microbox_3' ),
	);
	$args = array(
		'label'                 => __( 'microbox_3', 'microbox_3' ),
		'description'           => __( 'microbox_3', 'microbox_3' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'categoria-microbox_3', 'etiqueta-microbox_3', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 48,
		'menu_icon'             => 'dashicons-book-alt',
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'microbox_3', 'with_front' => FALSE)
	);




	register_post_type( 'microbox_3', $args );

}

// Register Custom Post Type
add_action( 'init', 'microbox_3', 0 );
