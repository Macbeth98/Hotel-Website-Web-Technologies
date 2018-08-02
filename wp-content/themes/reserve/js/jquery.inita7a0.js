jQuery(function($){
		
	// nth-child selectors (fallback for browsers that don't support CSS3 nth-child
	$('.home-widgets .sixcol.widget:nth-child(2n+2)').addClass('last');
	$('.reservation-widget .gform_wrapper ul li.gfield:nth-child(2n+2)').addClass('last');
	$('.featured-food-horizontal .sixcol:nth-child(2n+2)').addClass('last');
	$('.staff-listing .threecol:nth-child(4n+4)').addClass('last');
	$('.reviews .review:nth-child(2n+2)').addClass('last');
	

	// FlexSlider
	$('.flexslider').flexslider({
		slideshowSpeed: 11000,
		animationDuration: 1200
	});
	$('.reviews-rotation').flexslider();
	
	
	
	

});
