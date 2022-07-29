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
                get_template_part('template-parts/content-socios', get_post_type());

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

 
</main><!-- #main -->

<?php
get_footer();