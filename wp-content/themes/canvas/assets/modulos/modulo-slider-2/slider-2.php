<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-slider-2/slider-2.css'; ?>
</style>
<!--Slider-->

<div id="carouselExampleControls2" class="carousel slide col-12" data-ride="carousel" data-interval="5000">

    <div class="carousel-inner">
        <h1 style="
        position: absolute;
        top: 11%;
        left: 10%;
        font-size: 4vw;
        color: #6200ff;
        z-index: 99;
        font-weight: bolder;
        line-height: 1.2;
        padding: 0.5rem 0.5rem 1rem 0;
        ">Generando<br>impacto social<br>en la última<br>milla.</h1>

        <p style="
        position: absolute;
        top: 55%;
        left: 10%;
        z-index: 99;
        color: #1F1F1F;
        line-height: 1.5;
        padding: 0.5rem 1rem 1rem 0;
        font-size: 1vw;
        max-width:40vw;
        ">“A través de la economía colaborativa y la tecnología, conectamos oportunidades laborales flexibles para personas sobre 50 años, quienes hoy tienen grandes dificultades para encontrar oportunidades en el mercado tradicional.”</p>
        <a style="text-decoration: none;" href="#saber-mas"><button class="action-button">Quiero saber más</button></a>

        <?php $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 2; // -1 shows all posts
        $args = array(
            'post_type' => 'slideshow_2',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);

        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="carousel-item <?php if ($active) { print("active"); }; ?>">
                    <?php $active = false; ?>
                    <a class="w-100" <?php $linkslide = get_field('link_del_banner_2'); if(!empty($linkslide)){?>href="<?php the_field('link_del_banner_2'); ?>"<?php }; ?>>

                        <!--imagen mobile-->
                        <?php $image2 = get_field('imagen_mobile_2'); ?>
                        <?php if (!empty($image2)) : ?>
                            <img class="<?php if(!empty($image2)){ ?>d-sm-none<?php }; ?>" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                        <?php endif; ?>

                        <!--imagen escritorio-->
                        <?php $image3 = get_field('imagen_escritorio_2'); ?>
                        <?php if (!empty($image3)) : ?>
                            <img class="<?php if(!empty($image3)){ ?>d-none d-sm-block<?php }; ?>" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>" />
                        <?php endif; ?>
                    </a>
                </div>
                
            <?php endwhile; ?>

        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">siguiente etapa</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Etapa anterior</span>
    </a>
</div>