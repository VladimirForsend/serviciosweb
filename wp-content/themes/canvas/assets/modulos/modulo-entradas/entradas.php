<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-entradas/entradas.css'; ?>
</style>

<!--Socios-->
<div id="ModuloEntradas" class="container px-0">
<div class="row">

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$entradas = -1;
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $entradas
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<?php $subtitulo = get_field('subtitulo'); ?>

<div class="col-12 col-md-6 col-lg-3 mb-4 h-100">
    <a href="<?php the_permalink();?>" class="tarjeta h-100">
        <div class="thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="texto h-100">
            <div class="h-100 d-flex flex-column justify-content-between">
                <?php if(!empty($subtitulo)) {?>
                    <div class="subtitulo">
                        <?php the_field('subtitulo'); ?>
                    </div>
                <?php }; ?>
                <h3 class="tarjeta-titulo"><?php the_title(); ?></h3>
                <div class="tarjeta-texto">
                    <?php echo get_the_excerpt(); ?>
                </div>
            </div>
            <p class="boton">Leer Más +</p>
        </div>
    </a>
</div>

<?php endwhile; ?>

<?php else : ?>
    <p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
	
</div>
</div>