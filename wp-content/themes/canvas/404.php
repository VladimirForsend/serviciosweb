<?php /* para redirigir al home inmediatamente */
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
exit();
?>
<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ecommerce
 */

get_header();
?>


	<main id="primary" class="site-main">

		<section class="not-found p-relative ht-500 overflow-hidden background-segundo">
            <div class="error-404 ht-full wt-full bg-center"></div>
            <div class="error-404-content ht-full">
                <div class="container">
                    <div class="row flex-row-reverse">
                        <div class="col-12 col-md-6 d-flex flex-column justify-content-center pady-5 text-white">
                            <header class="page-header">
                                <h1 class="page-title uppercase black"><?php esc_html_e( '404, Ruta Incorrecta!', 'ecommerce-para-chile' ); ?></h1>
                            </header><!-- .page-header -->

                            <div class="page-content">
                                <p class="parrafo-lg bold uppercase mb-3"><?php esc_html_e( 'La Aventura no es por aqui, vuelve al punto de partida.', 'ecommerce-para-chile' ); ?></p>
                                <a class="mt-5" href="<?php echo get_home_url(); ?>">
                                    <div class="hover-1 pady-1 text-white background-black parrafo-md text-center"><p class="mb-0">VOLVER AL INICIO</p></div>
                                </a>
                            </div><!-- .page-content -->
                            
                        </div>
                        <div class="col-12 col-md-6 p-relative overflow-hidden ht-500">
                            <img class="p-absolute imagen-bg" src="<?php echo get_home_url(); ?>/wp-content/uploads/2021/08/error-404.jpg" alt="imagen representativa del error 404, pagina no encontrada">
                        </div>
                    </div>
                </div>
            </div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
