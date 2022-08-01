<?php
 /*speakers*/

// Register Custom Post Type
add_action( 'init', 'beneficios', 0 );

function beneficios() {

	$labels = array(
		'name'                  => _x( 'ServiSenior 4: Beneficios', 'Post Type General Name', 'beneficios' ),
		'singular_name'         => _x( 'ServiSenior 4: Beneficios', 'Post Type Singular Name', 'beneficios' ),
		'menu_name'             => __( 'ServiSenior 4: Beneficios', 'beneficios' ),
		'name_admin_bar'        => __( 'ServiSenior 4: Beneficios', 'beneficios' ),
		'archives'              => __( 'beneficios', 'beneficios' ),
		'attributes'            => __( 'beneficios', 'beneficios' ),
		'parent_item_colon'     => __( 'Basado en:', 'beneficios' ),
		'all_items'             => __( 'Todos los beneficios', 'beneficios' ),
		'add_new_item'          => __( 'Agregar nuevo beneficios', 'beneficios' ),
		'add_new'               => __( 'Agregar nueva', 'beneficios' ),
		'new_item'              => __( 'nuevo beneficios', 'beneficios' ),
		'edit_item'             => __( 'editar beneficios', 'beneficios' ),
		'update_item'           => __( 'actualizar', 'beneficios' ),
		'view_item'             => __( 'Ver beneficios', 'beneficios' ),
		'view_items'            => __( 'ver el beneficios', 'beneficios' ),
		'search_items'          => __( 'buscar un beneficios', 'beneficios' ),
		'not_found'             => __( 'no se encuentra', 'beneficios' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'beneficios' ),
		'featured_image'        => __( 'imagen destacada', 'beneficios' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'beneficios' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'beneficios' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'beneficios' ),
		'insert_into_item'      => __( 'insertar en el item', 'beneficios' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'beneficios' ),
		'items_list'            => __( 'Lista de artículos', 'beneficios' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'beneficios' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'beneficios' ),
	);
	$args = array(
		'label'                 => __( 'beneficios', 'beneficios' ),
		'description'           => __( 'beneficios', 'beneficios' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', 'page-attributes', 'excerpt' ),
		'taxonomies'            => array( 'categoria-beneficios', 'etiqueta-beneficios', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-book-alt',
		'menu_position' => 55,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'beneficios', 'with_front' => FALSE)
		
	);




	register_post_type( 'beneficios', $args );

}

 /*categorias personalizadas para beneficios*/
 function categoria_beneficios() {

	register_taxonomy(
		'categoria-beneficios',
		'beneficios',
		array(
			'label' => __( 'Categoria beneficios' ),
			'rewrite' => array( 'slug' => 'categoria-beneficios' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_beneficios' );


function etiqueta_beneficios() {

register_taxonomy(
			'etiqueta-beneficios','beneficios',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta beneficios' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'beneficiosquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-beneficios' ),
		)
	); 




}
add_action( 'init', 'etiqueta_beneficios' );

function display_beneficios( $beneficiosquery ) {
	if( is_category() || is_tag() && empty( $beneficiosquery->beneficiosquery_vars['beneficiosfilter'] ) ) {
	$beneficiosquery->set( 'post_type', array(
	'post', 'nav_menu_item', 'beneficios', 
	'post', 'nav_menu_item', 'beneficios', 
	));
	return $beneficiosquery;
	}
   }
   
   add_filter( 'pre_get_posts', 'display_beneficios' );

   if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_628f7d40a377c',
		'title' => 'campos iconos beneficios',
		'fields' => array(
			array(
				'key' => 'field_628f7d4fe3380',
				'label' => 'beneficios_icono',
				'name' => 'beneficios_icono',
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
					'value' => 'beneficios',
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