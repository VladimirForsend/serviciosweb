<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-boxinfo/modulo-boxinfo.css'; ?>
</style>

<div class="container-fluid contenedor-boxinfo bg-white">
    <?php $active = true;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = 12; // -1 shows all posts
    $args = array(
        'post_type' => 'boxinfo',
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );
    $wp_query = new WP_Query($args);

    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="row m-0">
            <div class="col-12 col-md-6 mx-auto">
                <!--productos destacados-->
                <ul class="py-5 m-0">
                    <a style="background-color:<?php the_field('color_de_fondo_bloque_web');?>;" class="py-5 d-flex justify-content-center align-items-center flex-column" href="<?php the_field('link_layout'); ?>">
                        <figure class="tarjeta-contenedor-boxinfo <?php the_field('display'); ?> <?php the_field('tipo_de_columna'); ?>  <?php the_field('alineacion_de_los_elementos'); ?>" href="<?php the_field('link_layout'); ?>">
                            <img style="z-index: 99;max-width: 350px;" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">
                        </figure>
                    </a>
                </ul>
            </div>
            <div class="col-12 col-md-6 mx-auto d-flex justify-content-start align-items-center">
                <figcaption class="<?php the_field('alinear_texto'); ?>">
                    <h4 style="    
                    font-size: 2.5rem;
                    color: #6300ff;
                    font-weight: bolder;
                    margin-bottom: 1rem;
                    "><?php echo get_the_title(); ?></h4>
                    <p class="boxinfo-text"><?php echo get_the_excerpt(); ?></p>
                    <button class="button-boxinfo"><a style="text-decoration: none;" href="<?php echo esc_url(home_url('/quienes-somos')); ?>">conoce más</a></button>
                </figcaption>
            </div>
        </div>
    <?php
        endwhile;
    endif;
    wp_reset_query();
    $wp_query = $temp ?>
</div>