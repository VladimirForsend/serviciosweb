<style>
    <?php include get_template_directory() . '/assets/templates/navs/nav.css'; ?>
</style>

<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark d-flex d-lg-none nav-mobile">
    <div class="navbar-brand">
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
            <p class="site-description d-none"><?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                                        ?></p>
        <?php endif; ?>
    </div><!-- .navbar-brand -->

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'	 => 'navbar-nav d-flex flex-column ht-200 justify-content-around parrafo-sm color-light',
                )
            );
            ?>
            <div class="nav-widgets">
                <?php echo do_shortcode('[gtranslate]'); ?>
            </div>
        </div>
    </div>

</nav><!-- #site-navigation -->
