<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-multibanner/multibanner.css'; ?>
</style>

<div id="multibanner" class="container">
    <h2 class="multibanner-titulo"><?php the_field('titulo_seccion'); ?></h2>
    <h4 class="multibanner-subtitulo"><?php the_field('subtitulo_seccion'); ?></h4>
    <div class="small-line"></div>

    <div class="multibanner-contenedor row">

        <div class="row banner mt-5 mb-3">
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen = get_field('logo_plataforma'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen['url']); ?>" alt="<?php echo esc_attr($imagen['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen2 = get_field('logo_plataforma_2'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen2['url']); ?>" alt="<?php echo esc_attr($imagen2['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen3 = get_field('logo_plataforma_3'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen3['url']); ?>" alt="<?php echo esc_attr($imagen3['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen4 = get_field('logo_plataforma_4'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen4['url']); ?>" alt="<?php echo esc_attr($imagen4['alt']); ?>">
            </a>
        </div>
        <div class="row banner mb-3">
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen5 = get_field('logo_plataforma_5'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen5['url']); ?>" alt="<?php echo esc_attr($imagen5['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen6 = get_field('logo_plataforma_6'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen6['url']); ?>" alt="<?php echo esc_attr($imagen6['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen7 = get_field('logo_plataforma_7'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen7['url']); ?>" alt="<?php echo esc_attr($imagen7['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen8 = get_field('logo_plataforma_8'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen8['url']); ?>" alt="<?php echo esc_attr($imagen8['alt']); ?>">
            </a>
        </div>
        <div class="row banner mb-3">
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen9 = get_field('logo_plataforma_9'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen9['url']); ?>" alt="<?php echo esc_attr($imagen9['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen10 = get_field('logo_plataforma_10'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen10['url']); ?>" alt="<?php echo esc_attr($imagen10['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen11 = get_field('logo_plataforma_11'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen11['url']); ?>" alt="<?php echo esc_attr($imagen11['alt']); ?>">
            </a>
            <a class="logos-card col-12 col-md-6 col-lg-3">  
                <?php $imagen12 = get_field('logo_plataforma_12'); ?>
                <img class="imagen" src="<?php echo esc_url($imagen12['url']); ?>" alt="<?php echo esc_attr($imagen12['alt']); ?>">
            </a>
        </div>
            
    </div>
</div>