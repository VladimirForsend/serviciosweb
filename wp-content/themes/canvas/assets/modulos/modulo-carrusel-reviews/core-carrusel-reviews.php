<?php
 /*speakers*/

function carrusel_reviews() {
	$labels = array(
		'name'                  => _x( 'ServiSenior 2: Carrusel Reviews', 'Post Type General Name' ),
		'singular_name'         => _x( 'Carrusel de reviews', 'Post Type Singular Name' ),
		'menu_name'             => __( 'ServiSenior 2: Reviews', 'carrusel_reviews2' ),
		'name_admin_bar'        => __( 'Carrusel de reviews', 'carrusel_reviews2' ),
		'archives'              => __( 'Carrusel de reviews', 'carrusel_reviews2' ),
		'attributes'            => __( 'Carrusel de reviews', 'carrusel_reviews2' ),
		'parent_item_colon'     => __( 'Basado en:', 'carrusel_reviews2' ),
		'all_items'             => __( 'Todos los Carruseles de reviews', 'carrusel_reviews2' ),
		'add_new_item'          => __( 'Agregar nueva carrusel_logo', 'carrusel_reviews2' ),
		'add_new'               => __( 'Agregar nueva', 'carrusel_reviews2' ),
		'new_item'              => __( 'nueva carrusel_logo', 'carrusel_reviews2' ),
		'edit_item'             => __( 'editar carrusel_logo', 'carrusel_reviews2' ),
		'update_item'           => __( 'actualizar', 'carrusel_reviews2' ),
		'view_item'             => __( 'Ver carrusel_logo', 'carrusel_reviews2' ),
		'view_items'            => __( 'ver la carrusel_logo', 'carrusel_reviews2' ),
		'search_items'          => __( 'buscar una carrusel_logo', 'carrusel_reviews2' ),
		'not_found'             => __( 'no se encuentra', 'carrusel_reviews2' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'carrusel_reviews2' ),
		'featured_image'        => __( 'imagen destacada', 'carrusel_reviews2' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'carrusel_reviews2' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'carrusel_reviews2' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'carrusel_reviews2' ),
		'insert_into_item'      => __( 'insertar en el item', 'carrusel_reviews2' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'carrusel_reviews2' ),
		'items_list'            => __( 'Lista de artículos', 'carrusel_reviews2' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'carrusel_reviews2' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'carrusel_reviews2' ),
	);
	$args = array(
		'label'                 => __( 'Carrusel de reviews', 'carrusel_reviews2' ),
		'description'           => __( 'Carrusel de reviews', 'carrusel_reviews2' ),
		'labels'                => $labels,
		'show_in_rest' => false,
		'supports'              => array( 'title', 'custom-fields', 'page-attributes'),
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_icon'             => 'dashicons-book-alt',
		'menu_position'         => 52,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'Carrusel de reviews', 'with_front' => FALSE)
		
	);
	register_post_type( 'carrusel_reviews2', $args );
} 
// Register Custom Post Type
add_action( 'init', 'carrusel_reviews', 0 );
