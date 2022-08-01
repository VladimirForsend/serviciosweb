<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-multibanner5/multibanner5.css'; ?>
</style>


<div id="multiimpacto" class="container my-5" style="position:relative;">
    <?php
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = 4; // -1 shows all posts
    $args = array(
        'post_type' => 'multiimpacto',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );
    $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <h4 class="text-center mb-3"><?php the_field('titulo_historia'); ?></h4>
    <div class="small-line mb-5"></div>

    <div class="multibanner-contenedor row">
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <div class="circle circle-purple-5">
                <h6 class="titulo-burbuja"><?php the_field('dato_burbuja_1'); ?></h6>
            </div>
            <h6 class="titulo mt-4"><?php the_field('titulo_burbuja_1'); ?></h6>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <div class="circle circle-purple-5">
                <h6 class="titulo-burbuja"><?php the_field('dato_burbuja_2'); ?></h6>
            </div>
            <h6 class="titulo mt-4"><?php the_field('titulo_burbuja_2'); ?></h6>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <div class="circle circle-purple-5">
                <h6 class="titulo-burbuja"><?php the_field('dato_burbuja_3'); ?></h6>
            </div>
            <h6 class="titulo mt-4"><?php the_field('titulo_burbuja_3'); ?></h6>
        </div>
        <div class="col-3 d-flex flex-column justify-content-center align-items-center">
            <div class="circle circle-purple-5">
                <h6 class="titulo-burbuja"><?php the_field('dato_burbuja_4'); ?></h6>
            </div>
            <h6 class="titulo mt-4"><?php the_field('titulo_burbuja_4'); ?></h6>
        </div>

    <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
    <?php endif;
    wp_reset_query();
    $wp_query = $temp ?>
        
    </div>
</div>