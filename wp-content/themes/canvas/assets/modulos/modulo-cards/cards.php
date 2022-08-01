<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-cards/cards.css'; ?>
</style>

<div id="cards" class="container py-5">
    <h3 class="cards-titulo text-center">¿Cuánto podrías ganar despanchado?</h3>
    <div class="small-line mb-5"></div>

    <div class="cards-contenedor row justify-content-center">
        <?php
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = 5; // -1 shows all posts
        $args = array(
            'post_type' => 'cards',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


        <div class="cards-card col-3 mb-3">
            <?php $imagen = get_field('card_image'); ?>
            <div class="white-circle">
                <img class="plan-imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
            </div>
            <h5 class="plan-title"><?php the_field('plan_title'); ?></h5>
            <div class="row pb-2">
                <div class="col-12">
                    <p class="plan-name">3 veces por semana</p>
                    <p class="plan-cargo"><?php the_field('plan_cargo_1'); ?></p>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-12">
                    <p class="plan-name">Lunes a Viernes</p>
                    <p class="plan-cargo"><?php the_field('plan_cargo_2'); ?></p>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-12">
                    <p class="plan-name">Lunes a Sábado</p>
                    <p class="plan-cargo-max"><?php the_field('plan_cargo_3'); ?></p>
                </div>
            </div>
            <a href="<?php the_field('card_link',false,false); ?>" style="text-decoration: none;">
                <button class="card-button">Conoce los Modelos</button>
            </a>
            <p class="card-note">*Ingreso bruto: Debes descontar el impuesto a honorario. Si tienes una empresa con giro de transporte de carga, este valor es +IVA.</p>
        </div>

        <?php endwhile; ?>
        <?php else : ?>
            <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>
        
    </div>
</div>