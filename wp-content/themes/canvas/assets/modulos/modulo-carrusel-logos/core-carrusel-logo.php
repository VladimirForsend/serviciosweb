<?php
 /*speakers*/

function carrusel_logos() {
	$labels = array(
		'name'                  => _x( 'Home 2', 'Post Type General Name' ),
		'singular_name'         => _x( 'Home 2', 'Post Type Singular Name' ),
		'menu_name'             => __( 'Home 2', 'carrusel_logos' ),
		'name_admin_bar'        => __( 'Home 2', 'carrusel_logos' ),
		'archives'              => __( 'Carrusel de logos', 'carrusel_logos' ),
		'attributes'            => __( 'Carrusel de logos', 'carrusel_logos' ),
		'parent_item_colon'     => __( 'Basado en:', 'carrusel_logos' ),
		'all_items'             => __( 'Todos los Carruseles de logos', 'carrusel_logos' ),
		'add_new_item'          => __( 'Agregar nueva carrusel_logo', 'carrusel_logos' ),
		'add_new'               => __( 'Agregar nueva', 'carrusel_logos' ),
		'new_item'              => __( 'nueva carrusel_logo', 'carrusel_logos' ),
		'edit_item'             => __( 'editar carrusel_logo', 'carrusel_logos' ),
		'update_item'           => __( 'actualizar', 'carrusel_logos' ),
		'view_item'             => __( 'Ver carrusel_logo', 'carrusel_logos' ),
		'view_items'            => __( 'ver la carrusel_logo', 'carrusel_logos' ),
		'search_items'          => __( 'buscar una carrusel_logo', 'carrusel_logos' ),
		'not_found'             => __( 'no se encuentra', 'carrusel_logos' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'carrusel_logos' ),
		'featured_image'        => __( 'imagen destacada', 'carrusel_logos' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'carrusel_logos' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'carrusel_logos' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'carrusel_logos' ),
		'insert_into_item'      => __( 'insertar en el item', 'carrusel_logos' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'carrusel_logos' ),
		'items_list'            => __( 'Lista de artículos', 'carrusel_logos' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'carrusel_logos' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'carrusel_logos' ),
	);
	$args = array(
		'label'                 => __( 'Carrusel de logos', 'carrusel_logos' ),
		'description'           => __( 'Carrusel de logos', 'carrusel_logos' ),
		'labels'                => $labels,
		'show_in_rest' => false,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes'),
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_icon'             => 'dashicons-book-alt',
		'menu_position' => null,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'Carrusel de logos', 'with_front' => FALSE)
		
	);
	register_post_type( 'carrusel_logos', $args );
} 
// Register Custom Post Type
add_action( 'init', 'carrusel_logos', 0 );
