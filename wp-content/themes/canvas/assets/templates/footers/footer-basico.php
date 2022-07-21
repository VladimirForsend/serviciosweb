<style>
    <?php include get_template_directory() . '/assets/templates/footers/footer.css'; ?>
</style>

<div id="FooterBasico" class="background-primero color-white">
    <div class="container pt-4"> 
        <div class="row py-3">
            <div class="col-12">
                <?php if(is_active_sidebar('menu_pie_pagina')) : dynamic_sidebar('menu_pie_pagina'); endif; ?>
            </div>
        </div>
    </div>
</div>
