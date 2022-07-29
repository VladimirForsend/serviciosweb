<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-multibanner2/multibanner2.css'; ?>
</style>

<div id="multibannerb" class="container my-5 pt-5">


    <div class="multibanner-contenedor row">

    <?php
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = -1; // -1 shows all posts
    $args = array(
        'post_type' => 'multibannerb',
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );
    $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


    <div class="col-4">
        <div class="circle-green">
            <img src="" alt="">
        </div>
    </div>
    <div class="col-4">
        <h2 class="titulo-purple"><?php the_field('titulo_pienses_tanto'); ?></h2>
        <div class="circle circle-purple-2">
            <h6 class="titulo-burbuja"><?php the_field('titulo_burbuja_1'); ?></h6>
            <p class="text-burbuja"><?php the_field('texto_burbuja_1'); ?></p>
        </div>
    </div>
    <div class="col-4">
        <div class="circle circle-purple-1">
            <h6 class="titulo-burbuja"><?php the_field('titulo_burbuja_2'); ?></h6>
            <p class="text-burbuja"><?php the_field('texto_burbuja_2'); ?></p>
        </div>
        <div class="circle circle-white">
            <h6 class="titulo-burbuja"><?php the_field('titulo_burbuja_3'); ?></h6>
            <p class="text-burbuja"><?php the_field('texto_burbuja_3'); ?></p>
        </div>
    </div>
    <div class="circle circle-white col-4 mb-3">
        <h6 class="titulo-burbuja"><?php the_field('titulo_burbuja_4'); ?></h6>
        <p class="text-burbuja"><?php the_field('texto_burbuja_4'); ?></p>
    </div>
    <div class="circle circle-purple col-4 mb-3">
        <h6 class="titulo-burbuja"><?php the_field('titulo_burbuja_5'); ?></h6>
        <p class="text-burbuja"><?php the_field('texto_burbuja_5'); ?></p>
    </div>
    <div class="circle circle-white col-4 mb-3">
        <h6 class="titulo-burbuja"><?php the_field('titulo_burbuja_6'); ?></h6>
        <p class="text-burbuja"><?php the_field('texto_burbuja_6'); ?></p>
    </div>

    <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
    <?php endif;
    wp_reset_query();
    $wp_query = $temp ?>
        
    </div>
</div>