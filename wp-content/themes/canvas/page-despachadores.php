<?php

/**
 * Template Name: Pagina Despachadores
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

get_header();
 ?>
<main id="primary" class="">

    <!-- 1.- SLIDER INICIAL -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-slider-3/slider-3.php';
    ?>

    <!-- CAROUSEL LOGOS 2 -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-carrusel-reviews/reviews.php';
    ?>

    <!-- 2.- ServiSeniors ÚNETE -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-boxinfo-3/loop-modulo-boxinfo-3.php';
    ?>

    <!-- 3.- PLANES -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-cards/cards.php';
    ?>

    <!-- 4.- BENEFICIOS -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-infobox2/loop-infobox2.php';
    ?>

    <!-- 7.- NOS HACE DIFERENTES -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-boxinfo-4/loop-modulo-boxinfo-4.php';
    ?>

    <!-- 8.- TESTIMONIOS -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-infobox3/loop-infobox3.php';
    ?>

</main><!-- #main -->

<?php
get_footer();