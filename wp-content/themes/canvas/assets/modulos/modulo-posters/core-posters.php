<?php
 /*speakers*/

function posters() {

	$labels = array(
		'name'                  => _x( 'Home 5: Nuestra plataforma', 'Post Type General Name', 'posters' ),
		'singular_name'         => _x( 'poster', 'Post Type Singular Name', 'posters' ),
		'menu_name'             => __( 'Home 5: Nuestra plataforma', 'posters' ),
		'name_admin_bar'        => __( 'Seguimiento de Pedidos', 'posters' ),
		'archives'              => __( 'posters', 'posters' ),
		'attributes'            => __( 'posters', 'posters' ),
		'parent_item_colon'     => __( 'Basado en:', 'posters' ),
		'all_items'             => __( 'Todos los posters', 'posters' ),
		'add_new_item'          => __( 'Agregar nueva poster', 'posters' ),
		'add_new'               => __( 'Agregar nueva', 'posters' ),
		'new_item'              => __( 'nueva poster', 'posters' ),
		'edit_item'             => __( 'editar poster', 'posters' ),
		'update_item'           => __( 'actualizar', 'posters' ),
		'view_item'             => __( 'Ver poster', 'posters' ),
		'view_items'            => __( 'ver la poster', 'posters' ),
		'search_items'          => __( 'buscar una poster', 'posters' ),
		'not_found'             => __( 'no se encuentra', 'posters' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'posters' ),
		'featured_image'        => __( 'imagen destacada', 'posters' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'posters' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'posters' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'posters' ),
		'insert_into_item'      => __( 'insertar en el item', 'posters' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'posters' ),
		'items_list'            => __( 'Lista de artículos', 'posters' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'posters' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'posters' ),
	);
	$args = array(
		'label'                 => __( 'posters', 'posters' ),
		'description'           => __( 'posters', 'posters' ),
		'labels'                => $labels,
		'show_in_rest' => true,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes' ),
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-book-alt',
		'menu_position' => 35,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'posters', 'with_front' => FALSE)	
	);
	register_post_type( 'posters', $args );
}

// Register Custom Post Type
add_action( 'init', 'posters', 0 );
