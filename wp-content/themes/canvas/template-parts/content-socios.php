<?php

/**
 * Template part for displaying page content in home page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>" class="">

    <!-- Sección 2 Socios -->
    <section id="PaginaSocios" class="background-tercero py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php $titulo = get_field('titulo'); if(!empty($titulo)) {?>
                        <h2 class="titulo mb-3"><?php the_field('titulo'); ?></h2>    
                    <?php }; ?>
                    <?php $subtitulo = get_field('subtitulo'); if(!empty($subtitulo)) {?>
                        <div class="subtitulo"><?php the_field('subtitulo'); ?></div>    
                    <?php }; ?>
                    <div class="mt-4">
                        <!-- modulo socios -->
                        <?php include get_template_directory() . '/assets/modulos/modulo-socios/socios.php'; ?>
                        <!-- fin del modulo socios -->
                    </div>
                </div>
            </div>
        </div>
    </section> 

</article><!-- #post -->

<?php //get_sidebar(); ?>