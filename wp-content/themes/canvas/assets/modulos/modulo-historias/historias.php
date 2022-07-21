<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-historias/historias.css'; ?>
</style>

<!-- Cards -->

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; // -1 shows all posts
$args = array(
    'post_type' => 'historias',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>



<?php endwhile; ?>

<?php else : ?>
<p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>