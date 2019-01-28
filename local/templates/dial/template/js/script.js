(function($){
	$.fn.arrowSlider = function(settings) {
		var settings = $.extend( {
			'sliderWrapClass': '.slider__wrap',
			'sliderItemClass': '.slider__item',
			'sliderArrowClass': '.slider__arrow',
		}, settings);

		var slider = function() {
			function arrowSliderLeft(){
				var itemWidth = $(settings.sliderWrapClass).find($(settings.sliderItemClass)).outerWidth(true);
				if ($(settings.sliderWrapClass).css('left') != '0px') return;
				$(settings.sliderWrapClass).css('left' , -itemWidth);
				$(settings.sliderWrapClass).find($(settings.sliderItemClass)).last().clone().prependTo(settings.sliderWrapClass);
				$(settings.sliderWrapClass).animate({'left' : '0px'}, 500, function(){
					$(settings.sliderWrapClass).find($(settings.sliderItemClass)).last().remove();
				});
			}

			function arrowSliderRight(){
				var itemWidth = $(settings.sliderWrapClass).find($(settings.sliderItemClass)).outerWidth(true);
				if ($(settings.sliderWrapClass).css('left') != '0px') return;
				$(settings.sliderWrapClass).find($(settings.sliderItemClass)).first().clone().appendTo(settings.sliderWrapClass);
				$(settings.sliderWrapClass).animate({'left' : -itemWidth}, 500, function(){
					$(settings.sliderWrapClass).css('left' , '0px');
					$(settings.sliderWrapClass).find($(settings.sliderItemClass)).first().remove();
				});
			}

			$('body').on('click', settings.sliderArrowClass, function(){
				if ($(this).hasClass('_left')) {
					arrowSliderLeft();
				} else if ($(this).hasClass('_right')) {
					arrowSliderRight();
				}
			});
		};

		return this.each(slider);
	}
})(jQuery);

/* -------------------------Header------------------------- */

function toggleHeader() {
	$('body').toggleClass('_overflow');
	$('.sidebar__menu').toggleClass('_open');
	$('.navigation').toggleClass('_open');
	if ($('.sidebar__menu').hasClass('_open'))
		$('.overlay').fadeIn().addClass('_header');
	else
		$('.overlay').fadeOut().removeClass('_header');
		$('body').removeClass('_overflow');
}

function closeHeader() {
	$('body').removeClass('_overflow');
	$('.sidebar__menu').removeClass('_open');
	$('.navigation').removeClass('_open');
	$('.overlay._header').fadeOut().removeClass('_header');
}

function reconstructHeader() {
    if ($(window).width() <= 1020) {
        $('.header__city').addClass('_mobile').appendTo('.navigation');
    } else {
        $('.header__city').removeClass('_mobile').appendTo('.header__wrap-info');
    }
	if ($(window).width() <= 843) {
		$('.header__wrap-order').addClass('_mobile').prependTo('.navigation');
		$('.header__cases').addClass('_mobile').insertBefore('.navigation__presentation');
	} else {
		$('.header__wrap-order').removeClass('_mobile').appendTo('.header__wrap');
		$('.header__cases').removeClass('_mobile').prependTo('.header__wrap-info');
	}
}

