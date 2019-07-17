<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продвижение сайтов в Туле с оплатой по лидам.");
$APPLICATION->SetPageProperty("description", "Продвижение сайтов с оплатой за лиды. Платите только за реальные заявки и звонки!");
$APPLICATION->SetTitle("Продвижение по лидам");
$APPLICATION->SetPageProperty("subtitle", "Основная цель продвижения по лидам: увеличение количества целевых обращений
в компанию с сайта (например, рост количества заявок, увеличение количества целевых звонков)");
$APPLICATION->SetPageProperty("feedback_title", "Хотите получать клиентов?");
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss("/local/templates/dial/template/css/seo.css");
?>
<br><br>
<div class="page-title page-title_seo">Кому подходит данный тариф?</div>
<div class="numbers__list">
	<div class="numbers__item angle">
		Тем, у кого есть на сайте товар с четкой ценой
	</div>
	<div class="numbers__item angle">
		Тем, у кого ведется или планируется внедрение система учета заявок и звонков (колл-трекинг)
	</div>
</div>
<div class="page-title page-title_seo">Плюсы и минусы тарифа</div>
<div class="symbol">
	<div class="symbol__list">
		<div class="symbol__item symbol__item_plus">
			Прозрачный контроль за продажами с сайта
		</div>
		<div class="symbol__item symbol__item_plus">
			Подробная аналитика показателей сайта
		</div>
		<div class="symbol__item symbol__item_plus">
			Высокий уровень конверсии с сайта
		</div>
		<div class="symbol__item symbol__item_plus">
			Продвижение большого количества товаров и услуг
		</div>
	</div>
	<div class="symbol__list">
		<div class="symbol__item symbol__item_minus">
			Самый дорогой тариф продвижения сайта
		</div>
		<div class="symbol__item symbol__item_minus">
			Подходит для рынка узкой направленности
		</div>
	</div>
</div>

<div class="page-title page-title_seo">Стоимость и сроки</div>
<div class="cost">
	<div class="cost__left">
		<div class="cost-calc">
			<div class="cost-calc__list">
				<div class="cost-calc__item">
					<div class="cost-calc__title">
						Первые 3 месяца
					</div>
				</div>
				<div class="cost-calc__item">
					<div class="cost-calc__description">
						Фиксированная стоимость работ в месяц
					</div>
					<div class="cost-calc__price">
						от 40 000 рублей
					</div>
				</div>
			</div>
			<div class="cost-calc__list">
				<div class="cost-calc__item">
					<div class="cost-calc__title">
						после 3-х месяцев работ
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_eq">
					<div class="cost-calc__description">
						Фиксированная стоимость работ в месяц
					</div>
					<div class="cost-calc__price">
						от 40 000 рублей
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_plus">
					<div class="cost-calc__description">
						Количество привлеченных
					</div>
					<div class="cost-calc__price">
						ЛИДОВ
					</div>
				</div>
				<div class="cost-calc__item cost-calc__item_multiply">
					<div class="cost-calc__description">
						Стоимость лида
					</div>
					<div class="cost-calc__price">
						от 300 рублей
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
</div>
</div>
<div class="feedback">
    <div class="container-outer">
        <div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?= TEMPLATE_PATH ?>/img/feedback2.jpg')">
            <div class="container-inner">
                <div class="feedback__wrap-inner">
                    <div class="feedback__head">
                        <div class="feedback__title _cmon">Хочу продвинуть сайт</div>
                        <!-- <div class="feedback__subtitle-text">Наш специалист перезвонит Вам, и предложит варианты решения, а так же ответит на все Ваши вопросы.</div> -->
                    </div>
                    <? $APPLICATION->IncludeComponent("bitrix:form.result.new", "feedback", array(
                        "WEB_FORM_ID" => "2",
                        "LIST_URL" => "",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_HISTORY" => "N",
                    )); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-outer">
    <div class="container-inner">
<div class="page-title page-title_seo">
	Дополнительные услуги
</div>
<div class="info">
	<ul class="services__list">
		<li class="services__item">
			<div class="services-item">
				<div class="services-item__title">
					<div class="services-item__name">Контент- маркетинг
					</div>
					<div class="services-item__arrow"></div>
				</div>
				<div class="services-item__info">Cовокупность маркетинговых приёмов, основанных на создании и распространении уникальной, полезной для людей информации с целью вызвать доверие и привлечь потенциальных клиентов.</div>
			</div>
		</li>
		<li class="services__item">
			<div class="services-item">
				<div class="services-item__title">
					<div class="services-item__name">Регистрация в каталоге</div>
					<div class="services-item__arrow"></div>
				</div>
				<div class="services-item__info">Один из методов продвижения сайта и компании в сети Интернет. Предполагает размещение информации о сайте и услугах компании в различных каталогах, справочниках организаций.</div>
			</div>
		</li>
		<li class="services__item">
			<div class="services-item">
				<div class="services-item__title">
					<div class="services-item__name">Проведение аудитов
					</div>
					<div class="services-item__arrow"></div>
				</div>
				<div class="services-item__info">Поможет избежать сохранения на сайте возможных ошибок, которые усложняют работу с сайтом со стороны пользователя и затрудняют процесс SEO-продвижения.
				</div>
			</div>
		</li>
		<li class="services__item">
			<div class="services-item">
				<div class="services-item__title">
					<div class="services-item__name">Снятие санкций</div>
					<div class="services-item__arrow"></div>
				</div>
				<div class="services-item__info">Поможем быстро вывести ваш сайт из-под санкций поисковых систем. Определим причины, устраним ошибки оптимизации, чтобы сайт смог успешно существовать и развиваться в Интернете.</div>
			</div>
		</li>
		<li class="services__item">
			<div class="services-item">
				<div class="services-item__title">
					<div class="services-item__name">Переход на https</div>
					<div class="services-item__arrow"></div>
				</div>
				<div class="services-item__info">Необходим для установки безопасного соединения и повышения доверия к сайту со стороны поисковых систем. Выполним корректный “переезд” сайта с протокола http на https без последствий.</div>
			</div>
		</li>
	</ul>
</div>
<? $APPLICATION->IncludeComponent("bitrix:news.list", "reviews_about", array(
            "IBLOCK_ID" => "8",
            "NEWS_COUNT" => "1",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "PROPERTY_CODE" => array("REVIEW"),
        )); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>