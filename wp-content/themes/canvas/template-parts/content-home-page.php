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

    <div id="paginahome" class="">
        <!-- seccion video de entrada -->
        <?php $seccionentrada = get_field('seccion_entrada'); if(empty($seccionentrada)) {?>
            <section id="seccionentrada" class="container-fluid mb-5">
                <div class="row flex-row-reverse">
                    <div class="col-12 col-lg-8 video">
                        <?php the_field('video_entrada'); ?>
                    </div>
                    <div class="col-12 col-lg-4 contenido">
                        <?php $tituloentrada = get_field('titulo_entrada'); if(!empty($tituloentrada)) {?>
                            <h2 class="titulo"><?php the_field('titulo_entrada'); ?></h2>
                        <?php }; ?>
                        <?php $textoentrada = get_field('texto_entrada'); if(!empty($textoentrada)) {?>
                            <div class="texto-general color-white">
                                <?php the_field('texto_entrada'); ?>
                            </div>
                        <?php }; ?>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <!-- seccion video de entrada -->
        <!-- seccion historias de cambios -->
        <?php $seccionhistorias = get_field('seccion_historias'); if(empty($seccionhistorias)) {?>
            <section id="seccionhistorias" class="container mb-5">
                <div class="row">
                    <div class="col-12 decoline">
                        <?php $titulohistorias = get_field('titulo_historias'); if(!empty($titulohistorias)) {?>
                            <h2 class="titulo-general background-tercero"><?php the_field('titulo_historias'); ?></h2>
                        <?php }; ?>
                    </div>
                    <div class="col-12">
                        <?php $textohistorias = get_field('texto_historias'); if(!empty($textohistorias)) {?>
                            <div class="texto-general">
                                <?php the_field('texto_historias'); ?>
                            </div>
                        <?php }; ?>
                    </div>
                    <div class="col-12">
                        <!-- custom loop de historias de cambios -->
                        <?php include get_template_directory() . '/assets/modulos/modulo-historias/historias.php'; ?>
                    </div>
                    <div class="col-12 text-center">
                        <!-- boton ver mas -->
                        <?php $linkhistorias = get_field('link_historias'); if(!empty($linkhistorias)) {?>
                            <a class="link-general" href="<?php the_field('link_historias',false,false); ?>">
                                <div class="boton-general"><?php the_field('boton_historias'); ?></div>
                            </a>    
                        <?php }; ?>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <!-- seccion historias de cambios -->
        <!-- seccion noticias -->
        <?php $seccionnoticias = get_field('seccion_noticias'); if(empty($seccionnoticias)) {?>
            <section id="seccionnoticias" class="container mb-5">
                <div class="row">
                    <div class="col-12 decoline">
                        <?php $titulonoticias = get_field('titulo_noticias'); if(!empty($titulonoticias)) {?>
                            <h2 class="titulo-general background-cuarto"><?php the_field('titulo_noticias'); ?></h2>
                        <?php }; ?>
                    </div>
                    <div class="col-12">
                        <?php $textonoticias = get_field('texto_noticias'); if(!empty($textonoticias)) {?>
                            <div class="texto-general">
                                <?php the_field('texto_noticias'); ?>
                            </div>
                        <?php }; ?>
                    </div>
                    <div class="col-12">
                        <!-- custom loop de noticias -->
                        <?php include get_template_directory() . '/assets/modulos/modulo-entradas/entradas.php'; ?>
                    </div>
                    <div class="col-12 text-center">
                        <!-- boton ver mas -->
                        <?php $linknoticias = get_field('link_noticias'); if(!empty($linknoticias)) {?>
                            <a class="link-general" href="<?php the_field('link_noticias',false,false); ?>">
                                <div class="boton-general"><?php the_field('boton_noticias'); ?></div>
                            </a>    
                        <?php }; ?>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <!-- seccion noticias -->
        <!-- seccion tutoriales -->
        <?php $secciontutoriales = get_field('seccion_tutoriales'); if(empty($secciontutoriales)) {?>
            <section id="secciontutoriales" class="container mb-5">
                <div class="row">
                    <div class="col-12 decoline">
                        <?php $titulotutoriales = get_field('titulo_tutoriales'); if(!empty($titulotutoriales)) {?>
                            <h2 class="titulo-general background-quinto"><?php the_field('titulo_tutoriales'); ?></h2>
                        <?php }; ?>
                    </div>
                    <div class="col-12">
                        <?php $textotutoriales = get_field('texto_tutoriales'); if(!empty($textotutoriales)) {?>
                            <div class="texto-general">
                                <?php the_field('texto_tutoriales'); ?>
                            </div>
                        <?php }; ?>
                    </div>
                    <div class="col-12">
                        <!-- custom loop de tutoriales -->
                        <?php include get_template_directory() . '/assets/modulos/modulo-tutoriales/tutoriales.php'; ?>
                    </div>
                    <div class="col-12 text-center">
                        <!-- boton ver mas -->
                        <?php $linktutoriales = get_field('link_tutoriales'); if(!empty($linktutoriales)) {?>
                            <a class="link-general" href="<?php the_field('link_tutoriales',false,false); ?>">
                                <div class="boton-general"><?php the_field('boton_tutoriales'); ?></div>
                            </a>    
                        <?php }; ?>
                    </div>
                </div>
            </section>
        <?php }; ?>
        <!-- seccion tutoriales -->
        <!-- seccion centro de recursos -->
        <?php $seccionrecursos = get_field('seccion_recursos'); if(empty($seccionrecursos)) {?>
            <section id="seccionrecursos" class="container mb-5">
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="row mx-0">
                            <div class="col-12 col-md-5 contenido">
                                <?php $iconorecursos = get_field('icono_recursos'); if(!empty($iconorecursos)) {?>
                                    <img class="icono" src="<?php echo esc_url($iconorecursos['url']); ?>" alt="<?php echo esc_attr($iconorecursos['alt']); ?>"> 
                                <?php }; ?>
                                <?php $titulorecursos = get_field('titulo_recursos'); if(!empty($titulorecursos)) {?>
                                    <h2 class="titulo"><?php the_field('titulo_recursos'); ?></h2>
                                <?php }; ?>
                            </div>
                            <div class="col-12 col-md-7">
                                <?php $textorecursos = get_field('texto_recursos'); if(!empty($textorecursos)) {?>
                                    <div class="texto">
                                        <?php the_field('texto_recursos'); ?>
                                    </div>
                                <?php }; ?>
                            </div>
                        </div>
                    </div>
                    <?php $suscribirrecursos = get_field('suscribir_recursos'); if(!empty($suscribirrecursos)) {?>
                        <div class="col-12 suscribir">
                            <?php the_field('suscribir_recursos'); ?>
                        </div>
                    <?php }; ?>
                </div>
            </section>
        <?php }; ?>
        <!-- seccion centro de recursos -->
    </div>

</article><!-- #post -->

<?php //get_sidebar(); ?>