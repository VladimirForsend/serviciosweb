jQuery(function($) {

       
        $(document).ready(function(){
            $('#collapse-busqueda').collapse('hide');
        });

	    /*filtro*/
		$('#filter').submit(function() {
			var filter = $('#filter');
			$.ajax({
				url: filter.attr('action'),
				data: filter.serialize(), // form data
				type: filter.attr('method'), // POST
				beforeSend: function(xhr) {
					filter.find('button').text('Buscando...'); // changing the button label
				},
				success: function(data) {
					filter.find('button').text('Buscar'); // changing the button label back
					$('#resultados-busqueda').html(data); // insert data
                    $('#collapse-busqueda').collapse('show');
				}
			});
			return false;
		});
		/*filtro*/
	
    $(document).ready(function() {

	
        /* para el slider de logos en el home */
        $('.slider-de-slick').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            arrows: true,
            dots: false,
            pauseOnHover:true,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 450,
                settings: {
                    slidesToShow: 1
                }
            }]
        });	
        
        /* slider de imagenes en single product 
        $('.woocommerce-product-gallery__wrapper').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: false,
            asNavFor: '.flex-control-nav',
          }); /* *//*
        $('.flex-control-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false,
            dots: false,
            pauseOnHover:true,
            /*asNavFor: '.woocommerce-product-gallery__wrapper',/* */
        /*});*/
        /*$('.woocommerce-product-gallery__wrapper .slick-track').addClass('d-flex');
        $('.flex-control-nav .slick-track').addClass('d-flex');*/
    });
	
	
	

	
	 

    $(".menu-item-has-children").addClass("nav-item dropdown");
    $(".menu-item-has-children a").addClass("nav-link dropdown-toggle");
    $("ul.nav-item.dropdown").addClass("dropdown-menu");
    $("ul.nav-item.dropdown").removeClass("nav-item dropdown");
    $('ul.dropdown-menu').attr('aria-labelledby', 'navbarDropdown');
    $(".menu-item-has-children a:nth-child(0)").addClass("nav-link dropdown-toggle");
    $('.menu-item-has-children a:nth-child(0)').attr('role', 'button');
    $('.menu-item-has-children a:nth-child(0)').attr('data-toggle', 'dropdown');
    $('.menu-item-has-children a:nth-child(0)').attr('aria-haspopup', 'true');
    $("li.nav-item a").addClass('nav-link');

    $(function() {
        $('[data-toggle="popover"]').popover({ html: true })

    })


    $(function() {

        $('[data-toggle="tooltip"]').tooltip()
    })



    $(".pop-menu .menu-item-has-children a").hover(function() {
        $(".pop-menu .menu-item-has-children ul").toggleClass("mostrar");
    });


    var titulos_productos = $(".product-template-default .entry-header");
    $(titulos_productos).prependTo(".product-template-default .single-product .summary.entry-summary");

    var carro_productos = $(".xoo-wsc-basket");
    $(carro_productos).prependTo(".mini-carrito");

    var buscar_productos = $(".aws-search-btn.aws-form-btn");
    $(buscar_productos).prependTo(".aws-wrapper");

    var titulo_productos = $(".home .page header.entry-header");
    $(titulo_productos).prependTo(".home .woocommerce.columns-4");

    var titulo_productos = $(".banner_area-home.col-12.col-md-12.mb-3:nth-child(2)");
    $(titulo_productos).prependTo(".home .woocommerce.columns-4");

    var titulo_checkout = $("#order_review_heading");
    $(titulo_checkout).prependTo("#order_review");


    var tabla_peso = $(".woocommerce-product-attributes-item.woocommerce-product-attributes-item--weight");
    $(tabla_peso).appendTo(".has-subtle-light-gray-background-color.has-background");

    var tabla_dime = $(".woocommerce-product-attributes-item.woocommerce-product-attributes-item--dimensions");
    $(tabla_dime).appendTo(".has-subtle-light-gray-background-color.has-background");


    /* *********** jqueries de carga inteligente *********** */
    /* para pausar el carrusel del home on hover */
    $('.carousel').carousel('pause','hover');
	
	/* cerrar el popup del formulario on click */
	$('.wpcf7-response-output').on('click',function(){
		if($('.wpcf7-response-output').hasClass('visible')){
			$('.visible').removeClass('visible');
		};
	});

    /* efecto de fadein cuando el elemento sea visible en scroll down */
    $(document).ready(function() {
        function fade() {
            var animation_height = $(window).innerHeight() * 0.25;
            var ratio = Math.round( (1 / animation_height) * 10000 ) / 10000;
    
            $('.fade').each(function() {
    
                var objectTop = $(this).offset().top;
                var windowBottom = $(window).scrollTop() + $(window).innerHeight();
    
                if ( objectTop < windowBottom ) {
                    if ( objectTop < windowBottom - animation_height ) {
                        $(this).css( {
                            transition: 'opacity 1 linear',
                            opacity: 1
                        } );
    
                    } else {
                        $(this).css( {
                            transition: 'opacity 0.55s linear',
                            opacity: (windowBottom - objectTop) * ratio
                        } );
                    }
                } else {
                    $(this).css( 'opacity', 0 );
                }
            });
        }
        $('.fade').css( 'opacity', 0 );
        fade();
        $(window).scroll(function() {fade();});
    });
});

