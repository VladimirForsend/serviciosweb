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

    <main id="PaginaSomos">
        <?php $imagen = get_field('imagen'); ?>
        <section id="SeccionUno" class="background-tercero py-5 bg-center" style="background-image:url('<?php echo esc_url($imagen['url']);?>');">
            <div class="container">
                <div class="row entrada">
                    <div class="d-none d-md-block col-6 col-lg-5"></div>
                    <div class="col-12 col-md-6 col-lg-7 d-flex flex-column justify-content-center color-white">
                        <?php $titulo1 = get_field('titulo'); if(!empty($titulo1)) {?>
                            <h1 class="titulo"><?php the_field('titulo'); ?></h1>
                        <?php }; ?>
                        <?php $texto = get_field('texto'); if(!empty($texto)) {?>
                            <div class="texto"><?php the_field('texto'); ?></div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="SeccionDos" class="py-5">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12">
                        <?php $titulo2 = get_field('titulo_dos'); if(!empty($titulo2)) {?>
                            <h1 class="titulo"><?php the_field('titulo_dos'); ?></h1>
                        <?php }; ?>
                        <?php $contenido = get_field('contenido'); if(!empty($contenido)) {?>
                            <div class="texto"><?php the_field('contenido'); ?></div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
            <?php $banner = get_field('banner'); if(!empty($banner)) {?>
                <div class="contenedor-imagen-bg banner mb-5">
                    <img class="imagen-bg" src="<?php echo esc_url($banner['url']);?>" alt="<?php echo esc_attr($banner['alt']);?>">
                </div>
            <?php }; ?>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 mb-4">
                        <?php $contenido2 = get_field('contenido_dos'); if(!empty($contenido2)) {?>
                            <div class="texto"><?php the_field('contenido_dos'); ?></div>
                        <?php }; ?>
                    </div>
                    <div class="col-12 col-md-6 mb-4">
                        <?php $contenido3 = get_field('contenido_tres'); if(!empty($contenido3)) {?>
                            <div class="texto"><?php the_field('contenido_tres'); ?></div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>

</article><!-- #post -->

<?php //get_sidebar(); ?>