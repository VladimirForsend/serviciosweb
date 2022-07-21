<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecommerce
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="site sticky-top">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'ecommerce-para-chile'); ?></a>
    <header id="masthead" class="site-header color-white t-fast nav-home">

    <div class="container px-0">

        <nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark d-none d-lg-flex flex-lg-row nav-desk px-5 py-0">
            <div class="navbar-brand align-self-start">
                <?php
                the_custom_logo(); ?>
                <?php if (is_front_page() ) :
                ?>
                    <h1 class="site-title d-none"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php
                else :
                ?>
                    <p class="site-title d-none"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php
                endif;
                $description = get_bloginfo('description', 'display');
                if ($description || is_customize_preview()) :
                ?>
                    <p class="site-description d-none"><?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
            </div><!-- .navbar-brand -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse container-fluid px-0" id="navbarSupportedContent">
                <div class="row justify-content-between align-items-center wt-full pl-4">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'menu_class'	 => 'navbar-nav d-flex justify-content-around parrafo-md',
                            'container_class'=> 'col-11 px-0',
                        )
                    );
                    ?>
                </div>
            </div>

        </nav><!-- #site-navigation -->

        <?php include get_template_directory() . '/assets/templates/navs/nav-mobile.php'; ?>
    
    </div>
            
    </header><!-- #masthead -->
    
</div>