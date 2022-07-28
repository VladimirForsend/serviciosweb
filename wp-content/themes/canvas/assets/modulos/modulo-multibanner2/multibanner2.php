<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-multibanner2/multibanner2.css'; ?>
</style>

<div id="multibannerb" class="container-fluid">
    <h2 class="multibanner-titulo"><?php the_field('titulo_multibannera'); ?></h2>

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


    <div class="circle-green col-8 mb-3">
        <?php $imagen = get_field('texto_burbuja'); ?>
    </div>

    <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
    <?php endif;
    wp_reset_query();
    $wp_query = $temp ?>
        
    </div>
</div>