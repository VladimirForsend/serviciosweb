<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>">

	<div class="container mt-0 mt-md-5 mt-lg-3 mb-5 pt-0 pt-md-5 pt-lg-0">

        <?php /*
        $image = get_field('imagen_promocional_carrito'); if (!empty($image)) : ?>
            <a href="<?php the_field('link_de_banner_carrito'); ?>">
                <img class="wt-full" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
        <?php endif; */ ?>

		<header class="">
		    <?php the_title( '<h1 class="titulo-xxl uppercase mb-5">', '</h1>' ); ?>
	    </header><!-- .entry-header --> 

        <div class="container-fluid">
	    	<?php the_content(); ?>
        </div>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
