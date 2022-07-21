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

<div id="SingleAtractivos">

    <?php $imgcabecera = get_field('imagen_cabecera'); ?>
    <header class="header bg-center" style="background-image:url('<?php echo esc_url($imgcabecera['url']); ?>');">
        <div class="container-fluid">
            <div class="row altura-header">
                <div class="d-none d-lg-block col-6"></div>
                <div class="col-12 col-md-8 col-lg-6">
                    <?php $ubicacion = get_field('ubicacion'); if(!empty($ubicacion)){?>
                        <p class="ubicacion"><i class="fas fa-map-marker-alt"></i> <?php the_field('ubicacion'); ?></p>  
                    <?php }; ?>
                    <h1 class="titulo"><?php the_title(); ?></h1>
                    <?php $txtcabecera = get_field('texto_entrada'); if(!empty($txtcabecera)) {?>
                        <div class="texto">
                            <?php the_field('texto_entrada');?>
                        </div>
                    <?php }; ?>
                </div>
            </div>
        </div>
    </header>

    <main class="background-tercero">
        <!-- seccion contenido principal -->
        <section id="SeccionPrincipal" class="container py-3">
            <div class="row">
                <?php $titulo1 = get_field('titulo_uno'); if(!empty($titulo1)) {?>
                    <h2 class="col-12 titulo"><?php the_field('titulo_uno'); ?></h2>    
                <?php }; ?>
                <div id="Desplegables" class="col-12 col-md-6 col-lg-5 mb-4 d-flex flex-column">
                    <!-- desplegables -->
                    <?php $desplegable1 = get_field('nombre_desplegable_uno'); if(!empty($desplegable1)) {?>
                        <button class="boton-desplegable" data-toggle="collapse" data-target="#desplegable1" aria-expanded="true" aria-controls="desplegable1">
                            <?php the_field('nombre_desplegable_uno'); ?>
                        </button>
                        <div id="desplegable1" class="collapse contenido show" data-parent="#Desplegables">
                            <?php the_field('contenido_desplegable_uno'); ?>
                        </div>
                    <?php }; ?>
                    <?php $desplegable2 = get_field('nombre_desplegable_dos'); if(!empty($desplegable2)) {?>
                        <button class="boton-desplegable mt-3" data-toggle="collapse" data-target="#desplegable2" aria-expanded="false" aria-controls="desplegable2">
                            <?php the_field('nombre_desplegable_dos'); ?>
                        </button>
                        <div id="desplegable2" class="collapse contenido" data-parent="#Desplegables">
                            <?php the_field('contenido_desplegable_dos'); ?>
                        </div>
                    <?php }; ?>
                    <?php $desplegable3 = get_field('nombre_desplegable_tres'); if(!empty($desplegable3)) {?>
                        <button class="boton-desplegable mt-3" data-toggle="collapse" data-target="#desplegable3" aria-expanded="false" aria-controls="desplegable3">
                            <?php the_field('nombre_desplegable_tres'); ?>
                        </button>
                        <div id="desplegable3" class="collapse contenido" data-parent="#Desplegables">
                            <?php the_field('contenido_desplegable_tres'); ?>
                        </div>
                    <?php }; ?>
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <div class="row imagenes">
                        <div class="col-12 col-md-6">
                            <?php $imagen1 = get_field('imagen_uno'); if(!empty($imagen1)) {?>
                                <div class="contenedor-imagen-bg big mb-4">
                                    <img class="imagen-bg" src="<?php echo esc_url($imagen1['url']);?>" alt="<?php echo esc_attr($imagen1['alt']);?>">
                                </div>
                            <?php }; ?>
                        </div>
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                            <?php $imagen2 = get_field('imagen_dos'); $link = get_field('videolink'); if(!empty($imagen2)) {?>
                                <a <?php if(!empty($link)) { echo 'href="'.$link.'" target="_blank"'; };?> class="contenedor-imagen-bg small mb-4 video">
                                    <img class="imagen-bg" src="<?php echo esc_url($imagen2['url']);?>" alt="<?php echo esc_attr($imagen2['alt']);?>">
                                    <?php if(!empty($link)) {?>
                                        <img class="playbutton" src="<?php echo get_home_url(); ?>/wp-content/uploads/2022/05/pngegg.png" alt="play">
                                    <?php }; ?>
                                </a>
                            <?php }; ?>
                            <?php $imagen3 = get_field('imagen_tres'); if(!empty($imagen3)) {?>
                                <div class="contenedor-imagen-bg small mb-4">
                                    <img class="imagen-bg" src="<?php echo esc_url($imagen3['url']);?>" alt="<?php echo esc_attr($imagen3['alt']);?>">
                                </div>
                            <?php }; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- seccion contenido secundario -->
        <section id="SeccionSecundaria" class="container py-5">
            <div class="row flex-row-reverse">
                <div class="col-12 col-md-6 col-lg-7">
                    <?php $titulo2 = get_field('titulo_dos'); if(!empty($titulo2)) {?>
                        <h3 class="titulo"><?php the_field('titulo_dos'); ?></h3>    
                    <?php }; ?>
                    <?php 
                    $contenido2 = get_field('contenido_dos'); 
                    $contenido2b = get_field('contenido_dosb');
                    $contenido2c = get_field('contenido_dosc');
                    ?>
                    <div class="container">
                        <div class="row">
                            <?php if(!empty($contenido2) && empty($contenido2b) && empty($contenido2c)) {?>
                                <div class="col-12">
                                    <?php the_field('contenido_dos'); ?>
                                </div>    
                            <?php }else if(!empty($contenido2) && !empty($contenido2b) && empty($contenido2c)){?>
                                <div class="col-6">
                                    <?php the_field('contenido_dos'); ?>
                                </div>  
                                <div class="col-6">
                                    <?php the_field('contenido_dosb'); ?>
                                </div> 
                            <?php }else{ ?>
                                <div class="col-4">
                                    <?php the_field('contenido_dos'); ?>
                                </div>  
                                <div class="col-4">
                                    <?php the_field('contenido_dosb'); ?>
                                </div> 
                                <div class="col-4">
                                    <?php the_field('contenido_dosc'); ?>
                                </div> 
                            <?php }; ?>
                        </div>
                    </div>
                </div>
                <?php $imagensecundaria = get_field('imagen_secundario'); if(!empty($imagensecundaria)) {?>
                    <div class="col-12 col-md-6 col-lg-5 mb-4">
                        <div class="contenedor-imagen-bg imagen-secundaria">
                            <img class="imagen-bg" src="<?php echo esc_url($imagensecundaria['url']);?>" alt="<?php echo esc_attr($imagensecundaria['alt']);?>">
                        </div>
                    </div>
                <?php }; ?>
                <?php $media = get_field('media'); if(!empty($media) && empty($imagensecundaria)) {?>
                    <div class="col-12 col-md-6 col-lg-5 mb-4">
                        <div class="media">
                            <?php the_field('media'); ?>
                        </div>
                    </div>
                <?php }; ?>
            </div>
        </section>
    </main>

</div>

</article><!-- #post -->

<?php //get_sidebar(); ?>