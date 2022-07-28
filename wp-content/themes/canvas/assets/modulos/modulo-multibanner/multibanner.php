<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-multibanner/multibanner.css'; ?>
</style>

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = 4; // -1 shows all posts
$args = array(
    'post_type' => 'multibanner',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div id="multibanner" class="container">
    <h2 class="multibanner-titulo"><?php the_field('titulo_seccion'); ?></h2>
    <h4 class="multibanner-subtitulo"><?php the_field('subtitulo_seccion'); ?></h4>
    
    <div class="multibanner-contenedor row">

        <div class="row banner mt-5 mb-3">
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen = get_field('logo_plataforma'); 
                    if( !empty( $imagen ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen2 = get_field('logo_plataforma_2'); 
                    if( !empty( $imagen2 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen2['url']); ?>" alt="<?php echo esc_attr($imagen2['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen3 = get_field('logo_plataforma_3'); 
                    if( !empty( $imagen3 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen3['url']); ?>" alt="<?php echo esc_attr($imagen3['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen4 = get_field('logo_plataforma_4');
                    if( !empty( $imagen4 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen4['url']); ?>" alt="<?php echo esc_attr($imagen4['alt']); ?>">
                    <?php endif; ?>
            </a>
        </div>
        <div class="row banner mb-3">
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen5 = get_field('logo_plataforma_5'); 
                    if( !empty( $imagen5 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen5['url']); ?>" alt="<?php echo esc_attr($imagen5['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen6 = get_field('logo_plataforma_6');
                    if( !empty( $imagen6 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen6['url']); ?>" alt="<?php echo esc_attr($imagen6['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen7 = get_field('logo_plataforma_7');
                    if( !empty( $imagen7 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen7['url']); ?>" alt="<?php echo esc_attr($imagen7['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen8 = get_field('logo_plataforma_8'); 
                    if( !empty( $imagen8 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen8['url']); ?>" alt="<?php echo esc_attr($imagen8['alt']); ?>">
                    <?php endif; ?>
            </a>
        </div>
        <div class="row banner mb-3">
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen9 = get_field('logo_plataforma_9');
                    if( !empty( $imagen9 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen9['url']); ?>" alt="<?php echo esc_attr($imagen9['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen10 = get_field('logo_plataforma_10'); 
                    if( !empty( $imagen10 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen10['url']); ?>" alt="<?php echo esc_attr($imagen10['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen11 = get_field('logo_plataforma_11'); 
                    if( !empty( $imagen11 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen11['url']); ?>" alt="<?php echo esc_attr($imagen11['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen12 = get_field('logo_plataforma_12'); 
                    if( !empty( $imagen12 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen12['url']); ?>" alt="<?php echo esc_attr($imagen12['alt']); ?>">
                    <?php endif; ?>
            </a>
        </div>
        <div class="row banner mb-3">
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen13 = get_field('logo_plataforma_13'); 
                    if( !empty( $imagen13 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($image13['url']); ?>" alt="<?php echo esc_attr($imagen13['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen14 = get_field('logo_plataforma_14'); 
                    if( !empty( $imagen14 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen14['url']); ?>" alt="<?php echo esc_attr($imagen14['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen15 = get_field('logo_plataforma_15'); 
                    if( !empty( $imagen15 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen15['url']); ?>" alt="<?php echo esc_attr($imagen15['alt']); ?>">
                    <?php endif; ?>
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen16 = get_field('logo_plataforma_16'); 
                    if( !empty( $imagen16 ) ): ?>
                        <img class="imagen" src="<?php echo esc_url($imagen16['url']); ?>" alt="<?php echo esc_attr($imagen16['alt']); ?>">
                    <?php endif; ?>
            </a>
        </div>
    </div> <!-- END ROW -->
    <div class="multibanner-contenedor row">
        <div class="col-6">
            <div class="row">
                col-6
            </div>
        </div>
        <div class="col-6">

        </div>
    </div>
</div>

<?php endwhile; ?>

<?php else : ?>
    <p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>