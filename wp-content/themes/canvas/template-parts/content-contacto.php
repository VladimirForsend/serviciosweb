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

    <main id="PaginaContacto">
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
        <section id="SeccionDos" class="container pb-5">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5 pt-4 d-flex flex-column justify-content-center">
                    <div class="contacto mb-5">
                        <?php $titulo2 = get_field('titulo_dos'); if(!empty($titulo2)) {?>
                            <h2 class="titulo"><?php the_field('titulo_dos'); ?></h1>
                        <?php }; ?>
                        <?php $telefono = get_field('telefono'); if(!empty($telefono)) {?>
                            <div class="dato"><i class="fas fa-phone-alt"></i><?php the_field('telefono'); ?></div>
                        <?php }; ?>
                        <?php $telefono2 = get_field('telefono_dos'); if(!empty($telefono2)) {?>
                            <div class="dato"><i class="fas fa-phone-alt"></i><?php the_field('telefono_dos'); ?></div>
                        <?php }; ?>
                        <?php $email = get_field('email'); if(!empty($email)) {?>
                            <div class="dato"><i class="fas fa-envelope"></i><?php the_field('email'); ?></div>
                        <?php }; ?>
                        <?php $direccion = get_field('direccion'); if(!empty($direccion)) {?>
                            <div class="dato"><i class="fas fa-map-marker-alt"></i><?php the_field('direccion'); ?></div>
                        <?php }; ?>
                    </div>
                    <div class="rrss mb-5">
                        <?php $titulo3 = get_field('titulo_tres'); if(!empty($titulo3)) {?>
                            <h2 class="titulo"><?php the_field('titulo_tres'); ?></h1>
                        <?php }; ?>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-rrss',
                                'menu_id'        => 'menu-rrss',
                                'menu_class'	 => 'd-flex justify-content-between w-75',
                                'container_class'=> 'col-12 px-0',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-7 py-5">
                    <?php $mapa = get_field('mapa'); if(!empty($mapa)) {?>
                        <div class="mapa"><?php the_field('mapa'); ?></div>
                    <?php }; ?>
                </div>
            </div>
        </section>
    </div>

</article><!-- #post -->

<?php //get_sidebar(); ?>