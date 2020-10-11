(function () {
	
	'use strict';

	

	
	var owlCarousel = function(){
		
		


		var owl2 = $('.owl-carousel-width');
		owl2.owlCarousel({
                        stagePadding:50,
			items: 5,
			loop: false,
                        dots:false,
			margin: 10,
                       responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:4
	        }
	    	}
		
			
			
		});


		

	};
        

		$(function(){
		owlCarousel();
		
		
	});
        
        
        
        
        
        
        
        
        
        
}());