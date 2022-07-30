<?php

/**
 * Template Name: Pagina de inicio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

get_header('');
 ?>
<!-- ADD PRELOADER -->
<main id="primary" class="">
      
        <!-- SLIDER HOME / SECCION 1 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-slider/slider.php';
        ?>
        <!-- CAROUSEL LOGOS -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-carrusel-logos/carrusel-logos.php';
        ?>

        <!-- EL MEJOR DESPACHO HOME / SECCION 2 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-boxinfo/loop-modulo-boxinfo.php';
        ?>

        <!-- SERVICIOS / SECCION 3 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-service/service.php';
        ?>

        <!-- SEGUIMIENTO DE PEDIDOS -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-posters/loop-posters.php';
        ?>

        <!-- ESTAMOS INTEGRADOS A / SECCION 4 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-multibanner/multibanner.php';
        ?>

        <!-- ¡PARA QUE NO LA PIENSES TANTO! / SECCION 5 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-multibanner2/multibanner2.php';
        ?>
   
        <!-- EN PALABRAS DE CLIENTES / SECCION 5 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-carrusel/carrusel.php';
        ?>

        <!-- REPORTAJES -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-microbox/loop-microbox.php';
        ?>

        <!-- PORQUE TRABAJAR CON NOSOTROS -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-infobox/loop-infobox.php';
        ?>

        <!-- BANNER FOOTER -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-banner/loop-banner.php';
        ?>

</main><!-- #main -->

<?php
get_footer();