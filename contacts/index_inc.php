<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container-outer">
	<div class="contacts-page" itemscope="" itemtype="http://schema.org/Organization">
		<span itemprop="name" style="display: none;">DialWeb</span>
		<div class="contacts-page__tabs tabs">
			<button class="contacts-page__tab tabs__item button<?if($city!='Moscow' && $city!='Kaluga'){?> _active<?}?>" type="button">Тула</button>
			<button class="contacts-page__tab tabs__item button<?if($city=='Moscow'){?> _active<?}?>" type="button">Москва</button>
			<button class="contacts-page__tab tabs__item button<?if($city=='Kaluga'){?> _active<?}?>" type="button">Калуга</button>
		</div>
		<div class="contacts-page__wrap">
			<p><b>Единый номер:</b><br><a href="tel:+78007758343" class="contacts-page__phone" itemprop="telephone">8 800 775 83 43</a></p>
			<div class="contacts-page__block js-contacts-tab<?if($city!='Moscow' && $city!='Kaluga'){?> _active<?}?>">
				<p>
					<b>Телефон в Туле:</b>
					<br>
					<a href="tel:+74872250419" itemprop="telephone" class="zphone">+7 (4872) 25-04-19</a>
					<br>
					<a href="tel:+79534256999" itemprop="telephone">+7 (953) 425-69-99</a>
				</p>
				<p><b>Наш E-mail:</b><br><a href="mailto:manager@dialweb.ru" itemprop="email">manager@dialweb.ru</a></p>
				<p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
					<b>Адрес в Туле:</b>
					<br>
					<span itemprop="postalCode" style="display: none">300013</span>
					<span itemprop="addressLocality" style="display: none;">Тула</span>
					<span itemprop="streetAddress">ул. 3-я Трубная, д.22, оф.2</span>
				</p>
			</div>
			<div class="contacts-page__block js-contacts-tab<?if($city=='Moscow'){?> _active<?}?>">
				<p><b>Телефон в Москве:</b><br><a href="tel:+74959663898">+7 (495) 966-38-98</a><br><a href="tel:+79035385939">+7 (903) 538-59-39</a></p>
				<p><b>Наш E-mail:</b><br><a href="mailto:salemsk@dialweb.ru">salemsk@dialweb.ru</a></p>
				<p><b>Адрес в Москве:</b><br>ул. Угрешская, д.2, стр.31, оф.116</p>
			</div>
			<div class="contacts-page__block js-contacts-tab<?if($city=='Kaluga'){?> _active<?}?>">
				<p><b>Телефон в Калуге:</b><br><a href="tel:+74842202484">+7 (4842) 20-24-84</a><br><a href="tel:+79005752484">+7 (900) 575-24-84</a></p>
				<p><b>Наш E-mail:</b><br><a href="mailto:mo@dialweb.ru">mo@dialweb.ru</a></p>
				<p><b>Адрес в Калуге:</b><br>ул. Дзержинского, д.35, оф.11</p>
			</div>
		</div>
	</div>
	<div id="contacts-map" class="contacts-map"></div>
</div>
<div class="feedback">
	<div class="container-outer">
		<div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?=TEMPLATE_PATH?>/img/feedback1.jpg')">
			<div class="container-inner">
				<div class="feedback__wrap-inner">
					<div class="feedback__head">
						<div class="feedback__title">Хотите получать клиентов?</div>
						<div class="feedback__subtitle">Отправьте нам заявку</div>
					</div>
					<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "feedback", array(
						"WEB_FORM_ID" => "2",
						"LIST_URL" => "",
						"AJAX_MODE" => "Y",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_HISTORY" => "N",
					));?>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
var contactsMap;
var mapCenters = [
	[54.180156, 37.561668],
	[55.712173, 37.675629],
	[54.513187, 36.244487]
];

$(function(){
    $('.contacts-page__tab').click(function(){
        var idx = $(this).index();
        $('.js-contacts-tab').removeClass('_active');
        $('.contacts-page__tab').removeClass('_active');
        $(this).addClass('_active');
        $('.js-contacts-tab').eq(idx).addClass('_active');
        contactsMap.setZoom(14);
        contactsMap.setCenter(mapCenters[idx]);
    });
});

function initMap() { 
	contactsMap = new ymaps.Map("contacts-map", {
		center: mapCenters[0],
		zoom: 14
	});
	contactsMap.geoObjects.options.set({
		preset: 'islands#dotIcon',
		iconColor: '#fe9023'
	});
	contactsMap.geoObjects.add(new ymaps.Placemark([54.180156, 37.571668], {balloonContent: 'ул. 3-я Трубная, д.22, оф.2'}));
	contactsMap.geoObjects.add(new ymaps.Placemark([55.712173, 37.685629], {balloonContent: 'ул. Угрешская, д.2, стр.31, оф.116'}));
	contactsMap.geoObjects.add(new ymaps.Placemark([54.513187, 36.254487], {balloonContent: 'ул. Дзержинского, д.35, оф.11'}));
}
ymaps.ready(initMap);
</script>