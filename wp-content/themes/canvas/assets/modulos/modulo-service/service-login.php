<style>
    <?php include get_stylesheet_directory() . '/assets/modulos/modulo-service/service.css'; ?>
</style>

<div id="moduloservicec" class="container-fluid accordion preguntas-frecuentes px-0 mb-4">
    <div class="row">

    <?php
    $login = 1;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = -1; // -1 shows all posts
    $args = array(
        'post_type' => 'service',
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page,
        'tax_query' => array(
            array(
                'taxonomy' => 'categoria-service',
                'field'    => 'slug',
                'terms'    => 'login',
            ),
        ),
    );
    $wp_query = new WP_Query($args);
    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

    <div class="col-12 elemento">
        <button class="accordion-button collapsed boton" data-toggle="collapse" data-target="#dropc<?php echo $login;?>" aria-expanded="false" aria-controls="dropc<?php echo $i;?>">
            <p class="numero"><?php echo $login; ?>.</p>
            <p class="pregunta"><?php echo get_the_title(); ?></p>
        </button>
        <div id="dropc<?php echo $login;?>" class="accordion-collapse collapse desplegable" data-parent="#moduloservicec">
            <div class="respuesta mb-0"><?php the_field('respuesta');?></div>
        </div>
    </div>

    <?php $login++; ?>

    <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
    <?php endif;
    wp_reset_query();
    $wp_query = $temp ?>

    </div>
</div>