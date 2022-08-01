<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-boxinfo-2/modulo-boxinfo-2.css'; ?>
</style>

<div class="container-fluid contenedor-boxinfo bg-white">
    <?php $active = true;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = 12; // -1 shows all posts
    $args = array(
        'post_type' => 'boxinfo_2',
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );
    $wp_query = new WP_Query($args);

    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="row">
            <div class="col-12 col-md-6 mx-auto">
                <!--productos destacados-->
                <ul class="py-5 m-0">
                    <a style="background-color:<?php the_field('color_de_fondo_bloque_web');?>;" class="py-5 d-flex justify-content-center align-items-center flex-column">
                        <figure class="tarjeta-contenedor-boxinfo" >
                            <img style="z-index: 99;max-width: 450px;" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">
                        </figure>
                    </a>
                </ul>
            </div>
            <div class="col-12 col-md-6 mx-auto d-flex justify-content-start align-items-center">
                <figcaption class="">
                    <h4 style="    
                    font-size: 2rem;
                    color: #6200ff;
                    font-weight: bolder;
                    margin-bottom: 1rem;
                    max-width: 500px;
                    "><?php the_field('titulo_proposito'); ?></h4>
                    <p class="boxinfo-text"><?php the_field('texto_proposito'); ?></p>
                </figcaption>
            </div>
        </div>
    <?php
        endwhile;
    endif;
    wp_reset_query();
    $wp_query = $temp ?>
</div>