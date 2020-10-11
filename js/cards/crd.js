(function () {
	
	'use strict';

	

	
	var owlCarousel = function(){
		
		var owl = $('.owl-carousel-carousel');
		owl.owlCarousel({
			items: 3,
			loop: true,
			margin: 40,
			
	     	responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:2
	        },
	        1000:{
	            items:3
	        }
	    	}
		});


		var owl2 = $('.owl-carousel-fullwidth-b');
		owl2.owlCarousel({
                        stagePadding:40,
			items: 5,
			loop: false,
                        dots:false,
			margin: 10,
                       responsive:{
	        0:{
	            items:1
	        },
                480:{
	            items:2
	        },
	        576:{
	            items:3
	        },
                768:{
	            items:4
	        },
                992:{
	            items:5
	        },
	        1200:{
	            items:6
	        }
	    	}
		
			
			
		});


		

	};
        

		$(function(){
		owlCarousel();
		
		
	});
        
        
        
        
        
        
        
        
        
        
}());