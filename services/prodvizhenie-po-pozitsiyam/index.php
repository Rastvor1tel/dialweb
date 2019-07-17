<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Продвижение сайта по позициям, ключевым словам в ТОП 10 поисковых систем");
$APPLICATION->SetPageProperty("description", "Продвижение сайта по позициям в ТОП 10 поисковых систем. Комплексные услуги по поисковому продвижению сайтов в интернете.");
$APPLICATION->SetTitle("Продвижение по позициям");
$APPLICATION->SetPageProperty("subtitle", "Основная цель продвижения сайта по позициям: вывод продвигаемых ключевых запросов в ТОП поисковых систем Яндекс и Google");
$APPLICATION->SetPageProperty("feedback_title", "Хотите получать клиентов?");
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addCss("/local/templates/dial/template/css/seo.css");

?>
<br><br>
<div class="page-title page-title_seo">Кому подходит данный тариф?</div>
<div class="numbers__list">
    <div class="numbers__item angle">
        Сайтам, ориентирующихся на поддержание имиджа
    </div>
    <div class="numbers__item angle">
        Сайтам, с невысоким бюджетом
    </div>
    <div class="numbers__item angle">
        Сайтам-визиткам с небольшим количеством страниц
    </div>
    <div class="numbers__item angle">
        Сайтам с узкой тематикой
    </div>
</div>
<div class="page-title page-title_seo">Плюсы и минусы тарифа</div>
<div class="symbol">
    <div class="symbol__list">
        <div class="symbol__item symbol__item_plus">
            Ваши позиции в ТОПе Яндекс и Google
        </div>
        <div class="symbol__item symbol__item_plus">
            Прозрачные условия: знаете отдельную стоимость запроса
        </div>
        <div class="symbol__item symbol__item_plus">
            Рост целевой аудитории сайта
        </div>
        <div class="symbol__item symbol__item_plus">
            Долгосрочный эффект: позиции плотно закрепляются в выдаче
        </div>
    </div>
    <div class="symbol__list">
        <div class="symbol__item symbol__item_minus">
            Сложность вывода нового продукта за короткое время
        </div>
        <div class="symbol__item symbol__item_minus">
            Трудоемкость в работе с крупными сайтами (порталы, большие интернет-магазины)
        </div>
    </div>
</div>
<div class="page-title page-title_seo">Тарифы</div>
<div class="rate">
    <div class="rate__list">
        <div class="rate-item angle">
            <div class="rate-item__content" data-title="Тариф">
                <div class="rate-item__title">Абонемент</div>
                <div class="rate-item__description">
                    Фиксированная оплата за работу над ростом позиций в выдаче
                </div>
                <div class="rate-item__adv">
                    ПЛЮС ТАРИФА:
                </div>
                <div class="rate-item__description">
                    Экономия вашего бюджета при нахождении позиций в ТОПе
                </div>
            </div>
        </div>
        <div class="rate-item angle">
            <div class="rate-item__content" data-title="Тариф">
                <div class="rate-item__title">Абонемент + премия</div>
                <div class="rate-item__description">
                    Фиксированная оплата за вывод позиций и премия за нахождения запросов в ТОПе
                </div>
                <div class="rate-item__adv">
                    ПЛЮС ТАРИФА:
                </div>
                <div class="rate-item__description">
                    Дополнительный стимул удержания высоких позиций ТОПа, причем премия варьируется в зависимости от позиций ТОПа
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-title page-title_seo">Стоимость и сроки</div>
<div class="cost">
    <div class="cost__left">
        <div class="cost__list">
            <div class="cost-icon">
                <div class="cost-icon__image cost-icon__image_point">

                </div>
                <div class="cost-icon__title">На 1 регион</div>
                <div class="cost-icon__price">от 15 000 руб.</div>
            </div>
            <div class="cost-icon">
                <div class="cost-icon__image cost-icon__image_way">

                </div>
                <div class="cost-icon__title">На несколько регионов
                </div>
                <div class="cost-icon__price">от 18 000 руб.</div>
            </div>
            <div class="cost-icon">
                <div class="cost-icon__image cost-icon__image_moscow">

                </div>
                <div class="cost-icon__title">На Москву</div>
                <div class="cost-icon__price">от 20 000 руб.</div>
            </div>
        </div>
    </div>
    <div class="cost__right">
        <div class="cost-info">
            <div class="cost-info__title">
                Сроки продвижения зависят от:
            </div>
            <div class="cost-info__description">
                - региона;
                <br>- конкурентности тематики;
                <br>- сложности ключевых запросов;
                <br>- возраста домена
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
        <? 
        $arrFilter = array("!ID"=>424);
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
        <div class="one-two-three">
            <div class="one-two-three__list">
                <div class="one-two-three__item">
                    <div class="one-two-three__title">
                        1 этап
                    </div>
                    <div class="one-two-three__description">
                        Появляются первые позиции в выдаче Яндекс и Google. Счетчики статистики начинают фиксировать целевой трафик.
                    </div>
                </div>
                <div class="one-two-three__item">
                    <div class="one-two-three__title">
                        2 этап
                    </div>
                    <div class="one-two-three__description">
                        Выход части запросов в ТОП 10, заметный рост трафика. Первые заказы через корзину на сайте.
                    </div>
                </div>
                <div class="one-two-three__item">
                    <div class="one-two-three__title">
                        3 этап
                    </div>
                    <div class="one-two-three__description">
                        Выход 89% в ТОП 10, опережение основных конкурентов по высокочастотным запросам, заметный рост заказов с сайта.
                    </div>
                </div>
            </div>
        </div>
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