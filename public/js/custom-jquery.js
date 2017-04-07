(function ($) {
	"use strict";

	jQuery(document).ready(function($){
		$(".tab-pro-slider").owlCarousel({
			loop: true,
			nav: true,
			margin: 30,
			autoplay:true,
			dots: false,
			navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
			responsive:{
				0:{items:1,},
				480:{items:2,},
				750:{items:3,},
				950:{items:4,},
				1170:{items:4,},
			}
		});
	});


})(jQuery);