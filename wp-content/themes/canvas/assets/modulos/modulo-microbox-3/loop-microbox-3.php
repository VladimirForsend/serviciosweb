<style>
	<?php include get_template_directory() . '/assets/modulos/modulo-microbox_3/microbox_3.css'; ?>
</style>

<div id="premios" class="container py-5">
	<h3 class="service-title text-center">premios</h3>
	<div class="small-line mb-5"></div>

	<div class="row">
		<div class="col-12 col-md-12 mt-3 m-0 p-0">
			<div class="row justify-content-center">
				<?php $active = true;
				$temp = $wp_query;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$post_per_page = 6; // -1 shows all posts
				$args = array(
					'post_type' => 'microbox_3',
					'orderby' => 'date',
					'order' => 'ASC',
					'paged' => $paged,
					'posts_per_page' => $post_per_page
				);
				$wp_query = new WP_Query($args);
				if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

						<div class="text-center col-2 mb-3">
							<a href="<?php echo get_field('link_reportaje'); ?>" target="_blank">
								<?php $reportaje = get_field('imagen_reportaje'); 
									if( !empty( $reportaje ) ): ?>
										<img class="imagen" style="height:120px;" src="<?php echo esc_url($reportaje['url']); ?>" alt="<?php echo esc_attr($reportaje['alt']);?>">
								<?php endif; ?>
							</a>
						</div><!-- .banner_area home -->

				<?php $i++; ?>

				<?php endwhile;?>
				<?php else : ?>
					<p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
				<?php endif;
				wp_reset_query();
				$wp_query = $temp ?>
			</div>
		</div>

	</div>
</div>