<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<div class="container-outer">
	<div class="contacts-page" itemscope="" itemtype="http://schema.org/Organization">
		<span itemprop="name" style="display: none;">DialWeb</span>
		<div class="contacts-page__tabs tabs">
			<button class="contacts-page__tab tabs__item button<?if($city!='Moscow' && $city!='Kaluga'){?> _active<?}?>" type="button"><?=Loc::getMessage("CONTACTS_CITY1");?></button>
			<button class="contacts-page__tab tabs__item _moscow button<?if($city=='Moscow'){?> _active<?}?>" type="button"><?=Loc::getMessage("CONTACTS_CITY3");?></button>
			<button class="contacts-page__tab tabs__item button<?if($city=='Kaluga'){?> _active<?}?>" type="button"><?=Loc::getMessage("CONTACTS_CITY2");?></button>
		</div>
		<div class="contacts-page__wrap">
			<p><b><?=Loc::getMessage("CONTACTS_TOLLFREE");?>:</b><br><a href="tel:+78007758343" class="contacts-page__phone" itemprop="telephone">8 800 775 83 43</a></p>
			<div class="contacts-page__block js-contacts-tab<?if($city!='Moscow' && $city!='Kaluga'){?> _active<?}?>">
				<p>
					<b><?=Loc::getMessage("PAGE_CONTACTS_PHONE_TITLE_TULA");?></b>
					<br>
					<a href="tel:+74872250419" itemprop="telephone" class="roistat-phone04-19">+7 (4872) 25-04-19</a>
					<br>
					<a href="tel:+79534256999" itemprop="telephone">+7 (953) 425-69-99</a>
				</p>
				<p><b><?=Loc::getMessage("PAGE_CONTACTS_OUR_EMAIL");?></b><br><a href="mailto:manager@dialweb.ru" itemprop="email">manager@dialweb.ru</a></p>
				<p><b><?=Loc::getMessage("QUALITY_CONTROL_SYSTEM");?></b><br><a href="tel:+78002001525">8 800 200 15 25 </a></p>
				<p itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
					<b><?=Loc::getMessage("PAGE_CONTACTS_ADDRESS_TITLE_TULA");?></b>
					<br>
					<span itemprop="postalCode" style="display: none">300013</span>
					<span itemprop="addressLocality" style="display: none;"><?=Loc::getMessage("CONTACTS_CITY1");?></span>
					<span itemprop="streetAddress"><?=Loc::getMessage("CONTACTS_ADDRESS_TULA_NOCITY");?></span>
				</p>
			</div>


			<div class="contacts-page__block _moscow js-contacts-tab<?if($city=='Moscow'){?> _active<?}?>">
				<p><b><?=Loc::getMessage("PAGE_CONTACTS_PHONE_TITLE_MOSCOW");?></b><br><a href="tel:+74952666287" class="roistat-phone-495">+7 (495) 266-62-87</a><br><a href="tel:+79035385939">+7 (903) 538-59-39</a></p>
				<p><b><?=Loc::getMessage("PAGE_CONTACTS_OUR_EMAIL");?></b><br><a href="mailto:salemsk@dialweb.ru">salemsk@dialweb.ru</a></p>
                <p><b><?=Loc::getMessage("QUALITY_CONTROL_SYSTEM");?></b><br><a href="tel:+78002001525">8 800 200 15 25 </a></p>
				<p>
                    <b><?=Loc::getMessage("PAGE_CONTACTS_ADDRESS_TITLE_MOSCOW");?></b><br>
                    <?=Loc::getMessage("CONTACTS_ADDRESS_MOSCOW_NOCITY");?>
                </p>
			</div>
			<div class="contacts-page__block js-contacts-tab<?if($city=='Kaluga'){?> _active<?}?>">
				<p><b><?=Loc::getMessage("PAGE_CONTACTS_PHONE_TITLE_KALUGA");?></b><br><a href="tel:+74842202484" class="roistat-phone-4842">+7 (4842) 20-24-84</a><br><a href="tel:+79005752484">+7 (900) 575-24-84</a></p>
				<p><b><?=Loc::getMessage("PAGE_CONTACTS_OUR_EMAIL");?></b><br><a href="mailto:mo@dialweb.ru">mo@dialweb.ru</a></p>
                <p><b><?=Loc::getMessage("QUALITY_CONTROL_SYSTEM");?></b><br><a href="tel:+78002001525">8 800 200 15 25 </a></p>
				<p>
                    <b><?=Loc::getMessage("PAGE_CONTACTS_ADDRESS_TITLE_KALUGA");?></b><br>
                    <?=Loc::getMessage("CONTACTS_ADDRESS_KALUGA_NOCITY");?>
                </p>
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
						<div class="feedback__title"><?=Loc::getMessage("PAGE_CONTACTS_BOTTOM_FEEDBACK_TITLE");?></div>
						<div class="feedback__subtitle"><?=Loc::getMessage("FEEDBACK_SUBTITLE");?></div>
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
<?
if (LANGUAGE_ID == 'ru') {
    ?>
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <?
} else {
    ?>
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_US" type="text/javascript"></script>
    <?
}
?>
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
	contactsMap.geoObjects.add(new ymaps.Placemark([54.180156, 37.571668], {balloonContent: '<?=Loc::getMessage("CONTACTS_ADDRESS_TULA_NOCITY");?>'}));
	contactsMap.geoObjects.add(new ymaps.Placemark([55.711666, 37.686042], {balloonContent: '<?=Loc::getMessage("CONTACTS_ADDRESS_MOSCOW_NOCITY");?>'}));
	contactsMap.geoObjects.add(new ymaps.Placemark([54.513187, 36.254487], {balloonContent: '<?=Loc::getMessage("CONTACTS_ADDRESS_KALUGA_NOCITY");?>'}));
}
ymaps.ready(initMap);
</script>
