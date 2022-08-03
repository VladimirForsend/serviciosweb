<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-carrusel2/carrusel2.css'; ?>
</style>

<div id="carrusel" class="container py-5">
    <h3 class="carrusel-titulo text-center">Nuestros servicios con impacto social</h3>
    <div class="small-line mb-5"></div>

    <div class="carrusel-contenedor row pt-5 justify-content-center">
        <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 1; // -1 shows all posts
        $args = array(
            'post_type' => 'carrusel2',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <div class="carrusel-card col-6 mb-3">
            <a href="<?php the_field('card_link_1',false,false); ?>" style="text-decoration: none;">  
                <?php $imagen = get_field('card_image_1'); ?>
                <img class="testimonio-imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                <div class="col-12 p-4">
                    <h6 class="testimonio-name"><?php the_field('card_title_1'); ?></h6>
                    <div class="row pb-3 m-0">
                        <div class="col-10 p-0">
                            <p class="m-0 testimonio-text"><?php the_field('card_text_1'); ?></p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="carrusel-card col-6 mb-3">
            <a href="<?php the_field('card_link_2',false,false); ?>" style="text-decoration: none;">  
                <?php $imagen = get_field('card_image_2'); ?>
                <img class="testimonio-imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                <h6 class="testimonio-name"><?php the_field('card_title_2'); ?></h6>
                <div class="row pb-3 m-0">
                    <div class="col-10 p-0">
                        <p class="m-0 testimonio-text"><?php the_field('card_text_2'); ?></p>
                    </div>
                </div>
            </a>
            <a href="<?php the_field('card_link_3',false,false); ?>" style="text-decoration: none;">  
                <?php $imagen = get_field('card_image_3'); ?>
                <img class="testimonio-imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                <h6 class="testimonio-name"><?php the_field('card_title_3'); ?></h6>
                <div class="row pb-3 m-0">
                    <div class="col-10 p-0">
                        <p class="m-0 testimonio-text"><?php the_field('card_text_3'); ?></p>
                    </div>
                </div>
            </a>
            <a href="<?php the_field('card_link_4',false,false); ?>" style="text-decoration: none;">  
                <?php $imagen = get_field('card_image_4'); ?>
                <img class="testimonio-imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                <h6 class="testimonio-name"><?php the_field('card_title_4'); ?></h6>
                <div class="row pb-3 m-0">
                    <div class="col-10 p-0">
                        <p class="m-0 testimonio-text"><?php the_field('card_text_4'); ?></p>
                    </div>
                </div>
            </a>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
            <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>
        
    </div>
</div>