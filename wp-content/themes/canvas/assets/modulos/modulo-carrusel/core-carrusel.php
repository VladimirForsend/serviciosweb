<?php  /*  carrusels */

function carrusel_register() {

    $labels = array(
        'name' => _x('Carrusel Testimonios', 'post type general name'),
        'singular_name' => _x('Carrusel Testimonios', 'post type singular name'),
        'add_new' => _x('Agregar nuevo banner', 'slideshow_two item'),
        'add_new_item' => __('Agregar nuevo banner'),
        'edit_item' => __('Editar banner'),
        'new_item' => __('Nuevo banner'),
        'view_item' => __('Ver el banner'),
        'search_items' => __('Buscar banner'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-images-alt',
        'hierarchical' => false,
        'menu_position' => null,
        'taxonomies'	=> array( 'categoria-carrusel', 'etiqueta-carrusel', ), 
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'carrusel', 'with_front' => false)
      ); 

    register_post_type( 'carrusel' , $args );
}

add_action('init', 'carrusel_register');

/*categorias personalizadas para inf*/
function categoria_carrusel() {
	register_taxonomy(
		'categoria-carrusel',
		'carrusel',
		array(
			'label' => __( 'Categoria carrusel' ),
			'rewrite' => array( 'slug' => 'categoria-carrusel' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_carrusel' );

function etiqueta_carrusel() {
    register_taxonomy(
        'etiqueta-carrusel','carrusel',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta carrusel' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-carrusel' ),
        )
    );
}

add_action( 'init', 'etiqueta_carrusel' );

/*function display_inf( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['carruselfilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'carrusel', 
        'post', 'nav_menu_item', 'carrusel', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf' );*/

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_62aba6d3b86b0',
        'title' => 'Modulo -> carrusel',
        'fields' => array(
            array(
                'key' => 'field_62aba6db217ba',
                'label' => 'Ancho Banner',
                'name' => 'ancho_banner',
                'type' => 'select',
                'instructions' => 'Escoja el tamaño del banner',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    '100%' => '100%',
                    '75%' => '75%',
                    '50%' => '50%',
                    '25%' => '25%',
                ),
                'default_value' => '100%',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_62abb2dcd63b8',
                'label' => 'Alto Banner',
                'name' => 'alto_banner',
                'type' => 'number',
                'instructions' => 'Define el alto en pixeles del banner, por defecto 100px',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 100,
                'placeholder' => '',
                'prepend' => '',
                'append' => 'px',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_62aba746217bc',
                'label' => 'Imagen del Banner',
                'name' => 'imagen_banner',
                'type' => 'image',
                'instructions' => 'Se recomienda que las imagenes en una misma fila tengan el mismo alto',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_62aba72f217bb',
                'label' => 'Link Banner',
                'name' => 'link_banner',
                'type' => 'text',
                'instructions' => 'Inserte el link del banner',
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
                    'value' => 'carrusel',
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