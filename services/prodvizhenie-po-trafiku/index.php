<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продвижение с оплатой за трафик. Трафиковое продвижение сайтов в Туле,");
$APPLICATION->SetPageProperty("description", "Продвижение сайтов по трафику, раскрутка с оплатой за привлеченный трафик.");
$APPLICATION->SetTitle("Продвижение по трафику");
$APPLICATION->SetPageProperty("subtitle", "Основная цель продвижения по трафику: увеличение посещаемости вашего сайта путем
привлечения целевой аудитории с помощью поискового продвижения сайта.");
$APPLICATION->SetPageProperty("feedback_title", "Хотите получать клиентов?");
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss("/local/templates/dial/template/css/seo.css");
?><br>
 <br>
<div class="page-title page-title_seo">
	 Кому подходит данный тариф?
</div>
<div class="numbers__list">
	<div class="numbers__item angle">
		 Сайтам с большим количеством страниц(от 1 000 страниц) и большим списком запросов
	</div>
	<div class="numbers__item angle">
		 Информационным многостраничным сайтам с потенциально большим семантическим ядром
	</div>
	<div class="numbers__item angle">
		 Интернет-порталам со структурированными каталогами и большим количеством разделов
	</div>
</div>
<div class="page-title page-title_seo">
	 Плюсы и минусы тарифа
</div>
<div class="symbol">
	<div class="symbol__list">
		<div class="symbol__item symbol__item_plus">
			 Рост целевого трафика на сайте
		</div>
		<div class="symbol__item symbol__item_plus">
			 Оплата только фактических переходов
		</div>
		<div class="symbol__item symbol__item_plus">
			 Широкая география привлечения клиентов
		</div>
		<div class="symbol__item symbol__item_plus">
			 Продвижение большого количества товаров и услуг
		</div>
	</div>
	<div class="symbol__list">
		<div class="symbol__item symbol__item_minus">
			 Бюджет зависит от количества и качества трафика
		</div>
		<div class="symbol__item symbol__item_minus">
			 Вероятность притока нецелевой аудитории;
		</div>
		<div class="symbol__item symbol__item_minus">
			 Практически отсутствует имиджевый эффект
		</div>
	</div>
</div>
<div class="page-title page-title_seo">
	 Стоимость и сроки
</div>
<div class="cost">
	<div class="cost__left">
		<div class="cost-calc">
			<div class="cost-calc__list cost-calc__list_half">
				<div class="cost-calc__item">
					<div class="cost-calc__title">
						 Сумма итогового платежа
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_eq cost-calc__item_lbracket">
					<div class="cost-calc__description">
						 Общий трафик
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_lm cost-calc__item_minus">
					<div class="cost-calc__description">
						 Базовый трафик
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_lm cost-calc__item_multiply cost-calc__item_rbracket">
					<div class="cost-calc__description">
						 Сезонный коэффициент
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_lm cost-calc__item_multiply">
					<div class="cost-calc__description">
						 Стоимость перехода
					</div>
					<div class="cost-calc__price">
						 от 0,1 рубля
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_lm cost-calc__item_plus">
					<div class="cost-calc__description cost-calc__description_bold">
						 Абонентская плата
					</div>
					<div class="cost-calc__price">
						 от 35 000 рублей
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="cost__right">
		<div class="cost-info">
			<div class="cost-info__title">
				 Сроки продвижения:
			</div>
			<div class="cost-info__description">
				 Результат заметен спустя 1-2 месяца, в зависимости от состояния Вашего ресурса.
			</div>
		</div>
	</div>
</div>
<div class="feedback">
	<div class="container-outer">
	<div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?= TEMPLATE_PATH ?>/img/feedback2.jpg')">
		<!-- <div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<span id=" title="Код PHP: &lt;?= TEMPLATE_PATH ?&gt;">
			 <?= TEMPLATE_PATH ?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>/img/feedback2.jpg')"&gt; -->
			<div class="container-inner">
				<div class="feedback__wrap-inner">
					<div class="feedback__head">
						<div class="feedback__title _cmon">
							 Хочу продвинуть сайт
						</div>
						 <!-- <div class="feedback__subtitle-text">Наш специалист перезвонит Вам, и предложит варианты решения, а так же ответит на все Ваши вопросы.</div> -->
					</div>
					 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"feedback",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"LIST_URL" => "",
		"WEB_FORM_ID" => "2"
	)
);?>
				</div>
			</div>
		</div>
	</div>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews_about",
	Array(
		"IBLOCK_ID" => "8",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "1",
		"PROPERTY_CODE" => array("REVIEW"),
		"SET_TITLE" => "N"
	)
);?>
<div class="container-outer">
	<div class="container-inner">
		<? 
        $arrFilter = array("ID"=>424);
        $APPLICATION->IncludeComponent("bitrix:news.list", "cases-slider", array(
            "IBLOCK_ID" => "11",
            "PARENT_SECTION" => $arResult['PROPERTIES']['CASES_SECTION']['VALUE'],
            "NEWS_COUNT" => "10",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PROPERTY_CODE" => array("TYPE"),
            "FILTER_NAME" => "arrFilter",
        )); ?>
		<div class="page-title page-title_seo">
			 Дополнительные услуги
		</div>
		<div class="info">
			<ul class="services__list">
				<li class="services__item">
				<div class="services-item">
					<div class="services-item__title">
						<div class="services-item__name">
							 Контент- маркетинг
						</div>
						<div class="services-item__arrow">
						</div>
					</div>
					<div class="services-item__info">
						 Cовокупность маркетинговых приёмов, основанных на создании и распространении уникальной, полезной для людей информации с целью вызвать доверие и привлечь потенциальных клиентов.
					</div>
				</div>
 </li>
				<li class="services__item">
				<div class="services-item">
					<div class="services-item__title">
						<div class="services-item__name">
							 Регистрация в каталоге
						</div>
						<div class="services-item__arrow">
						</div>
					</div>
					<div class="services-item__info">
						 Один из методов продвижения сайта и компании в сети Интернет. Предполагает размещение информации о сайте и услугах компании в различных каталогах, справочниках организаций.
					</div>
				</div>
 </li>
				<li class="services__item">
				<div class="services-item">
					<div class="services-item__title">
						<div class="services-item__name">
							 Проведение аудитов
						</div>
						<div class="services-item__arrow">
						</div>
					</div>
					<div class="services-item__info">
						 Поможет избежать сохранения на сайте возможных ошибок, которые усложняют работу с сайтом со стороны пользователя и затрудняют процесс SEO-продвижения.
					</div>
				</div>
 </li>
				<li class="services__item">
				<div class="services-item">
					<div class="services-item__title">
						<div class="services-item__name">
							 Снятие санкций
						</div>
						<div class="services-item__arrow">
						</div>
					</div>
					<div class="services-item__info">
						 Поможем быстро вывести ваш сайт из-под санкций поисковых систем. Определим причины, устраним ошибки оптимизации, чтобы сайт смог успешно существовать и развиваться в Интернете.
					</div>
				</div>
 </li>
				<li class="services__item">
				<div class="services-item">
					<div class="services-item__title">
						<div class="services-item__name">
							 Переход на https
						</div>
						<div class="services-item__arrow">
						</div>
					</div>
					<div class="services-item__info">
						 Необходим для установки безопасного соединения и повышения доверия к сайту со стороны поисковых систем. Выполним корректный “переезд” сайта с протокола http на https без последствий.
					</div>
				</div>
 </li>
			</ul>
		</div>
	</div>
</div>
 <br><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>