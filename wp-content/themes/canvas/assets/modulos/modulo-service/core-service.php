<?php  /*  modulo service */

function service_register() {

    $labels = array(
        'name' => _x('Servicios', 'post type general name'),
        'singular_name' => _x('Servicio', 'post type singular name'),
        'add_new' => _x('Agregar nueva', 'dropdown item'),
        'add_new_item' => __('Agregar nueva pregunta'),
        'edit_item' => __('Editar la pregunta'),
        'new_item' => __('Nueva pregunta'),
        'view_item' => __('Ver la pregunta'),
        'search_items' => __('Buscar preguntas'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-editor-help',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies' => array('categoria-service'),
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'service', 'with_front' => FALSE)
      ); 

    register_post_type( 'service' , $args );
}

add_action('init', 'service_register');

/* categorias personalizadas para el custom post type */
function categoria_service() {
	register_taxonomy(
		'categoria-service',
		'service',
		array(
			'label' => __( 'Categoria Servicioss' ),
			'rewrite' => array( 'slug' => 'categoria-service' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_service' );

/*function etiqueta_service() {
    register_taxonomy(
        'etiqueta-service','service',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta Pregunta Frecuente' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-service' ),
        )
    );
}

add_action( 'init', 'etiqueta_service' );

function display_inf2( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['servicefilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'service', 
        'post', 'nav_menu_item', 'service', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf2' );*/