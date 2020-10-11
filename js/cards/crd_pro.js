(function () {
	
	'use strict';

	

	
	var owlCarousel = function(){

		var owl2 = $('.owl-carousel-fullwidth-crd-pro');
		owl2.owlCarousel({
                        stagePadding:45,
			items: 5,
			loop: false,
                        dots:false,
			margin: 10,
                       responsive:{
	        0:{
	            items:2
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:6
	        }
	    	}
		});

	};
		$(function(){
		owlCarousel();
	});
}());