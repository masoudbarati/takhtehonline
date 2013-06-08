
/***************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Email: info@asdesigning.com
/*		License: ASDE Commercial
/*
/**************************************************************************************/

var asjQuery = jQuery.noConflict();

asjQuery(window).load(function() 
{
	asjQuery("#phocagallery-module-ri").css("margin", "0px auto");	
	
	jQuery("<li class='bgtop'></li>").prependTo("#topmenu ul.menu ul");
	jQuery("<li class='bgbottom'></li>").appendTo("#topmenu ul.menu ul");			
	asjQuery(".menu li").fadeIn(1);	
});

	
asjQuery(document).ready(function()
{
	asjQuery('#topmenu ul li a').hover(
		function() {
			asjQuery(this).addClass("hover");
		},
		function() {
			asjQuery(this).removeClass("hover");
		}		
	);	
	asjQuery('#topmenu ul li.deeper').hover(
		function() {
			asjQuery(this).addClass("actives");
			asjQuery(this).find('>ul').stop(false, true).fadeIn();
			asjQuery(this).find('>ul ul').stop(false, true).fadeOut('fast');
		},
		function() {
			asjQuery(this).removeClass("actives");        
			asjQuery(this).find('ul').stop(false, true).fadeOut('fast');
		}
	);
});

