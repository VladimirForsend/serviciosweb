<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-boxinfo-3/modulo-boxinfo-3.css'; ?>
</style>

<div class="container-fluid contenedor-boxinfo bg-white">
    <?php $active = true;
    $temp = $wp_query;
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $post_per_page = 12; // -1 shows all posts
    $args = array(
        'post_type' => 'boxinfo_3',
        'orderby' => 'date',
        'order' => 'ASC',
        'paged' => $paged,
        'posts_per_page' => $post_per_page
    );
    $wp_query = new WP_Query($args);

    if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="row">
            <div class="col-12 col-md-6 ms-auto d-flex justify-content-end align-items-center">
                <figcaption class="<?php the_field('alinear_texto'); ?>">
                    <h4 style="    
                    font-size: 2.5rem;
                    color: #6200ff;
                    font-weight: bolder;
                    margin-bottom: 1rem;
                    "><?php echo get_the_title(); ?></h4>
                    <p class="boxinfo-text"><?php echo get_the_excerpt(); ?></p>
                    <ul class="list-senior p-0 m-0">
                        <p style="font-size: 1rem;">¡Postula con nosotros! Si tienes:</p> 
                        <li>Un citycar, sedán, suv, furgón</li>
                        <li>Un teléfono con internet</li>
                        <li>Iniciación de actividades en el sii.cl</li>
                    </ul>
                </figcaption>
            </div>
            <div class="col-12 col-md-6 mx-auto">
                <!--productos destacados-->
                <ul class="py-5 m-0">
                    <a style="background-color:<?php the_field('color_de_fondo_bloque_web');?>;" class="py-5 d-flex justify-content-center align-items-center flex-column" href="<?php the_field('link_layout'); ?>">
                        <figure class="tarjeta-contenedor-boxinfo <?php the_field('display'); ?> <?php the_field('tipo_de_columna'); ?>  <?php the_field('alineacion_de_los_elementos'); ?>" href="<?php the_field('link_layout'); ?>">
                            <img style="z-index: 99;max-width: 350px;" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php echo get_the_title(); ?>">
                        </figure>
                    </a>
                </ul>
            </div>
        </div>

    <?php endwhile; ?>
    <?php else : ?>
        <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
    <?php endif;
        wp_reset_query();
        $wp_query = $temp 
    ?>
</div>