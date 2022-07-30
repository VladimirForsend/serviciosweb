<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-banner/banner.css'; ?>
</style>
<div id="comercio-banner" class="container-fluid p-0">
	<div class="row p-0 m-0">
		<div class="col-12 col-md-12 p-0">
			<?php $active = true;
			$temp = $wp_query;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$post_per_page = 1; // -1 shows all posts
			$args = array(
				'post_type' => 'banner',
				'orderby' => 'date',
				'order' => 'ASC',
				'paged' => $paged,
				'posts_per_page' => $post_per_page
			);
			$wp_query = new WP_Query($args);
			if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<div class="banner_area-home col-12 col-md-12">
					<!--foto banner home-->
					<div class="foto-banner" style="height:600px;background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
						<div class="col-6 d-flex flex-column justify-content-center align-items-start ps-5" style="height:100%;">
							<h2 class="banner-footer-title ms-5">Mejora tus niveles de servicio y genera impacto social.</h2>
							<p class="banner-footer-text ms-5">Súmate y comienza a despachar buenas experiencias</p>
							<a class="ms-5" style="text-decoration: none;" href=""><button class="banner-footer-button">Quiero que me contacten</button></a>
						</div>
					</div>
					<!--foto banner home-->
				</div>
			<?php endwhile; ?>
			<?php  else : ?>
				<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
			<?php endif;
			wp_reset_query();
			$wp_query = $temp ?>
		</div>
	</div>
</div>