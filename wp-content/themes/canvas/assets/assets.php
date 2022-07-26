<?php

/**
 * funcion slider.  chupalo fede
 */

include get_template_directory() . '/assets/customizer/comercio-color-icon.php';

/*assets styles*/
add_post_type_support('page', 'excerpt');


// Disables the block editor from managing widgets.
// add_filter( 'use_widgets_block_editor', '__return_false' );

function comercio_framework()
{
    wp_register_style('iconos', get_template_directory_uri() . '/assets/librerias/css/fafa/css/all.css', 'all');
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&display=swap', 'all');
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('root', get_template_directory_uri() . '/assets/librerias/css/root.css', 'all');
    wp_register_style('comercio-general-css', get_template_directory_uri() . '/assets/librerias/css/titan.css', 'all');
    wp_register_style('comercio-ecommerce', get_template_directory_uri() . '/assets/librerias/css/ecommerce.css', 'all');
    wp_register_style('ficha-producto', get_template_directory_uri() . '/assets/librerias/css/ficha-producto.css', 'all');
    wp_register_style('mobile', get_template_directory_uri() . '/assets/librerias/css/mobile.css', 'all');

    wp_enqueue_style('iconos');
    wp_enqueue_style('fuentes');
    wp_enqueue_style('root');
    wp_enqueue_style('general-css');
    wp_enqueue_style('comercio-ecommerce');
    wp_enqueue_style('ficha-producto');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('mobile');
}

add_action('wp_enqueue_scripts', 'comercio_framework');

/*assets styles*/

/*assets scripts*/

function comercio_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:

        wp_register_script('comercio-js', get_bloginfo('template_directory') . '/assets/librerias/js/titan.js', array('jquery'), '1', false);
        wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js', false, true);
        wp_register_script('slider-fluid', get_bloginfo('template_directory') . '/assets/librerias/js/slick.js', array('jquery'), '1', true);
        wp_register_script('parallax', get_bloginfo('template_directory') . '/assets/librerias/js/parallax.js', array('jquery'), '1', false);
          
        /*encolamos los JS*/
        wp_enqueue_script('comercio-js', array('jquery'), true);
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('parallax');
        wp_enqueue_script('slider-fluid');

    }
}
add_action("wp_enqueue_scripts", "comercio_script", 1);




/*assets scripts*/

/*sub menu*/
function change_submenu_class($menu)
{
    $menu = preg_replace('/class="sub-menu"/', '/ class="nav-item dropdown" /', $menu);
    return $menu;
}
add_filter('wp_nav_menu', 'change_submenu_class');

/*sub menu*/


/*menu superior*/
if (!function_exists('menu_superior')) {

    // Register Navigation Menus
    function menu_superior()
    {

        $locations = array(
            'menu-superior' => __('menu-superior', 'menu-superior'),
        );
        register_nav_menus($locations);
    }
    add_action('init', 'menu_superior');
}

/*clases para li item */
function atg_menu_classes($classes, $item, $args)
{
    if ($args->theme_location == 'menu-superior') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);
/*clases para li item */

/*menu superior*/

/*menu categorias*/
// Register Navigation Menus
function menu_categoria()
{
    $locations = array(
        'menu-categoria' => __('menu-categoria', 'menu-categoria'),
    );
    register_nav_menus($locations);
}
add_action('init', 'menu_categoria');
/*menu categorias*/

/*menu RRSS*/
// Register Navigation Menus
function menu_rrss()
{

    $locations = array(
        'menu-rrss' => __('menu-rrss', 'menu-rrss'),
    );
    register_nav_menus($locations);
}
add_action('init', 'menu_rrss');
/*menu RRSS*/


/*menu mobile*/
// Register Navigation Menus
function menu_mobile()
{

    $locations = array(
        'menu-mobile' => __('menu-mobile', 'menu-mobile'),
    );
    register_nav_menus($locations);
}
add_action('init', 'menu_mobile');
/*menu mobile*/

