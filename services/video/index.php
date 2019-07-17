<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Video Production");
$APPLICATION->SetPageProperty("description", "Video Production");
$APPLICATION->SetTitle("Video Production");
$APPLICATION->SetPageProperty("subtitle", "Мы привыкли делать «как для себя» с самого начала пути – идея видеопродакшна родилась из digital-маркетингового агентства. Соответственно, у нас есть понимание, какой результат должен быть на выходе.");
$APPLICATION->SetPageProperty("feedback_title", "Хотите получать клиентов?");
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss("/local/templates/dial/template/css/seo.css");
Asset::getInstance()->addCss("/local/templates/dial/template/css/tariff-table.css");
Asset::getInstance()->addCss("/local/templates/.default/components/bitrix/news.list/video-reviews/style.css");
?>
<br><br>
<?/*
<div class="page-title page-title_seo">Кому подходит данный тариф?</div>
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
*/?>
<div class="page-title page-title_seo">В чем разница между плохим и хорошим продакшном</div>
<div class="info">
<div class="info__wrap-small">
<div class="info__head">
<div class="info__head-title">Полный спектр услуг</div>
<div class="info__head-text">Вам не понадобится докупать услуги, этого комплекса хватит для достижения
высокоэффективных результатов
</div>
</div>
<div class="info__stat">
<div class="info__stat-title">
<span>5</span>
Человек
</div>
<div class="info__stat-text">Будут работать над вашим проектом</div>
</div>
</div>
<div class="info__wrap-big">
<div class="services _seo">
<ul class="services__list">
<li class="services__item">
<div class="services-item">
<div class="services-item__title">
<div class="services-item__name">Учитываем сразу все детали</div>
<div class="services-item__arrow"></div>
</div>
</div>
</li>
<li class="services__item">
<div class="services-item">
<div class="services-item__title">
<div class="services-item__name">Подходим к работе творчески</div>
<div class="services-item__arrow"></div>
</div>
</div>
</li><li class="services__item">
<div class="services-item">
<div class="services-item__title">
<div class="services-item__name">Делаем «как для себя»</div>
<div class="services-item__arrow"></div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="tariff">
    <div class="tariff__title page-title" id="tariff">Стоимость и сроки</div>
    <?
    $APPLICATION->IncludeComponent("bitrix:news.list", "tariff", array(
        "IBLOCK_ID" => "7",
        "PARENT_SECTION" => 79,
        "NEWS_COUNT" => "10",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "PROPERTY_CODE" => array("PRICE")
    )); ?>
</div>
</div>
</div>
<div class="feedback">
    <div class="container-outer">
        <div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?= TEMPLATE_PATH ?>/img/feedback2.jpg')">
            <div class="container-inner">
                <div class="feedback__wrap-inner">
                    <div class="feedback__head">
                        <div class="feedback__title _cmon">Хочу снять ролик для компании</div>
                        <div class="feedback__subtitle-text">Отправьте нам заявку</div>
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
        <div class="page-title page-title_seo">Что мы делаем/не делаем</div>
        <div class="symbol">
            <div class="symbol__list">
                <div class="symbol__item symbol__item_plus">
                    Сложные проекты с нестандартными требованиями.
                </div>
                <div class="symbol__item symbol__item_plus">
                    Если необходимо, будем вносить правки по ночам.
                </div>
                <div class="symbol__item symbol__item_plus">
                    Решаем конкретные маркетинговые и коммуникационные задачи.
                </div>
            </div>
            <div class="symbol__list">
                <div class="symbol__item symbol__item_minus">
                    Свадебные съемки.
                </div>
                <div class="symbol__item symbol__item_minus">
                    Проекты с неадекватными требованиями.
                </div>
                <div class="symbol__item symbol__item_minus">
                    Все, что противоречит закону.
                </div>
            </div>
        </div>
<div class="page-title page-title_seo">
    Часто задаваемые вопросы
</div>
        <div class="info _form">
            <div class="info__wrap-big">
                <div class="info__list">
                        <div class="info__list-item">
                            <div class="info__list-name">Можете ли вы посоветовать специалистов, которые подготовят наших участников съемки (макияж и пр.)?</div>
                            <div class="info__list-text">Разумеется, у нас есть проверенные специалисты, которых мы можем привлечь к процессу.
                            </div>
                        </div>
                        <div class="info__list-item">
                            <div class="info__list-name">Как быть, если мы не смогли определиться с достойной площадкой для съемки?
                            </div>
                            <div class="info__list-text">Без паники! Для этого есть мы :)
                            </div>
                        </div>
                        <div class="info__list-item">
                            <div class="info__list-name">На сколько дублей можно рассчитывать в рамках определенного пакета услуг?</div>
                            <div class="info__list-text">Мы привыкли работать без «ляпов». Делать полусырые ролики, которые потом будет стыдно показать даже в портфолио, – явно не в наших интересах. Поэтому мы работаем до «идеала»!
                            </div>
                        </div>
                        <div class="info__list-item">
                            <div class="info__list-name">Кто поможет разместить видео на сайте / промо-странице и реализовать маркетинговую стратегию по его продвижению?</div>
                            <div class="info__list-text">Компания Dial выполнит данную работу</div>
                        </div>
                </div>
            </div>
            <div class="info__wrap-small">
                <div class="feedback-form _consult">
                    <div class="feedback-form__title">Получить консультацию</div>
                    <div class="feedback-form__text _white">Оставьте нам свои данные и наш специалист ответит на
                        интересующие вас вопросы.
                    </div>
                    <?
                    $APPLICATION->IncludeComponent("bitrix:form.result.new", "phone", array(
                        "WEB_FORM_ID" => "4",
                        "LIST_URL" => "",
                        "AJAX_MODE" => "Y",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_HISTORY" => "N",
                    )); ?>
                </div>
            </div>
        </div>
        <div class="reviews-video">
            <div class="reviews-video__item" style="width: 100%" data-fancybox href="https://www.youtube.com/watch?v=NNpk78i0RWc&autoplay=1">
                <img src="https://dialweb.ru/local/templates/dial/template/img/banner.jpg" alt="">
                <div class="reviews-video__box">
                    <div class="reviews-video__box-inner">
                        <div class="reviews-video__title">Dial</div>
                        <div class="reviews-video__sub-title">
                            Правильное Digital Агенство
                        </div>
                    </div>
                </div>
            </div>
        </div>
<? $APPLICATION->IncludeComponent("bitrix:news.list", "cases-slider", array(
    "IBLOCK_ID" => "11",
    "PARENT_SECTION" => "",
    "NEWS_COUNT" => "10",
    "SET_TITLE" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "PROPERTY_CODE" => array("TYPE")
)); ?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
