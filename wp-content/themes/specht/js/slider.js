( function( $ ) {

	// Slick Slider initialization

	$('.home-gallery').slick({
	   dots: false,
	   arrows: false,
	   infinite: true,
	   speed: 500,
	   fade: true,
	   cssEase: 'linear'
	});

	// Custom Slider Arrows for Slick Slider

	$('.left').click(function(){
	  $('.home-gallery').slickPrev();
	})

	$('.right').click(function(){
	  $('.home-gallery').slickNext();
	})


} )( jQuery );
