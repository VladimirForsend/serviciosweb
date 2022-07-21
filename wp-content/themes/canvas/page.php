<?php
/**
 * The template for displaying all pages
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

if ( is_front_page() ) :
    get_header( 'front' );
else :
    get_header();
endif;?>




 

	<main id="primary" class="site-main container">
	<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
		
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content-page', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
if ( is_front_page() ) :
    get_footer( 'front' );
else :
    get_footer();
endif;?>