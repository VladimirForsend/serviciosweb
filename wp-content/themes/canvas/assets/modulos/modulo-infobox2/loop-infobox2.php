<style>
	<?php include get_template_directory() . '/assets/modulos/modulo-infobox2/infobox2.css'; ?>
</style>
<div id="comercio-beneficios" class="container mt-5">
	<h3 class="service-title text-center">¿Por qué trabajar con nosotros?</h3>
	<div class="small-line mb-5"></div>

	<div class="row">
		<?php $active = true;
		$temp = $wp_query;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$post_per_page = 6; // -1 shows all posts
		$args = array(
			'post_type' => 'beneficios',
			'orderby' => 'date',
			'order' => 'ASC',
			'paged' => $paged,
			'posts_per_page' => $post_per_page
		);
		$wp_query = new WP_Query($args);
		if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<div id="beneficios-empresa" class="col-6">
				<div class="row mb-3">
					<div class="beneficios-icon col-3">
						<?php $imagen = get_field('beneficios_icon_1'); 
							if( !empty( $imagen ) ): ?>
								<img class="imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
							<?php endif; ?>
					</div>
					<div class="beneficios-container col-9">
						<div class="beneficios-text">
							<p class="m-0 pe-5"><?php the_field('texto_1_empresa'); ?></p>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="beneficios-icon col-3">
						<?php $imagen2 = get_field('beneficios_icon_2'); 
							if( !empty( $imagen2 ) ): ?>
								<img class="imagen" src="<?php echo esc_url($imagen2['url']); ?>" alt="<?php echo esc_attr($imagen2['alt']); ?>">
							<?php endif; ?>
					</div>
					<div class="beneficios-container col-9">
						<div class="beneficios-text">
							<p class="m-0 pe-5"><?php the_field('texto_2_empresa'); ?></p>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="beneficios-icon col-3">
						<?php $imagen3 = get_field('beneficios_icon_3'); 
							if( !empty( $imagen3 ) ): ?>
								<img class="imagen" src="<?php echo esc_url($imagen3['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
							<?php endif; ?>
					</div>
					<div class="beneficios-container col-9">
						<div class="beneficios-text">
							<p class="m-0 pe-5"><?php the_field('texto_3_empresa'); ?></p>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="beneficios-icon col-3">
						<?php $imagen4 = get_field('beneficios_icon_4'); 
							if( !empty( $imagen4 ) ): ?>
								<img class="imagen" src="<?php echo esc_url($imagen4['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
							<?php endif; ?>
					</div>
					<div class="beneficios-container col-9">
						<div class="beneficios-text">
							<p class="m-0 pe-5"><?php the_field('texto_4_empresa'); ?></p>
						</div>
					</div>
				</div>
			</div>

			<div id="beneficios-clientes" class="col-6">
				<div class="row mb-3">
					<div class="beneficios-icon col-3">
						<?php $imagen6 = get_field('icon_1'); 
							if( !empty( $imagen6 ) ): ?>
								<img class="imagen" src="<?php echo esc_url($imagen6['url']); ?>" alt="<?php echo esc_attr($imagen6['alt']); ?>">
							<?php endif; ?>
					</div>
					<div class="beneficios-container col-9">
						<div class="beneficios-text">
							<p class="m-0 pe-5"><?php the_field('texto_1_clientes'); ?></p>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="beneficios-icon col-3">
						<?php $imagen7 = get_field('icon_2'); 
							if( !empty( $imagen7 ) ): ?>
								<img class="imagen" src="<?php echo esc_url($imagen7['url']); ?>" alt="<?php echo esc_attr($imagen7['alt']); ?>">
							<?php endif; ?>
					</div>
					<div class="beneficios-container col-9">
						<div class="beneficios-text">
							<p class="m-0 pe-5"><?php the_field('texto_2_clientes'); ?></p>
						</div>
					</div>
				</div>
				<div class="row mb-3">
					<div class="text-start col-12">
						<p class="seniors-text m-0"><?php the_field('titulo_3_clientes'); ?></p>
						<p class="text-purple"><?php the_field('texto_3_clientes'); ?></p>
					</div>
				</div>
			</div>

		<?php endwhile;  ?>
		<?php else : ?>
			<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
		<?php endif;
		wp_reset_query();
		$wp_query = $temp ?>
	</div>
</div>