$(function(){
	/* -------------------------Header------------------------- */
	$('.header__city-select, .city-select__close').click(function(){
        $('.city-select').slideToggle();
        closeHeader();
    });

	$('.sidebar__menu').click(function(){
		toggleHeader();
	});

	$('body').on('click', '.overlay._header', function() {
		closeHeader();
	});

	reconstructHeader();

	$(window).resize(function(){
		reconstructHeader();
	});

	$('.sidebar__up').click(function(){
		$('html, body').animate({'scrollTop' : 0}, 300);
	});

	/* -------------------------Steps-slider------------------------- */

	$('.seo-slider__item').each(function(){
		$(this).addClass('_' + $(this).index());
	});
	$('.seo__steps-item').first().addClass('_active');
	$('.seo-slider__item').first().addClass('_active');
	$('.seo__contols-item._left').attr('disabled', true);

	$('.seo__steps-item').click(function(){
		if ($(this).hasClass('_active')) return;
		if ($('.seo-slider__wrap').css('left') != '0px') return;
		var slideIndex = $(this).index();
		var slideActiveIndex = $('.seo__steps-item._active').index();
		if (slideIndex > slideActiveIndex){
			$('.seo-slider__item._' + slideIndex).insertAfter('.seo-slider__item._active');
			var item_width = $('.seo-slider__item').outerWidth(true);
			if ($('.seo-slider__wrap').css('left') != '0px') return;
			$('.seo-slider__wrap').animate({'left' : -item_width}, 500, function(){
				$('.seo-slider__item').first().detach().appendTo('.seo-slider__wrap');
				$('.seo-slider__wrap').css('left' , '0px');
			});
		} else {
			$('.seo-slider__item._' + slideIndex).insertBefore('.seo-slider__item._active');
			var item_width = $('.seo-slider__item').outerWidth(true);
			if ($('.seo-slider__wrap').css('left') != '0px') return;
			$('.seo-slider__wrap').css('left' , -item_width);
			$('.seo-slider__wrap').animate({'left' : '0px'}, 500);
		}
		$('.seo-slider__item._active').removeClass('_active');
		$('.seo-slider__item._' + slideIndex).addClass('_active');
		$('.seo__steps-item._active').removeClass('_active');
		$(this).addClass('_active');
		$('.seo__contols-item').attr('disabled', false);
		if ($(this).next().length == 0) {
			$('.seo__contols-item._right').attr('disabled', true);
		} else if ($(this).prev().length == 0) {
			$('.seo__contols-item._left').attr('disabled', true);
		}
	});

	$('body').on('click', '.seo__contols-item', function(){
		$('.seo__contols-item').attr('disabled', false);
		if ($(this).hasClass('_right')) {
			if ($('.seo__steps-item._active').next().length > 0) {
				$('.seo__steps-item._active').next().click();
			}
		} else if ($(this).hasClass('_left')) {
			if ($('.seo__steps-item._active').prev().length > 0) {
				$('.seo__steps-item._active').prev().click();
			}
		}
		if ($('.seo__steps-item._active').next().length == 0) {
			$('.seo__contols-item._right').attr('disabled', true);
		} else if ($('.seo__steps-item._active').prev().length == 0) {
			$('.seo__contols-item._left').attr('disabled', true);
		}
	});
	/* -------------------------Placeholder------------------------- */

	$(document).on("change", ".text-input", function() {
		if ($(this).val() != "") {
			$(this).parent().find(".js-placeholder").addClass("_not-empty")
		} else {
			$(this).parent().find(".js-placeholder").removeClass("_not-empty")
		}
	});
	/* -------------------------Tabs------------------------- */

	$('.development__tab').click(function(){
		var dataCategory = $(this).data('category');
		$('.js-cases-tab-content').removeClass('_active');
		$('.development__tab').removeClass('_active');
		$(this).addClass('_active');
		$('.js-cases-tab-content').each(function(){
			if ($(this).data('category') == dataCategory) {
				$(this).addClass('_active');
			}
		});
	});

	$('.contacts__city').click(function(){
		var idx = $(this).index();
		$('.contacts__city').removeClass('_active');
		$('.contacts__info').removeClass('_active');
		$(this).addClass('_active');
		$('.contacts__info').eq(idx).addClass('_active');
	});

	/* -------------------------Sliders------------------------- */

	$('.cases-slider').arrowSlider({
		'sliderWrapClass': '.cases-slider__wrap._active',
		'sliderItemClass': '.cases-slider__item',
		'sliderArrowClass': '.development__contols-item',
	});

	$('.seo-cases__slider').arrowSlider({
		'sliderWrapClass': '.seo-cases__wrap',
		'sliderItemClass': '.seo-cases__item',
		'sliderArrowClass': '.seo-cases__contols-item',
	});

	/* -------------------------Popups------------------------- */

	$('.js-popup-button, .contacts__menu-link, .blog_popup, .zakaz').click(function(){
		var popupData = $(this).data('popup');
		$('.' + popupData).fadeIn();
		$('.overlay').fadeIn().css('z-index', 20);
		$('body').addClass('_overflow');
		var iframe = $('.' + popupData + ' iframe');
		if (iframe.length && iframe.attr('src') == undefined) {
			iframe.attr('src', iframe.data('src'));
		}
	});

	$('.popup__close, .overlay').click(function(){
		$('.popup').fadeOut();
		$('.overlay').fadeOut().animate({'z-index' : 10}, 100);
		$('body').removeClass('_overflow');
	});

	/* -------------------------Other------------------------- */

	$('.banner__next').click(function(){
		$('html, body').animate({'scrollTop' : $('.banner').height()}, 800);
	});

	$('.js-phone').inputmask({mask: "+7 (999) 999-99-99", showMaskOnHover: false });

});
$(function(){
	var $_GET = {};
	document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
	    function decode(s) {
	        return decodeURIComponent(s.split("+").join(" "));
	    }

	    $_GET[decode(arguments[1])] = decode(arguments[2]);
	});
	if($_GET['show-form'] == 'true'){
		$('.js-popup-service').fadeIn();
		$('.overlay').fadeIn().css('z-index', 20);
		$('body').addClass('_overflow');		
	}
	
})

/* Yandex Metrika */
$(function(){
	var host = window.location.host;
	//console.log(host);
	if(host == 'dialweb.ru'){
		//Dialweb.ru

		/* -------------------------Goals------------------------- */
		$(document).on('submit', 'form', function(){
			switch ($(this).attr('name')) {
				case 'SIMPLE_FORM_1': // заказать услугу
					yaCounter1199858.reachGoal('zakaz');
					break;
				case 'SIMPLE_FORM_2': // нижние обратки
					yaCounter1199858.reachGoal('bottom');
					break;
				case 'SIMPLE_FORM_3': // запись в академию
					yaCounter1199858.reachGoal('kurs');
					break;
				case 'SIMPLE_FORM_4': // получить консультацию в услугах
					yaCounter1199858.reachGoal('konsultant');
					break;
			}
		});

		$('#call1').click(function(){
			yaCounter1199858.reachGoal('call1');
			console.log("call1 ok");
		});
		$('#call2').click(function(){
			yaCounter1199858.reachGoal('call2');
			console.log("call2 ok");
		});
	}else if(host == 'kaluga.dialweb.ru'){
		
		//Kaluga.dialweb.ru

		/* -------------------------Goals------------------------- */
		$(document).on('submit', 'form', function(){
			switch ($(this).attr('name')) {
				case 'SIMPLE_FORM_1': // заказать услугу
					yaCounter1199858.reachGoal('zakazat_uslugu');
					break;
				case 'SIMPLE_FORM_2': // нижние обратки
					yaCounter1199858.reachGoal('bottom');
					break;
				case 'SIMPLE_FORM_3': // запись в академию
					yaCounter1199858.reachGoal('kurs');
					break;
				case 'SIMPLE_FORM_4': // получить консультацию в услугах
					yaCounter1199858.reachGoal('konsultant');
					break;
			}
		});

	}else if(host == 'ryazan.dialweb.ru'){
		//Ryazan.dialweb.ru
	}
});