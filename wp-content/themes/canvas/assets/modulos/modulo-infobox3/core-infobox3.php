<?php
 /*speakers*/

// Register Custom Post Type
add_action( 'init', 'testimonios2', 0 );

function testimonios2() {

	$labels = array(
		'name'                  => _x( 'ServiSenior 8: testimonios2', 'Post Type General Name', 'testimonios2' ),
		'singular_name'         => _x( 'ServiSenior 8: testimonios2', 'Post Type Singular Name', 'testimonios2' ),
		'menu_name'             => __( 'ServiSenior 8: testimonios2', 'testimonios2' ),
		'name_admin_bar'        => __( 'ServiSenior 8: testimonios2', 'testimonios2' ),
		'archives'              => __( 'testimonios2', 'testimonios2' ),
		'attributes'            => __( 'testimonios2', 'testimonios2' ),
		'parent_item_colon'     => __( 'Basado en:', 'testimonios2' ),
		'all_items'             => __( 'Todos los testimonios2', 'testimonios2' ),
		'add_new_item'          => __( 'Agregar nuevo testimonios2', 'testimonios2' ),
		'add_new'               => __( 'Agregar nueva', 'testimonios2' ),
		'new_item'              => __( 'nuevo testimonios2', 'testimonios2' ),
		'edit_item'             => __( 'editar testimonios2', 'testimonios2' ),
		'update_item'           => __( 'actualizar', 'testimonios2' ),
		'view_item'             => __( 'Ver testimonios2', 'testimonios2' ),
		'view_items'            => __( 'ver el testimonios2', 'testimonios2' ),
		'search_items'          => __( 'buscar un testimonios2', 'testimonios2' ),
		'not_found'             => __( 'no se encuentra', 'testimonios2' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'testimonios2' ),
		'featured_image'        => __( 'imagen destacada', 'testimonios2' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'testimonios2' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'testimonios2' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'testimonios2' ),
		'insert_into_item'      => __( 'insertar en el item', 'testimonios2' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'testimonios2' ),
		'items_list'            => __( 'Lista de artículos', 'testimonios2' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'testimonios2' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'testimonios2' ),
	);
	$args = array(
		'label'                 => __( 'testimonios2', 'testimonios2' ),
		'description'           => __( 'testimonios2', 'testimonios2' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'categoria-testimonios2', 'etiqueta-testimonios2', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-book-alt',
		'menu_position' => 58,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'testimonios2', 'with_front' => FALSE)
		
	);




	register_post_type( 'testimonios2', $args );

}

 /*categorias personalizadas para testimonios2*/
 function categoria_testimonios2() {

	register_taxonomy(
		'categoria-testimonios2',
		'testimonios2',
		array(
			'label' => __( 'Categoria testimonios2' ),
			'rewrite' => array( 'slug' => 'categoria-testimonios2' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_testimonios2' );


function etiqueta_testimonios2() {

register_taxonomy(
			'etiqueta-testimonios2','testimonios2',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta testimonios2' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'testimonios2query_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-testimonios2' ),
		)
	); 




}
add_action( 'init', 'etiqueta_testimonios2' );

function display_testimonios2( $testimonios2query ) {
	if( is_category() || is_tag() && empty( $testimonios2query->testimonios2query_vars['testimonios2filter'] ) ) {
	$testimonios2query->set( 'post_type', array(
	'post', 'nav_menu_item', 'testimonios2', 
	'post', 'nav_menu_item', 'testimonios2', 
	));
	return $testimonios2query;
	}
   }
   
   add_filter( 'pre_get_posts', 'display_testimonios2' );

   if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_628f7d40a377c',
		'title' => 'campos iconos testimonios2',
		'fields' => array(
			array(
				'key' => 'field_628f7d4fe3380',
				'label' => 'testimonios2_icono',
				'name' => 'testimonios2_icono',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonios2',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));
	
	endif;		