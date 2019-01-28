<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$APPLICATION->SetPageProperty('subtitle', $arResult['PROPERTIES']['SUBTITLE']['VALUE']);
$APPLICATION->SetPageProperty('feedback_title', $arResult['PROPERTIES']['FEEDBACK_TITLE']['VALUE']);
?>
    <a href="#tariff" class="inner-callback button button_grey button_arrow">
        <div class="button__arrow-text">Узнать стоимость услуги</div>
        <div class="button__arrow"></div>
    </a>
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
                    <span><?= $arResult['PROPERTIES']['STAFF_COUNT']['VALUE'] ?></span>
                    <?= Helpers::declOfNum($arResult['PROPERTIES']['STAFF_COUNT']['VALUE'], array('Человек', 'Человека', 'Человек')) ?>
                </div>
                <div class="info__stat-text">Будут работать над вашим проектом</div>
            </div>
        </div>
        <div class="info__wrap-big">
            <div class="services _seo">
                <ul class="services__list">
                    <?
                    foreach ($arResult['PROPERTIES']['SERVICES']['VALUE'] as $key => $value): ?>
                        <li class="services__item">
                            <div class="services-item">
                                <div class="services-item__title">
                                    <div class="services-item__name"><?= $arResult['PROPERTIES']['SERVICES']['DESCRIPTION'][$key] ?></div>
                                    <div class="services-item__arrow"></div>
                                </div>
                                <div class="services-item__info"><?= $value ?></div>
                            </div>
                        </li>
                    <?endforeach ?>
                </ul>
            </div>
        </div>
    </div>
<?
if (!empty($arResult['PROPERTIES']['TARIFF_SECTION']['VALUE'])): ?>
    <div class="tariff">
        <div class="tariff__title page-title" id="tariff"><?= $arResult['PROPERTIES']['TARIFF_TITLE']['VALUE'] ?></div>
        <?
        $APPLICATION->IncludeComponent("bitrix:news.list", "tariff", array(
            "IBLOCK_ID" => "7",
            "PARENT_SECTION" => $arResult['PROPERTIES']['TARIFF_SECTION']['VALUE'],
            "NEWS_COUNT" => "10",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PROPERTY_CODE" => array("PRICE")
        )); ?>
    </div>
<?endif ?>
<?
if ($arResult['ID'] == 205):?>
    <div class="strategy">
        <div class="strategy__title">Индивидуальная стратегия</div>
        <p>Мы можем разработать индивидуальную стратегию по комплексной аналитике вашего бизнеса и анализу ваших
            подрядчиков.</p>
        <ol>
            <li>Проанализируем полный путь вашего клиента от запроса в поисковой системе до оплаты товара в корзине.</li>
            <li>Настроим сквозную аналитику для проектов любой сложности.</li>
            <li>Внедрим или настроим уже внедренную CRM для максимальной эффективности.</li>
            <li>Проведем корреляцию между вашими заявками и любыми онлайн/оффлайн каналами.</li>
        </ol>
        <div class="button button_oragne strategy__button js-popup-button" data-popup="_personal">Получить персональное предложение!</div>
    </div>
<?endif; ?>
    <div class="page-title"><?= (!empty($arResult['PROPERTIES']['GET_TITLE']['VALUE']) ? $arResult['PROPERTIES']['GET_TITLE']['VALUE'] : 'Что вы получите работая с нами') ?></div>
    <div class="info _form">
        <div class="info__wrap-big">
            <div class="info__list">
                <?
                if (!empty($arResult['PROPERTIES']['GET_LIST']['VALUE'])): ?>
                    <?
                    foreach ($arResult['PROPERTIES']['GET_LIST']['VALUE'] as $key => $value): ?>
                        <div class="info__list-item">
                            <div class="info__list-name"><?= $arResult['PROPERTIES']['GET_LIST']['DESCRIPTION'][$key] ?></div>
                            <div class="info__list-text"><?= $value ?></div>
                        </div>
                    <?endforeach ?>
                <? else: ?>
                    <div class="info__list-item">
                        <div class="info__list-name">Правильное Digital агентство</div>
                        <div class="info__list-text">Мы ориентируемся на настоящие бизнес-показатели, влияющие на
                            развитие вашей компании. Другие смотрят на конверсию сайта,мы на средний чек и
                            маржинальность. Мы говорим “нет” неактуальным стереотипам!
                        </div>
                    </div>
                    <div class="info__list-item">
                        <div class="info__list-name">Квалифицированные сотрудники</div>
                        <div class="info__list-text">Уникальная внутренняя система обучения специалистов и контроль
                            качества на всех этапах.
                        </div>
                    </div>
                    <div class="info__list-item">
                        <div class="info__list-name">Выполнение работ под ключ</div>
                        <div class="info__list-text">Мы берем на себя все обязательства по проекту, от планирования
                            списка необходимых работ, до их реализации.
                        </div>
                    </div>
                    <div class="info__list-item">
                        <div class="info__list-name">Большая работа над проектом</div>
                        <div class="info__list-text">По каждому проекту выполняется обширный чек-лист, что гарантирует
                            качество и объем выполняемых работ.
                        </div>
                    </div>
                <?endif ?>
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
<?
if (!empty($arResult['PROPERTIES']['STEPS_SECTION']['VALUE'])): ?>
    <div class="page-title"><?= $arResult['PROPERTIES']['STEPS_TITLE']['VALUE'] ?></div>
    <?
    $APPLICATION->IncludeComponent("bitrix:news.list", "seo-slider", array(
        "IBLOCK_ID" => "1",
        "PARENT_SECTION" => $arResult['PROPERTIES']['STEPS_SECTION']['VALUE'],
        "NEWS_COUNT" => "4",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "PROPERTY_CODE" => array("BUTTON_TITLE")
    )); ?>
<?endif ?>
<?
if (!empty($arResult['PROPERTIES']['CASES_SECTION']['VALUE'])) {
    if ($arResult['PROPERTIES']['CASES_SECTION']['VALUE'] == 23) {
        $APPLICATION->IncludeComponent("bitrix:news.list", "development-slider", array(
            "IBLOCK_ID" => "11",
            "PARENT_SECTION" => $arResult['PROPERTIES']['CASES_SECTION']['VALUE'],
            "NEWS_COUNT" => "10",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PROPERTY_CODE" => array("TYPE")
        ));
    } else {
        $APPLICATION->IncludeComponent("bitrix:news.list", "cases-slider", array(
            "IBLOCK_ID" => "11",
            "PARENT_SECTION" => $arResult['PROPERTIES']['CASES_SECTION']['VALUE'],
            "NEWS_COUNT" => "10",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PROPERTY_CODE" => array("TYPE")
        ));
    }
}
