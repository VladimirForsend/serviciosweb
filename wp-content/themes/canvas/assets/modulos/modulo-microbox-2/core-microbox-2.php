<?php
 /*speakers*/

function microbox_2() {

	$labels = array(
		'name'                  => _x( 'Quienes somos 7: Reportajes', 'Post Type General Name', 'microbox_2' ),
		'singular_name'         => _x( 'Reportajes', 'Post Type Singular Name', 'microbox_2' ),
		'menu_name'             => __( 'Quienes somos 7: Reportajes', 'microbox_2' ),
		'name_admin_bar'        => __( 'Reportajes', 'microbox_2' ),
		'archives'              => __( 'Reportajes', 'microbox_2' ),
		'attributes'            => __( 'Reportajes', 'microbox_2' ),
		'parent_item_colon'     => __( 'Basado en:', 'microbox_2' ),
		'all_items'             => __( 'Todos los reportajes', 'microbox_2' ),
		'add_new_item'          => __( 'Agregar nuevo microbox_2', 'microbox_2' ),
		'add_new'               => __( 'Agregar nueva', 'microbox_2' ),
		'new_item'              => __( 'nuevo microbox_2', 'microbox_2' ),
		'edit_item'             => __( 'editar microbox_2', 'microbox_2' ),
		'update_item'           => __( 'actualizar', 'microbox_2' ),
		'view_item'             => __( 'Ver microbox_2', 'microbox_2' ),
		'view_items'            => __( 'ver el microbox_2', 'microbox_2' ),
		'search_items'          => __( 'buscar un microbox_2', 'microbox_2' ),
		'not_found'             => __( 'no se encuentra', 'microbox_2' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'microbox_2' ),
		'featured_image'        => __( 'imagen destacada', 'microbox_2' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'microbox_2' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'microbox_2' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'microbox_2' ),
		'insert_into_item'      => __( 'insertar en el item', 'microbox_2' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'microbox_2' ),
		'items_list'            => __( 'Lista de artículos', 'microbox_2' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'microbox_2' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'microbox_2' ),
	);
	$args = array(
		'label'                 => __( 'microbox_2', 'microbox_2' ),
		'description'           => __( 'microbox_2', 'microbox_2' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'categoria-microbox_2', 'etiqueta-microbox_2', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 47,
		'menu_icon'             => 'dashicons-book-alt',
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'microbox_2', 'with_front' => FALSE)
	);




	register_post_type( 'microbox_2', $args );

}

// Register Custom Post Type
add_action( 'init', 'microbox_2', 0 );
