$( document ).ready(function() {
    $('#bloc2').fadeIn('5000000');

    var backImages = $('#backgrounds').data('backgrounds').split(',');
	
	$.backstretch(backImages, {
		fade: 500,
		duration: 1000000
    });
    
    $('.home-slider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: false,
		direction: "vertical",
		slideshowSpeed: 3000,
		animationSpeed: 500,
		pauseOnHover:false,
		pauseOnAction:false,
		smoothHeight: true
	});
	
	if(!$('#color-overlay').length){$('body').addClass('no-overlay');}
});