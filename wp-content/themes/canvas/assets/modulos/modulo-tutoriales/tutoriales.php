<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-slider/slider.css'; ?>
</style>

<!--Slider-->

<div id="carruselSuperior" class="carousel slide" data-ride="carousel" data-interval="3000">
<div class="carousel-inner ajustar-slider">

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; // -1 shows all posts
$args = array(
    'post_type' => 'slideshow_one',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="carousel-item <?php if($i == 0){ echo "active"; };?>">
<?php $linkslider = get_field('link_slider'); $slideralign = get_field('alineacion_slider'); ?>
<a class="contenedor-imagen-bg wt-full height-full" <?php if(!empty($linkslider)){?>href="<?php the_field('link_slider',false,false);?>"<?php }; ?>>
<?php $imagecarrusel1 = get_field('imagen_slider_uno'); $imagecarrusel2 = get_field('imagen_slider_dos'); ?>
<img class="<?php if(!empty($imagecarrusel2)){ ?> d-none d-md-block <?php }; ?> imagen-bg" src="<?php echo esc_url($imagecarrusel1['url']); ?>" alt="<?php echo esc_attr($imagecarrusel1['alt']); ?>">
<?php if(!empty($imagecarrusel2)) {?>
    <img class="d-block d-md-none imagen-bg" src="<?php echo esc_url($imagecarrusel2['url']); ?>" alt="<?php echo esc_attr($imagecarrusel2['alt']); ?>">
<?php }; ?>
<div class="arrow">
    <img class="" src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/01/flecha.png" alt="ver más">
</div>
</a>

<?php $i++; ?>
</div>

<?php endwhile; ?>

<a class="carousel-control-prev" href="#carruselSuperior" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon control-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carruselSuperior" role="button" data-slide="next">
    <span class="carousel-control-next-icon control-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>

<?php else : ?>
<p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>

</div>
</div>