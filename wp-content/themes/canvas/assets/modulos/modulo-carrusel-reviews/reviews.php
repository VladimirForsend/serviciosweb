<div id="carrusel_reviews" class="container-fluid p-0">
   <!--Slider--> 
   <div class="carousel slide row customer-reviews">

         <?php $active = true;
         $temp = $wp_query;
         $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         $post_per_page = 8; // -1 shows all posts
         $args = array(
            'post_type' => 'carrusel_reviews',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
         );
         $wp_query = new WP_Query($args);

         if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


         <?php
         $image = get_field('foto_review_1');
         if (!empty($image)) : ?>
         <div class="carrusel-interior reviews row">
            <div class="col-4">
               <img class="carrusel-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
            <div class="col-8">
               <p class="m-0"><?php the_field('nombre_review_1'); ?></p>
               <p class="m-0"><?php the_field('texto_review_1'); ?></p>
            </div>
            <?php endif; ?>
         </div>

         <?php
         $image2 = get_field('foto_review_2');
         if (!empty($image2)) : ?>
         <div class="carrusel-interior reviews row">
            <div class="col-4">
               <img class="carrusel-logo" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">   
            </div>
            <div class="col-8">
               <p class="m-0"><?php the_field('nombre_review_2'); ?></p>
               <p class="m-0"><?php the_field('texto_review_2'); ?></p>
            </div>
            <?php endif; ?>
         </div>

         <?php
         $image3 = get_field('foto_review_3');
         if (!empty($image3)) : ?>
         <div class="carrusel-interior reviews row">
            <div class="col-4">
               <img class="carrusel-logo" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>">   
            </div>
            <div class="col-8">
               <p class="m-0"><?php the_field('nombre_review_3'); ?></p>
               <p class="m-0"><?php the_field('texto_review_3'); ?></p>
            </div>
            <?php endif; ?>
         </div>

         <?php
         $image4 = get_field('foto_review_4');
         if (!empty($image4)) : ?>
         <div class="carrusel-interior reviews row">
            <div class="col-4">
               <img class="carrusel-logo" src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>">   
            </div>
            <div class="col-8">
               <p class="m-0"><?php the_field('nombre_review_4'); ?></p>
               <p class="m-0"><?php the_field('texto_review_4'); ?></p>
            </div>
            <?php endif; ?>
         </div>

         <?php
         $image5 = get_field('foto_review_5');
         if (!empty($image5)) : ?>
         <div class="carrusel-interior reviews row">
            <div class="col-4">
               <img class="carrusel-logo" src="<?php echo esc_url($image5['url']); ?>" alt="<?php echo esc_attr($image5['alt']); ?>">   
            </div>
            <div class="col-8">
               <p class="m-0"><?php the_field('nombre_review_5'); ?></p>
               <p class="m-0"><?php the_field('texto_review_5'); ?></p>
            </div>
            <?php endif; ?>
         </div>

		<?php endwhile; ?>
			<?php  else : ?>
				<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
			<?php endif;
			wp_reset_query();
      $wp_query = $temp ?>

   </div>


</div>