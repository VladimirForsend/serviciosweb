<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-faq/faq.css'; ?>
</style>

<div id="modulo-dropdown" class="container-fluid accordion px-0 mb-4">
    <div class="row">

    <?php
    $i = 1;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = -1; // -1 shows all posts
    $args = array(
        'post_type' => 'faq',
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );
    $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="col-12">
        <button class="accordion-button collapsed boton" data-toggle="collapse" data-target="#drop<?php echo $i;?>" aria-expanded="false" aria-controls="drop<?php echo $i;?>">
            <?php echo get_the_title(); ?>
        </button>
        <div id="drop<?php echo $i;?>" class="accordion-collapse collapse desplegable" data-parent="#modulo-dropdown">
            <div class="respuesta mb-0"><?php the_field('respuesta');?></div>
        </div>
    </div>

    <?php $i++; ?>

    <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
    <?php endif;
    wp_reset_query();
    $wp_query = $temp ?>

    </div>
</div>