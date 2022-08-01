<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-multibanner6/multibanner6.css'; ?>
</style>

<div id="multiimpacto2" class="container my-5 pt-5">
    <div class="multibanner-contenedor row">

        <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = -1; // -1 shows all posts
        $args = array(
            'post_type' => 'multiimpacto2',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


        <div class="col-6 d-flex justify-content-center align-items-center">
            <?php $image = get_field('imagen_impacto2'); ?>
            <div class="picture-impacto2" style="background-size:cover; background-image: url('<?php echo esc_url($image['url']); ?>')"></div>
        </div>
        <div class="col-6">
            <div class="row p-0 mb-4">
                <div class="circle circle-white col-4">
                    <h6 class="titulo-impacto2"><?php the_field('titulo_burbuja_1'); ?></h6>
                </div>
                <div class="col-8 d-flex justify-content-start align-items-center">
                    <p class="text-impacto2"><?php the_field('texto_burbuja_1'); ?></p>
                </div>
            </div>
            <div class="row p-0 mb-4 ms-5">
                <div class="circle circle-purple-1 col-4">
                    <h6 class="titulo-impacto2"><?php the_field('titulo_burbuja_2'); ?></h6>
                </div>
                <div class="col-8 d-flex justify-content-start align-items-center">
                    <p class="text-impacto2"><?php the_field('texto_burbuja_2'); ?></p>
                </div>
            </div>
            <div class="row p-0 mb-4">
                <div class="circle circle-white col-4">
                    <h6 class="titulo-impacto2"><?php the_field('titulo_burbuja_3'); ?></h6>
                </div>
                <div class="col-8 d-flex justify-content-start align-items-center">
                    <p class="text-impacto2"><?php the_field('texto_burbuja_3'); ?></p>
                </div>
            </div>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
            <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>
        
    </div>
</div>