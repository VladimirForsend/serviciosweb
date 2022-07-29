<style>
    <?php include get_stylesheet_directory() . '/assets/modulos/modulo-posters/posters.css'; ?>
</style>
<script>
    <?php include get_template_directory() . '/assets/modulos/modulo-posters/posters.js'; ?>
</script>

<div id="comercio-poster" class="container pt-4">
	<h4 class="text-center mb-3">Con nuestra plataforma podrás tener un seguimiento activo de tus pedidos</h4>
	<div class="small-line mb-5"></div>

	<div class="row pt-3">

		<?php 
			$active = true;
			$temp = $wp_query;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$post_per_page = 1; // -1 shows all posts
			$args = array(
				'post_type' => 'posters',
				'orderby' => 'date',
				'order' => 'DESC',
				'paged' => $paged,
				'posts_per_page' => $post_per_page
			);
			$wp_query = new WP_Query($args);
		if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
	
		<div class="carousel-plataforma">
			<ul class="carousel-list">
				<?php $imagen = get_field('imagen_plataforma_1');?>
				<li class="carousel-item-plataforma p-0" data-pos="-1" style="background-size:cover;background-image: url('<?php echo esc_url($imagen['url']); ?>')">
					<div class="plataforma mb-0">
						<p class="plataforma-title mb-1"><?php the_field('title_plataforma_1'); ?></p>
						<p class="plataforma-text"><?php the_field('texto_plataforma_1');?></p>
					</div>
				</li>
				<?php $imagen2 = get_field('imagen_plataforma_2');?>
				<li class="carousel-item-plataforma p-0" data-pos="0" style="background-size:cover;background-image: url('<?php echo esc_url($imagen2['url']); ?>')">
					<div class="plataforma mb-0">
						<p class="plataforma-title mb-1"><?php the_field('title_plataforma_2'); ?></p>
						<p class="plataforma-text"><?php the_field('texto_plataforma_2');?></p>
					</div>
				</li>
				<?php $imagen3 = get_field('imagen_plataforma_3');?>
				<li class="carousel-item-plataforma p-0" data-pos="1" style="background-size:cover;background-image: url('<?php echo esc_url($imagen3['url']); ?>')">
					<div class="plataforma mb-0">
						<p class="plataforma-title mb-1"><?php the_field('title_plataforma_3'); ?></p>
						<p class="plataforma-text"><?php the_field('texto_plataforma_3');?></p>
					</div>
				</li>
			</ul>
		</div>

		<?php endwhile; ?>
		<?php else : ?>
			<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
		<?php endif;
			wp_reset_query();
			$wp_query = $temp 
		?>

	</div>
</div>