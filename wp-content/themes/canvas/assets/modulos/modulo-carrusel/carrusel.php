<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-carrusel/carrusel.css'; ?>
</style>

<div id="carrusel" class="container py-5">
    <h3 class="carrusel-titulo text-center">Nuestros despachos en palabras de clientes</h3>
    <div class="small-line mb-5"></div>

    <div class="carrusel-contenedor row pt-5 justify-content-center">
        <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 5; // -1 shows all posts
        $args = array(
            'post_type' => 'carrusel',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


        <div class="carrusel-card col-4 mb-3">
            <a href="<?php the_field('card_link',false,false); ?>" style="text-decoration: none;">  
                <?php $imagen = get_field('card_image'); ?>
                <img class="testimonio-imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                <h6 class="testimonio-name"><?php the_field('card_name'); ?></h6>
                <p class="testimonio-company"><?php the_field('card_company'); ?></p>
                <p class="testimonio-cargo"><?php the_field('card_cargo'); ?></p>
                <div class="row pb-3">
                    <div class="col-1 p-0" style="line-height: 0;">
                        <p class="m-0 text-start comillas">"</p>
                    </div>
                    <div class="col-10 p-0">
                        <p class="m-0 testimonio-text"><?php the_field('card_quote'); ?></p>
                    </div>
                    <div class="col-1 p-0" style="line-height: 2;">
                        <p class="m-0 text-end comillas">"</p>
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