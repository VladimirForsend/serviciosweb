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
      
        <!-- CAROUSEL HOME / SECCION 1 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-slider/slider.php';
        ?>

        <!-- EL MEJOR DESPACHO HOME / SECCION 2 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-boxinfo/loop-modulo-boxinfo.php';
        ?>

        <!-- SERVICIOS / SECCION 3 -->
        <?php
            include get_template_directory() . '/assets/modulos/modulo-service/service.php';
        ?>

        <!-- PLATAFORMA MONITOREO -->
        <h4 class="text-center mt-5 mb-5">Con nuestra plataforma podrás tener un seguimiento activo de tus pedidos</h4>

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

        <!-- PLATAFORMA MONITOREO -->
        <h4 class="text-center mt-5 mb-5" style="color:#6200ff;font-size:2rem;">Reportajes</h4>

     
        <?php
        if (have_posts()) :
            if (is_home() && !is_front_page()) :
        ?>

        <?php
            endif;


            /* Start the Loop */
            while (have_posts()) :

                the_post();

                /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                get_template_part('template-parts/content-home-page', get_post_type());

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

 
</main><!-- #main -->

<?php
get_footer();