<?php

/**
 * Template Name: Pagina Quiénes Somos
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
          include get_template_directory() . '/assets/modulos/modulo-slider-2/slider-2.php';
     ?>

     <!-- 2.- ServiSeniors -->
     <?php
          include get_template_directory() . '/assets/modulos/modulo-boxinfo-2/loop-modulo-boxinfo-2.php';
     ?>

     <!-- 3.- HISTORIA -->
     <?php
          include get_template_directory() . '/assets/modulos/modulo-multibanner4/multibanner4.php';
     ?>

     <!-- 4.- OTROS SERVICIOS -->

     <!-- 5.- IMPACTO SOCIAL A LA FECHA -->
     <?php
          include get_template_directory() . '/assets/modulos/modulo-multibanner5/multibanner5.php';
     ?>

     <!-- 6.- IMPACTO A LOS SENIORS -->
     <?php
          include get_template_directory() . '/assets/modulos/modulo-multibanner6/multibanner6.php';
     ?>

     <!-- 7.- REPORTAJES -->
     <?php
          include get_template_directory() . '/assets/modulos/modulo-microbox-2/loop-microbox-2.php';
     ?>

     <!-- 8.- PREMIOS Y RECONOCIMIENTOS -->
     <?php
          include get_template_directory() . '/assets/modulos/modulo-microbox-3/loop-microbox-3.php';
     ?>

     <!-- 9.- BANNER FOOTER -->
     <?php
          include get_template_directory() . '/assets/modulos/modulo-banner/loop-banner.php';
     ?>

</main><!-- #main -->

<?php
get_footer();