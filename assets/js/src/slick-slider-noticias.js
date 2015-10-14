/* slick slider noticias */
jQuery(document).ready(function($) {
	$('.slider-noticias').slick({
  		dots: true,
  		infinite: true,
  		speed: 1900,
 		autoplaySpeed: 2000,
  		slidesToShow: 3,
  		slidesToScroll: 3,
 		adaptiveHeight: true
 	});
});
