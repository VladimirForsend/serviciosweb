<div id="carrusel_logos" class="container-fluid p-0">
   <!--Slider--> 
   <div class="carousel slide row customer-logos">

         <?php $active = true;
         $temp = $wp_query;
         $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
         $post_per_page = 8; // -1 shows all posts
         $args = array(
            'post_type' => 'carrusel_logos',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
         );
         $wp_query = new WP_Query($args);

         if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


         <?php
         $image = get_field('carrusel_uno_logo');
         if (!empty($image)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
         </div>

         <?php
         $image2 = get_field('carrusel_dos_logo');
         if (!empty($image2)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>">   
            <?php endif; ?>
         </div>

         <?php
         $image3 = get_field('carrusel_tres_logo');
         if (!empty($image3)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image3['url']); ?>" alt="<?php echo esc_attr($image3['alt']); ?>">   
            <?php endif; ?>
         </div>

         <?php
         $image4 = get_field('carrusel_cuatro_logo');
         if (!empty($image4)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image4['url']); ?>" alt="<?php echo esc_attr($image4['alt']); ?>">   
            <?php endif; ?>
         </div>

         <?php
         $image5 = get_field('carrusel_cinco_logo');
         if (!empty($image5)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image5['url']); ?>" alt="<?php echo esc_attr($image5['alt']); ?>">   
            <?php endif; ?>
         </div>

         <?php
         $image6 = get_field('carrusel_seis_logo');
         if (!empty($image6)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image6['url']); ?>" alt="<?php echo esc_attr($image6['alt']); ?>">   
            <?php endif; ?>
         </div>

         <?php
         $image7 = get_field('carrusel_siete_logo');
         if (!empty($image7)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image7['url']); ?>" alt="<?php echo esc_attr($image7['alt']); ?>">   
            <?php endif; ?>
         </div>

         <?php
         $image8 = get_field('carrusel_ocho_logo');
         if (!empty($image8)) : ?>
         <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image8['url']); ?>" alt="<?php echo esc_attr($image8['alt']); ?>">   
            <?php endif; ?>
         </div>

         <?php
         $image9 = get_field('carrusel_nueve_logo');
         if (!empty($image9)) : ?>
          <div class="carrusel-interior slidel">
            <img class="carrusel-logo" src="<?php echo esc_url($image9['url']); ?>" alt="<?php echo esc_attr($image9['alt']); ?>">   
            <?php endif; ?>
         </div>
      <?php endwhile; ?>
         <?php else : ?>
         <?php endif;
      wp_reset_query();
      $wp_query = $temp ?>

   </div>


</div>