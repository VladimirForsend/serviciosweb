<?php


/*titan styles*/
add_post_type_support('page', 'excerpt');


function titan_framework()
{
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', 'all');
    wp_register_style('fuentes2', 'https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap', 'all');
    wp_register_style('fuentes3', 'https://fonts.googleapis.com/css2?family=Blinker:wght@100;200;300;400;600;700;800;900&display=swap', 'all');
    wp_enqueue_style('iconos', get_template_directory_uri() . '/assets/librerias/fafa/css/all.css', 'all');
    wp_enqueue_style('fuente-2', get_template_directory_uri() . '/assets/librerias/font/stylesheet.css', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/librerias/css/bootstrap.css', 'all');
    /*wp_enqueue_style('sidemenu', get_template_directory_uri() . '/assets/librerias/css/sidemenu.css', 'all');*/
    wp_enqueue_style('root', get_template_directory_uri() . '/assets/librerias/css/root.css', 'all');
    wp_enqueue_style('base', get_template_directory_uri() . '/assets/librerias/css/base.css', 'all');
    wp_enqueue_style('home', get_template_directory_uri() . '/assets/librerias/css/home.css', 'all');
    wp_enqueue_style('inner', get_template_directory_uri() . '/assets/librerias/css/inner.css', 'all');
    /*wp_enqueue_style('checkout', get_template_directory_uri() . '/assets/librerias/css/checkout.css', 'all');
    wp_enqueue_style('cuenta', get_template_directory_uri() . '/assets/librerias/css/cuenta.css', 'all');
    wp_enqueue_style('carrito', get_template_directory_uri() . '/assets/librerias/css/carrito.css', 'all');
    /*wp_enqueue_style('generalecom-css', get_template_directory_uri() . '/assets/librerias/css/ecommerce.css', 'all');*/
    wp_enqueue_style('archivo-producto', get_template_directory_uri() . '/assets/librerias/css/archive.css', 'all');/*
    wp_enqueue_style('ficha-producto', get_template_directory_uri() . '/assets/librerias/css/ficha-producto.css', 'all');*/
    wp_enqueue_style('mobile', get_template_directory_uri() . '/assets/librerias/css/mobile.css', 'all');
    /*wp_enqueue_style('header-css', get_template_directory_uri() . '/assets/css/librerias/header-component.css', 'all');*/


    

    
    wp_enqueue_style('iconos');
    wp_enqueue_style('fuentes');
    wp_enqueue_style('fuentes2');
    wp_enqueue_style('fuentes3');
    wp_enqueue_style('fuentes-2');
    wp_enqueue_style('root');
    wp_enqueue_style('base');
    wp_enqueue_style('home');
    wp_enqueue_style('inner');
    wp_enqueue_style('archivo-producto');
    /*wp_enqueue_style('carrito');
    wp_enqueue_style('checkout');
    wp_enqueue_style('cuenta');
    wp_enqueue_style('header-css');
    wp_enqueue_style('generalecom-css');
    /*wp_enqueue_style('ficha-producto');*/
    wp_enqueue_style('mobile');
    wp_enqueue_style('bootstrap');
}


add_action('wp_enqueue_scripts', 'titan_framework');


/*titan styles*/




/*titan scripts*/

function titans_script()
{
    // nos aseguramos que no estamos en el area de administracion
    if (!is_admin()) {
        // registramos nuestro script con el nombre "mi-script" y decimos que es dependiente de jQuery para que wordpress se asegure de incluir jQuery antes de este archivo
        // en adicion a las dependencias podemos indicar que este aarchivo debe ser insertado en el footer del sitio, en el lugar donde se encuente la funcion wp_footer

        // Register the script like this for a theme:




        wp_register_script('bootstrap-js', get_bloginfo('template_directory') . '/assets/librerias/js/bootstrap.js', array('jquery'), '1', true);
        //wp_register_script('bootstrap-bundle-js', get_bloginfo('template_directory') .'/titan/js/bootstrap.bundle.js', array('jquery'), '1', true);
        wp_register_script('slider-logos', get_bloginfo('template_directory') . '/assets/librerias/js/slick.js', array('jquery'), '1', true);
        wp_register_script('parallax', get_bloginfo('template_directory') . '/assets/librerias/js/parallax.js', array('jquery'), '1', false);
        wp_register_script('popover', get_bloginfo('template_directory') . '/assets/librerias/js/popper.min.js', array('jquery'), '2', true);
        wp_register_script('titanes-js', get_bloginfo('template_directory') . '/assets/librerias/js/titanes.js', array('jquery'), '1', true);

        /*encolamos los JS*/
        wp_enqueue_script('titanes-js', array('jquery'), true);
        wp_enqueue_script('popover', array('jquery'), true);
        wp_enqueue_script('bootstrap-js', array('jquery'), true);

        wp_enqueue_script('parallax');
        wp_enqueue_script('slider-logos');
    }
}
add_action("wp_enqueue_scripts", "titans_script", 1);




/*titan scripts*/

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

/*zona de widgets*/
function widget_menu_footer()
{
    /*register_sidebar(array('name' => 'Menu Logo y redes sociales', 'id' => 'menu_uno_izquierdo', 'before_widget' => '<div id="%1$S" class="menu-footer">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));

    register_sidebar(array('name' => 'Menu Servicio al cliente', 'id' => 'menu_dos_izquierdo', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));

    register_sidebar(array('name' => 'Menu acerca de la tienda', 'id' => 'menu_uno_derecho', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));

    register_sidebar(array('name' => 'Menu cuatro', 'id' => 'menu_dos_derecho', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));*/
    
    register_sidebar(array('name' => 'Numero WhatsApp', 'id' => 'numero_wsp', 'before_widget' => '<a href="https://api.whatsapp.com/send?phone=', 'after_widget' => '&text=Hola%20Tengo%20una%20consulta." target="_blank">', 'before_title' => '', 'after_title' => ''));

    register_sidebar(array('name' => 'Menu pie pagina', 'id' => 'menu_pie_pagina', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));

    /*register_sidebar(array('name' => 'Banner Mate', 'id' => 'banner_mate', 'before_widget' => '<div id="%1$S" class="wt-full">', 'after_widget' => '</div>', 'before_title' => '<h5 class="">', 'after_title' => '</h5>'));
    
    register_sidebar(array('name' => 'Menu logos footer', 'id' => 'menu_logos', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));*/
}

add_action('widgets_init', 'widget_menu_footer');
/*zona de widgets*/

//Banners
include get_template_directory() . '/assets/modulos/modulo-slider/core-slider.php';
//Historias
include get_template_directory() . '/assets/modulos/modulo-historias/core-historias.php';
//Tutoriales
include get_template_directory() . '/assets/modulos/modulo-tutoriales/core-tutoriales.php';
//Preguntas Frecuentes
include get_template_directory() . '/assets/modulos/modulo-faq/core-faq.php';



//widget wsapp
include get_template_directory() . '/assets/widgets/widget-whatsapp.php';

