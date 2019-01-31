$(function(){

	// $('.reviews__write').click(function(){
		// $('.reviews-form').slideToggle();
	// });

	// $('.reviews-form__rating i').click(function(){
		// var id = $(this).index()+1;
		// $('.reviews-form__rating').removeAttr('class').addClass('reviews-form__rating _'+id);
		// $('.reviews-form__rating-val').val(id);
	// })

	// $('.reviews-form__submit').click(function(){
		// var name = $('.reviews-form__name').val();
		// var text = $('.reviews-form__text').val();
		// var error = false;

		// if (name == '') {
			// $('.reviews-form__name').addClass('_invalid');
			// error = true;
		// }
		// if (text == '') {
			// $('.reviews-form__text').addClass('_invalid');
			// error = true;
		// }
		// if (error) {
			// return false;
		// }

		// var email = $('.reviews-form__email').val();
		// var rating = $('.reviews-form__rating-val').val();

		// data = {'mode': 'add'};
		// data['name'] = name;
		// data['text'] = text;
		// data['email'] = email;
		// data['rating'] = rating;
		// msgbox = $('.reviews-form__message');
		// $.post('', data, function(result){
			// msgbox.empty();
			// if (result.errors !== undefined) {
				// for (i in result.errors)
					// msgbox.append('<p class="reviews-form__error">'+result.errors[i]+'</p>');
			// } else if (result.success !== undefined) {
				// for (i in result.success)
					// msgbox.append('<p class="reviews-form__success">'+result.success[i]+'</p>');
				// $('.reviews-form').hide();
			// }
		// }, 'json');

	// })

	// $('.reviews-form__name').on('input propertychange', function(){
		// $('.reviews-form__name').removeClass('_invalid');
	// });

	// if (!String.prototype.trim) {
		// (function() {
			// Вырезаем BOM и неразрывный пробел
			// String.prototype.trim = function() {
				// return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
			// };
		// })();
	// }

	// $('.reviews__more').click(function(){

		// var offset = $(this).data('offset');
		// var page = $(this).data('page');
		// data = {'offset': offset};
		// $.post('', data, function(result){
			// if (result.trim() != '') {
				// $('.reviews__box').append(result);
				// $('.reviews__more').data('offset', parseInt(offset) + parseInt(page));
			// } else {
				// $('.reviews__more').hide();
			// }

		// }, 'html');
	// });



	$('.grade__star').click(function(){
		$('.grade__star').removeClass('_active');
		$(this).addClass('_active');
		$('.grade__rating').val($(this).index()+1);
	});
	$('.masked-phone').inputmask({mask: "+7 (999) 999-99-99", showMaskOnHover: false});
	$('.grade-form').submit(function(event){
		event.preventDefault();
		if (!$('.grade__input.masked-phone').inputmask("isComplete")) {
			$('.grade__input.masked-phone').addClass('_invalid');
			return false;
		}
		$('.grade-error').remove();
		var data = $( this ).serializeArray();
		data.push({name: 'mode', value: 'add'});


		$.ajax({
			type: "POST",
			url: window.location.href,
			data: $.param(data),
			success: function(response) {
				response = JSON.parse(response);
				console.log(response.result);
				if (response.result == 'success') {
					$('.grade-form').hide();
					$('.grade').prepend('<div class="grade-success">Благодарим Вас за оставленный отзыв <br>Если у нас возникнут вопросы, мы обязательно свяжемся с Вами.<br>С уважением, digital агентство Dial!</div>');
				} else {
					$('.grade').prepend('<div class="grade-error">Что то пошло не так. Попробуйте позже.</div>');
				}

			},
		});
	});
});
