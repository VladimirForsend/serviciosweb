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

    <!-- 2.- ServiSeniors -->
    <?php
        include get_template_directory() . '/assets/modulos/modulo-boxinfo-3/loop-modulo-boxinfo-3.php';
    ?>

</main><!-- #main -->

<?php
get_footer();