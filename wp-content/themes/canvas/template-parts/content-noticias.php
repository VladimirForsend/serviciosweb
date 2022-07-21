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

    <main id="PaginaNoticias">
        <!-- Sección 1 Atractivos -->
        <section id="SeccionAtract" class="container py-5">
            <div class="row">
                <div class="col-12">
                    <?php $titulo1 = get_field('titulo'); if(!empty($titulo1)) {?>
                        <h2 class="titulo"><?php the_field('titulo'); ?></h2>    
                    <?php }; ?>
                    <?php $subtitulo1 = get_field('subtitulo'); if(!empty($subtitulo1)) {?>
                        <div class="subtitulo"><?php the_field('subtitulo'); ?></div>    
                    <?php }; ?>
                    <div class="mt-4">
                        <!-- slider de atractivos cercanos -->
                        <?php include get_template_directory() . '/assets/modulos/modulo-entradas/entradas.php'; ?>
                        <!-- fin del slider de atractivos cercanos -->
                    </div>
                </div>
            </div>
        </section> 
    </main>

</article><!-- #post -->

<?php //get_sidebar(); ?>