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

    <!-- Sección 1 Atractivos -->
    <?php $seccion1 = get_field('seccion_uno'); if(empty($seccion1)){?>
       <section id="SeccionAtract" class="container py-5">
            <div class="row">
                <div class="col-12">
                    <?php $titulo1 = get_field('titulo_uno'); if(!empty($titulo1)) {?>
                        <h2 class="titulo"><?php the_field('titulo_uno'); ?></h2>    
                    <?php }; ?>
                    <?php $subtitulo1 = get_field('subtitulo_uno'); if(!empty($subtitulo1)) {?>
                        <div class="subtitulo"><?php the_field('subtitulo_uno'); ?></div>    
                    <?php }; ?>
                    <div class="mt-4">
                        <!-- slider de atractivos cercanos -->
                        <?php include get_template_directory() . '/assets/modulos/modulo-atractivos/atractivos-destacado.php'; ?>
                        <!-- fin del slider de atractivos cercanos -->
                    </div>
                </div>
            </div>
        </section> 
    <?php }; ?> 

    <!-- Sección 2 Socios -->
    <?php $seccion2 = get_field('seccion_dos'); if(empty($seccion2)){?>
       <section id="SeccionSoc" class="background-tercero py-5">
           <div class="container">
                <div class="row">
                   <div class="col-12">
                        <?php $titulo2 = get_field('titulo_dos'); if(!empty($titulo2)) {?>
                            <h2 class="titulo"><?php the_field('titulo_dos'); ?></h2>    
                        <?php }; ?>
                        <?php $subtitulo2 = get_field('subtitulo_dos'); if(!empty($subtitulo2)) {?>
                            <div class="subtitulo"><?php the_field('subtitulo_dos'); ?></div>    
                        <?php }; ?>
                        <div class="mt-4">
                            <!-- modulo socios -->
                            <?php $repositorio = 'false'; ?>
                            <?php include get_template_directory() . '/assets/modulos/modulo-socios/socios.php'; ?>
                            <!-- fin del modulo socios -->
                        </div>
                   </div>
               </div>
           </div>
        </section> 
    <?php }; ?> 

    <!-- Sección 3 Mapa -->
    <?php $seccion3 = get_field('seccion_tres'); if(empty($seccion3)) {?>
       <section id="SeccionMapa" class="pt-5">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                        <?php $titulo3 = get_field('titulo_tres'); if(!empty($titulo3)) {?>
                            <h2 class="titulo"><?php the_field('titulo_tres'); ?></h2>    
                        <?php }; ?>
                        <?php $subtitulo3 = get_field('subtitulo_tres'); if(!empty($subtitulo3)) {?>
                            <div class="subtitulo"><?php the_field('subtitulo_tres'); ?></div>    
                        <?php }; ?>
                   </div>
               </div>
           </div>
            <?php $mapa3 = get_field('mapa_tres'); if(!empty($mapa3)) {?>
                <div class="mapa mt-4">
                    <?php the_field('mapa_tres'); ?>
                </div>
            <?php }; ?>
        </section> 
    <?php }; ?> 
    

</article><!-- #post -->

<?php //get_sidebar(); ?>