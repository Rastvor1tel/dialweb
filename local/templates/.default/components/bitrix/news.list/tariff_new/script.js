$(function(){
	$('.tariff__slider').arrowSlider({
		'sliderWrapClass': '.tariff__wrap',
		'sliderItemClass': '.tariff__item',
		'sliderArrowClass': '.tariff__contols-item',
	});
	$(document).on('click', '.tariff__order', function(){
		var popupData = $(this).data('popup');
		$('.' + popupData).fadeIn();
		$('.overlay').fadeIn().css('z-index', 20);
		$('body').addClass('_overflow');
	});
});