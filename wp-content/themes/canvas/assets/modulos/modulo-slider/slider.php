<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-slider/slider.css'; ?>
</style>
<!--Slider-->

<div id="carouselExampleControls" class="carousel slide col-12" data-ride="carousel" data-interval="5000">

    <div class="carousel-inner">
        <h1 style="
        position: absolute;
        top: 15%;
        left: 10%;
        font-size: 4vw;
        color: white;
        z-index: 99;
        font-weight: bolder;
        line-height: 1.2;
        padding: 0.5rem 0.5rem 1rem 0;
        ">Despachamos<br> buenas<br> experiencias</h1>

        <h3 style="
        position: absolute;
        top: 53%;
        left: 10%;
        color: white;
        z-index: 99;
        background-color: #6200ff;
        line-height: 1.5;
        padding: 0.5rem 1rem 1rem 0;
        font-size: 2vw;
        ">99% de efectividad en las entregas<br/> Somos el primer Last mile con propósito</h3>
        <a style="text-decoration: none;" href=""><button class="action-button">Comenzar a despachar</button></a>
        
        <?php 
        $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 5; // -1 shows all posts
        $args = array(
            'post_type' => 'slideshow',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);

        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                <div class="carousel-item <?php if ($active) { print("active"); }; ?>">
                    <?php $active = false; ?>
                    <a class="w-100" <?php $linkslide = get_field('link_del_banner'); if(!empty($linkslide)){?>href="<?php the_field('link_del_banner'); ?>"<?php }; ?>>
                        <!--imagen mobile-->
                        <?php $image = get_field('imagen_mobile'); 
                        if (!empty($image)) : ?>
                            <img class="<?php if(!empty($image2)){ ?>d-sm-none<?php }; ?>" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <!--imagen escritorio-->
                        <?php $image2 = get_field('imagen_escritorio');
                        if (!empty($image2)) : ?>
                            <img class="<?php if(!empty($image)){ ?>d-none d-sm-block<?php }; ?>" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                        <?php endif; ?>
                    </a>
                </div>
                
            <?php endwhile; ?>

        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">siguiente etapa</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Etapa anterior</span>
    </a>
</div>