/*widget assets*/
function widget_menu_footer()
{
    register_sidebar(array('name' => 'Footer logo', 'id' => 'menu_footer_logo', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu uno', 'id' => 'menu_uno', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu dos', 'id' => 'menu_dos', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu Logo y redes sociales', 'id' => 'menu_rrss', 'before_widget' => '<div id="%1$S" class="menu-footer">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu pie pagina', 'id' => 'menu_pie_pagina', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
}

add_action('widgets_init', 'widget_menu_footer');
/*widget assets*/


/*extracto*/
function tn_custom_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);



//Boleta factura.
//
/*include(get_stylesheet_directory() . '/assets/modulos/boleta-factura-modulo.php');*/


// SECCIONES DEL HOME
// 1.- SLIDERHOME
include get_template_directory() . '/assets/modulos/modulo-slider/core-slider.php';
// 2.- carrusel LOGOS
include get_template_directory() . '/assets/modulos/modulo-carrusel-logos/core-carrusel-logo.php';

// 3.- MEJOR DESPACHO
include get_template_directory() . '/assets/modulos/modulo-boxinfo/core-modulo-boxinfo.php';

// 4.- SERVICIOS
include get_template_directory() . '/assets/modulos/modulo-service/core-service.php';

// 5.- SEGUIMIENTO DE PEDIDOS
include get_template_directory() . '/assets/modulos/modulo-posters/core-posters.php';

// 6.- INTEGRADOS A
include get_template_directory() . '/assets/modulos/modulo-multibanner/core-multibanner.php';

// 7.- NO LA PIENSES TANTO
include get_template_directory() . '/assets/modulos/modulo-multibanner2/core-multibanner2.php';

// 8.- PALABRAS DE CLIENTES
include get_template_directory() . '/assets/modulos/modulo-carrusel/core-carrusel.php';

// 9.- REPORTAJES
include get_template_directory() . '/assets/modulos/modulo-microbox/core-microbox.php';

// 10.- ¿POR QUÉ TRABAJAR CON NOSOTROS?
include get_template_directory() . '/assets/modulos/modulo-infobox/core-infobox.php';

// 11.- BANNER
include get_template_directory() . '/assets/modulos/modulo-banner/core-banner.php';

// PAGINA QUIENES SOMOS
// 1.- SLIDERHOME
include get_template_directory() . '/assets/modulos/modulo-slider-2/core-slider-2.php';

// 2.- MEJOR DESPACHO
include get_template_directory() . '/assets/modulos/modulo-boxinfo-2/core-modulo-boxinfo-2.php';

// 3.- NUESTRA HISTORIA
include get_template_directory() . '/assets/modulos/modulo-multibanner4/core-multibanner4.php';

// 4.- OTROS SERVICIOS
include get_template_directory() . '/assets/modulos/modulo-carrusel2/core-carrusel2.php';

// 5.- IMPACTO SOCIAL A LA FECHA
include get_template_directory() . '/assets/modulos/modulo-multibanner5/core-multibanner5.php';

// 6.- IMPACTO A SENIORS
include get_template_directory() . '/assets/modulos/modulo-multibanner6/core-multibanner6.php';

// 7.- REPORTAJES
include get_template_directory() . '/assets/modulos/modulo-microbox-2/core-microbox-2.php';

// 8.- REPORTAJES
include get_template_directory() . '/assets/modulos/modulo-microbox-3/core-microbox-3.php';

// 9.- BANNER FOOTER
include get_template_directory() . '/assets/modulos/modulo-banner-2/core-banner-2.php';

// PAGINA DESPACHADORES
// 1.- SLIDERHOME
include get_template_directory() . '/assets/modulos/modulo-slider-3/core-slider-3.php';

// 2.- carrusel reviews
include get_template_directory() . '/assets/modulos/modulo-carrusel-reviews/core-carrusel-reviews.php';

// 3.- MEJOR DESPACHO
include get_template_directory() . '/assets/modulos/modulo-boxinfo-3/core-modulo-boxinfo-3.php';

// 4.- PLANES
include get_template_directory() . '/assets/modulos/modulo-cards/core-cards.php';

// 5.- BENEFICIOS
include get_template_directory() . '/assets/modulos/modulo-infobox2/core-infobox2.php';

// 3.- NOS HACE DIFERENTES
include get_template_directory() . '/assets/modulos/modulo-boxinfo-4/core-modulo-boxinfo-4.php';

// 8.- TESTIMONIOS
include get_template_directory() . '/assets/modulos/modulo-infobox3/core-infobox3.php';