<style>
    <?php include get_stylesheet_directory() . '/assets/modulos/modulo-service/service.css'; ?>
</style>

<div id="moduloservice" class="container accordion-servicio px-0 my-5 pb-5">
    <h3 class="service-title text-center">Generamos impacto social con los siguientes servicios</h3>
    <div class="small-line mb-5"></div>

    <div class="row px-5 m-0" style="position:relative;">
        <?php
        $i = 1;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 6; // -1 shows all posts
        $args = array(
            'post_type' => 'service',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page,
        );
        $wp_query = new WP_Query($args);

        
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <div class="service-tabs col-12 p-0">
                <button id="servicioButton" class="accordion-button collapsed boton" data-bs-toggle="collapse" data-bs-target="#drop<?php the_ID(); ?>" aria-expanded="false" aria-controls="drop<?php the_ID(); ?>">
                    <p class="service-tab m-0"><?php echo get_the_title(); ?></p>
                </button>
            </div>

            <div class="tabs-content col-8 p-0" style="background-color:#ffffff;position:absolute;right:0;z-index:999;">
                <div class="row">
                    <div id="drop<?php the_ID(); ?>" class="accordion-collapse collapse" data-bs-parent="#moduloservice">
                        <!-- foto servicio -->
                        <div class="row">
                            <div class="col-6 p-0">
                                <?php $imagen = get_field('foto_servicio'); 
                                if( !empty( $imagen ) ): ?>
                                    <img class="imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']);?>">
                                <?php endif; ?>
                            </div>
                            <!-- texto servicio -->
                            <div class="col-6 p-0" style="position: relative;">
                                <div class="servicio mb-0">
                                    <?php $imagen2 = get_field('icono_servicio'); 
                                    if( !empty( $imagen2 ) ): ?>
                                        <img class="imagen" style="max-width:100px;" src="<?php echo esc_url($imagen2['url']); ?>" alt="<?php echo esc_attr($imagen2['alt']);?>">
                                    <?php endif; ?>
                                    <p class="service-subtitle mb-1"><?php echo get_the_title(); ?></p>
                                    <?php the_field('servicio');?>
                                </div>
                            </div>
                        </div>
                    </div>
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