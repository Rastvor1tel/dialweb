$(function(){
	$('.js-show-more-button').click(function(){
		var button = $(this).hide();
		$.get(button.data('url'), function(answer){
			// добавляем новый контент
			$('.js-show-more-container').append($(answer).filter('.js-show-more-container').children());
			// обновляем/удаляем кнопку
			var newButton = $(answer).filter('.js-show-more-button');
			if (newButton.length) {
				button.data('url', newButton.data('url')).show();
			} else {
				button.remove();
			}
		});
	});
});