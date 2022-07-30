<style>
    <?php include get_template_directory() . '/assets/librerias/css/footer.css'; ?>
</style>

<div class="container-fluid">

	<div class="row">
		<div class="logo-footer col-12 col-md-3 p-0 ps-3">
			<?php
				if (is_active_sidebar('menu_footer_logo')) :
					dynamic_sidebar('menu_footer_logo');
				endif; 
			?>
		</div>

		<div class="col-12 col-md-3 p-5">
			<?php 
				if (is_active_sidebar('menu_uno')) :
					dynamic_sidebar('menu_uno');
				endif; 
			?>
		</div>

		<div class="col-12 col-md-3 p-5">
			<?php
				if (is_active_sidebar('menu_dos')) :
					dynamic_sidebar('menu_dos');
				endif; 
			?>
		</div>

		<div class="menu-rrss col-12 col-md-3 p-0">
			<?php
				if (is_active_sidebar('menu_rrss')) :
					dynamic_sidebar('menu_rrss');
				endif;
			?>	
		</div>
	</div>

	<div class="row p-0" style="background-color: #ececec;">
		<div class="col-12 text-center">
			<?php
				if (is_active_sidebar('menu_pie_pagina')) :
					dynamic_sidebar('menu_pie_pagina');
				endif;
			?>
		</div>
	</div>

</div>