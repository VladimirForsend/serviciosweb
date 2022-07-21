<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecommerce
 */

?>

<article id="post-<?php the_ID(); ?>" class="">

<div id="SinglePost">
    <header class="">
        <div class="bg-news py-5" style="background:linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ),url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>') no-repeat fixed center;">
            <div class="container">
                <div class="row entrada">
                    <div class="d-none d-md-block col-6 col-lg-5"></div>
                    <div class="col-12 col-md-6 col-lg-7 d-flex flex-column justify-content-center color-white">
                        <h1 class="titulo"><?php the_title(); ?></h1>
                        <?php $subtitulo = get_field('subtitulo'); if(!empty($subtitulo)) {?>
                            <div class="texto"><?php the_field('subtitulo'); ?></div>
                        <?php }; ?>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- .entry-header -->

    <?php /*<div class="container py-5">
        <?php the_content(); ?>
    </div> */ ?>

    <section id="ContentPost" class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10"> 
                <div class="contenido">
                    <?php the_field('contenido_uno'); ?>
                </div>
                <?php $imagen1 = get_field('imagen_uno'); if(!empty($imagen1)) {?>
                    <div class="contenedor-imagen-bg">
                        <img class="imagen-bg" src="<?php echo esc_url($imagen1['url']); ?>" alt="<?php echo esc_attr($imagen1['alt']); ?>">
                    </div> 
                <?php }; ?>
                <div class="contenido">
                    <?php the_field('contenido_dos'); ?>
                </div>
                <?php $imagen2 = get_field('imagen_dos'); if(!empty($imagen2)) {?>
                    <div class="contenedor-imagen-bg">
                        <img class="imagen-bg" src="<?php echo esc_url($imagen2['url']); ?>" alt="<?php echo esc_attr($imagen2['alt']); ?>"> 
                    </div>   
                <?php }; ?>
                <div class="contenido">
                    <?php the_field('contenido_tres'); ?>
                </div>
            </div>
            <div class="col-12 col-md-10 topline">
                <?php $link = get_field('link'); if(!empty($link)) {?> 
                    <a class="d-inline-block" href="<?php the_field('link',false,false); ?>" target="_blank">
                        <div class="boton"><?php the_field('link_name'); ?></div>
                    </a>    
                <?php }; ?>
            </div>
        </div>
    </section>

    <footer class="entry-footer">
    </footer><!-- .entry-footer -->
</div>

</article><!-- #post-<?php the_ID(); ?> -->
