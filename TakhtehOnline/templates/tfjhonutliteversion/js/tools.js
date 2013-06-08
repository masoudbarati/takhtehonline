	jQuery(document).ready(function() {
						   jQuery("#main img, #bottom_wrapper img").hover(function(){
						   jQuery(this).fadeTo("slow", 0.7); 
						   },function(){
						   jQuery(this).fadeTo("fast", 1.0); 
						   });
				});

jQuery(function(){
	jQuery('#gotop a').click(function(){
		 jQuery('html, body').animate({scrollTop: '0px'}, 800);
		 return false;
	});
});

