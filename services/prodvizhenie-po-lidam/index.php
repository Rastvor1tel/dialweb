<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продвижение сайтов в Туле с оплатой по лидам.");
$APPLICATION->SetPageProperty("description", "Продвижение сайтов с оплатой за лиды. Платите только за реальные заявки и звонки!");
$APPLICATION->SetTitle("Продвижение по лидам");
?><div class="promotion">

	<div class="guarantee">
		<div class="guarantee__price">
			от 40 000 руб.
		</div>
		<div class="guarantee__text">
			<p class="creation-site__text">
				Основная цель продвижения по лидам: увеличение количества целевых обращений в компанию с сайта (например, рост количества заявок, увеличение количества целевых звонков).
			</p>
		</div>
	</div>
	<h2 class="h2 h2_phase">Кому подходит данный тариф</h2>
	<div class="suitable-tariff">
		<div class="stariff-item">
			<div class="stariff-item__numer">
				1
			</div>
			<p>
				тем, у кого есть на сайте товар с четкой ценой
			</p>
		</div>
		<div class="stariff-item">
			<div class="stariff-item__numer">
				2
			</div>
			<p>
				тем, у кого ведется или планируется внедрение система учета заявок и звонков (колл-трекинг)
			</p>
		</div>
	</div>

	<h2 class="h2 h2_phase">Плюсы и минусы тарифа</h2>
	<div class="plusminus">
		<div class="plusminus__wrapper">
		</div>

		<div class="plusminus__items">
			<div class="plusminus__left">
				<div class="plusminus-item">
					<div class="plusminus-item__icon">
						<img src="/local/templates/dial/template/img/promotion/icon-10.png" alt="">
					</div>
					<div class="plusminus-item__info">
						<p>
							Прозрачный контроль за продажами с сайта;
						</p>
					</div>
				</div>
				<div class="plusminus-item">
					<div class="plusminus-item__icon">
						<img src="/local/templates/dial/template/img/promotion/icon-11.png" alt="">
					</div>
					<div class="plusminus-item__info">
						<p>
							Подробная аналитика показателей сайта;
						</p>
					</div>
				</div>
				<div class="plusminus-item">
					<div class="plusminus-item__icon">
						<img src="/local/templates/dial/template/img/promotion/icon-12.png" alt="">
					</div>
					<div class="plusminus-item__info">
						<p>
							Высокий уровень конверсии с сайта;
						</p>
					</div>
				</div>
			</div>
			<div class="plusminus__right">
				<div class="plusminus-item">
					<div class="plusminus-item__icon">
						<img src="/local/templates/dial/template/img/promotion/icon-14.png" alt="">
					</div>
					<div class="plusminus-item__info">
						<p>
							Самый дорогой тариф продвижения сайта;
						</p>
					</div>
				</div>
				<div class="plusminus-item">
					<div class="plusminus-item__icon">
						<img src="/local/templates/dial/template/img/promotion/icon-15.png" alt="">
					</div>
					<div class="plusminus-item__info">
						<p>
							Подходит для рынка узкой направленности.
						</p>
					</div>
				</div>
				<div class="plusminus__icons">
					<img src="/local/templates/dial/template/img/promotion/plusMinus.png" alt=""> <span class="plusminus-icons__title _1">Плюсы</span> <span class="plusminus-icons__title _2">Минусы</span>
				</div>
			</div>
		</div>

	</div>
	<div class="promotion-price">
		<h2 class="h2 h2_phase">Стоимость продвижения по лидам</h2>
		<div class="promotion-price__wrapper center">
			<div class="promotion-price__item _first">
				<div class="promotion-price__title _blue _lead">
					Первые 3 месяца
				</div>
				<div>
					Фиксированная стоимость работ в месяц <span class="promotion-price__bold _lead">от 40 000 Р</span>
				</div>
			</div>
			<div class="promotion-price__item">
				<div class="promotion-price__title _blue">
					После 3 месяцев работ <span class="subtext">* итоговая стоимость работ в месяц</span>
				</div>
				<div class="promotion-price__circle">
					=
				</div>
				<div>
					Фиксированная стоимость<br>
					работ в месяц <span class="promotion-price__bold _lead">от 40 000 Р</span>
				</div>
				<div class="promotion-price__middle _blue">
					+
				</div>
				<div>
					Количество<br>
					привлеченных <span class="promotion-price__bold _lead">ЛИДОВ</span>
				</div>
				<div class="promotion-price__middle _blue">
					*
				</div>
				<div>
					Стоимость<br>
					лида <span class="promotion-price__bold _lead">от 300 Р</span>
				</div>
			</div>
			<hr class="promotion-price__hr">
			<div class="promotion-price__date">
				<div class="promotion-price__subtitle">
					Сроки продвижения:
				</div>
				<p>
					Результат заметен спустя 1-2 месяца, в зависимости от состояния Вашей ресурса.
				</p>
			</div>
		</div>
	</div>
	<?/* <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"promotion-service-order",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "index-service-order",
		"DIAL_FORM_BUTTON" => "Заказать",
		"DIAL_FORM_CAPTION" => "Хочу продвинуть сайт",
		"DIAL_PHONE_PLACEHOLDER" => "Введите Ваш телефон",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "N",
		"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"WEB_FORM_ID","RESULT_ID"=>"RESULT_ID",),
		"WEB_FORM_ID" => "4"
	)
);?>
	<div class="brif-link">
		<div class="center">
 <a target="_blank" href="https://docs.google.com/forms/d/10cfbE7PctxRiR1po_vHFU9o-YIQ_e5GTBpPJgdgswMQ/viewform?edit_requested=true" class="brif-link__item">Заполнить бриф</a>
		</div>
		</div>*/?>
		<div class="additional-services">
			<h2 class="h2">Дополнительные услуги</h2>
			<div class="additional-services__wrapper">
				<div class="center">
					<div class="additional-services__item _1">
						Контент-<br>
						маркетинг
					</div>
					<div class="additional-services__item _2 _blue">
						Регистрация<br>
						в каталоге
					</div>
					<a href="/services/audit/" class="additional-services__item _3">Проведение<br>
					аудитов</a>
					<div class="additional-services__item _4 _blue">
						Снятие<br>
						санкций
					</div>
					<div class="additional-services__item _5">
						Переход на<br>
						https
					</div>
				</div>
			</div>
		</div>
		<?$APPLICATION->IncludeComponent("bitrix:news.list", "reviews_about", array(
			"IBLOCK_ID" => "8",
			"NEWS_COUNT" => "1",
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"PROPERTY_CODE" => array("REVIEW"),
		));?> 
	</div>
<?/*<div class="related-services">
	<div class="center">
 <span class="related-title">Сопутствующие услуги:</span>
		<div class="related-links">
 <a href="/sozdanie-sajta/khosting/">хостинг,</a> <a href="/sozdanie-sajta/domen/">домен,</a> <a href="/sozdanie-sajta/">создание сайта,</a> <a href="/kontekstnaya-reklama/">контекстная реклама,</a> <a href="/smm/">SMM</a>
		</div>
	</div>
	</div>*/?>
	<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>