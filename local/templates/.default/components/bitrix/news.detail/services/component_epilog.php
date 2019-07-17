<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Localization\Loc;
if (LANGUAGE_ID == 'ru') {
    $APPLICATION->SetPageProperty('subtitle', $arResult['PROPERTIES']['SUBTITLE']['VALUE']);
    $APPLICATION->SetPageProperty('feedback_title', $arResult['PROPERTIES']['FEEDBACK_TITLE']['VALUE']);
    $APPLICATION->SetPageProperty('hide_audit', $arResult['PROPERTIES']['SHOW_AUDIT']['VALUE']);
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
                    <? foreach ($arResult['PROPERTIES']['SERVICES']['VALUE'] as $key => $value): ?>
                        <li class="services__item">
                            <div class="services-item">
                                <div class="services-item__title">
                                    <div class="services-item__name"><?= $arResult['PROPERTIES']['SERVICES']['DESCRIPTION'][$key] ?></div>
                                    <div class="services-item__arrow"></div>
                                </div>
                                <div class="services-item__info"><?= $value ?></div>
                            </div>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <?
    if (!empty($arResult['PROPERTIES']['TARIFF_SECTION']['VALUE'])): ?>
        <div class="tariff">
            <h2 class="tariff__title page-title" id="tariff"><?= $arResult['PROPERTIES']['TARIFF_TITLE']['VALUE'] ?></h2>
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
    <? endif ?>

    <?
    if ($arResult['ID'] == 205):?>
        <div class="strategy">
            <div class="strategy__title">Индивидуальная стратегия</div>
            <p>Мы можем разработать индивидуальную стратегию по комплексной аналитике вашего бизнеса и анализу ваших
                подрядчиков.</p>
            <ol>
                <li>Проанализируем полный путь вашего клиента от запроса в поисковой системе до оплаты товара в корзине.
                </li>
                <li>Настроим сквозную аналитику для проектов любой сложности.</li>
                <li>Внедрим или настроим уже внедренную CRM для максимальной эффективности.</li>
                <li>Проведем корреляцию между вашими заявками и любыми онлайн/оффлайн каналами.</li>
            </ol>
            <div class="button button_oragne strategy__button js-popup-button" data-popup="_personal">Получить персональное
                предложение!
            </div>
        </div>
    <? endif; ?>
    <h2 class="page-title"><?= (!empty($arResult['PROPERTIES']['GET_TITLE']['VALUE']) ? $arResult['PROPERTIES']['GET_TITLE']['VALUE'] : 'Что вы получите работая с нами') ?></h2>
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
                    <? endforeach ?>
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
                <? endif ?>
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
        <h2 class="page-title"><?= $arResult['PROPERTIES']['STEPS_TITLE']['VALUE'] ?></h2>
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
    <? endif ?>
    <?
    if (!empty($arResult['PROPERTIES']['STATIC_PAGES']['VALUE'])): ?>

        <h2 class="page-title 6" id="static"><?= $arResult['PROPERTIES']['STATIC_PAGES_TITLE']['VALUE'] ?></h2>
        <?
        $APPLICATION->IncludeComponent("bitrix:news.list", "static-links_box", array(
            "IBLOCK_ID" => "15",
            "PARENT_SECTION" => $arResult['PROPERTIES']['STATIC_PAGES']['VALUE'],
            "NEWS_COUNT" => "10",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PROPERTY_CODE" => array("LINK")
        )); ?>

    <? endif ?>
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
    }?>
    <?
} else {
    $APPLICATION->SetPageProperty('subtitle', $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SUBTITLE']['VALUE']);
    $APPLICATION->SetPageProperty('feedback_title', $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_FEEDBACK_TITLE']['VALUE']);
    $APPLICATION->SetPageProperty('hide_audit', $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SHOW_AUDIT']['VALUE']);
    ?>
    <a href="#tariff" class="inner-callback button button_grey button_arrow">
        <div class="button__arrow-text">Find out the cost</div>
        <div class="button__arrow"></div>
    </a>
    <div class="info">
        <div class="info__wrap-small">
            <div class="info__head">
                <div class="info__head-title">Full range of services</div>
                <div class="info__head-text">You don’t need to buy in addition services, this complex is enough for reaching highly effective results</div>
            </div>
            <div class="info__stat">
                <div class="info__stat-title">
                    <span><?= $arResult['PROPERTIES']['STAFF_COUNT']['VALUE'] ?></span>
                    <?= Helpers::declOfNum($arResult['PROPERTIES']['STAFF_COUNT']['VALUE'], array('Person', 'Persons', 'Person')) ?>
                </div>
                <div class="info__stat-text">Will work on your project</div>
            </div>
        </div>
        <div class="info__wrap-big">
            <div class="services _seo">
                <ul class="services__list">
                    <? foreach ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SERVICES']['VALUE'] as $key => $value): ?>
                        <li class="services__item">
                            <div class="services-item">
                                <div class="services-item__title">
                                    <div class="services-item__name"><?= $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SERVICES']['DESCRIPTION'][$key] ?></div>
                                    <div class="services-item__arrow"></div>
                                </div>
                                <div class="services-item__info"><?= $value ?></div>
                            </div>
                        </li>
                    <? endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <?
    if (!empty($arResult['PROPERTIES']['TARIFF_SECTION']['VALUE'])): ?>
        <div class="tariff">
            <h2 class="tariff__title page-title" id="tariff"><?= $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TARIFF_TITLE']['VALUE'] ?></h2>
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
    <? endif ?>

    <?
    if ($arResult['ID'] == 205):?>
        <div class="strategy">
            <div class="strategy__title">Индивидуальная стратегия</div>
            <p>Мы можем разработать индивидуальную стратегию по комплексной аналитике вашего бизнеса и анализу ваших
                подрядчиков.</p>
            <ol>
                <li>Проанализируем полный путь вашего клиента от запроса в поисковой системе до оплаты товара в корзине.
                </li>
                <li>Настроим сквозную аналитику для проектов любой сложности.</li>
                <li>Внедрим или настроим уже внедренную CRM для максимальной эффективности.</li>
                <li>Проведем корреляцию между вашими заявками и любыми онлайн/оффлайн каналами.</li>
            </ol>
            <div class="button button_oragne strategy__button js-popup-button" data-popup="_personal">Получить персональное
                предложение!
            </div>
        </div>
    <? endif; ?>
    <h2 class="page-title"><?= (!empty($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_GET_TITLE']['VALUE']) ? $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_GET_TITLE']['VALUE'] : 'What do you get working with us') ?></h2>
    <div class="info _form">
        <div class="info__wrap-big">
            <div class="info__list">
                <?
                if (!empty($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_GET_LIST']['VALUE'])){
                    ?>
                    <?
                    foreach ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_GET_LIST']['VALUE'] as $key => $value): ?>
                        <div class="info__list-item">
                            <div class="info__list-name"><?= $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_GET_LIST']['DESCRIPTION'][$key] ?></div>
                            <div class="info__list-text"><?= $value ?></div>
                        </div>
                    <? endforeach ?>
                <?
                } else {
                    ?>
                    <div class="info__list-item">
                        <div class="info__list-name">Customer accountо</div>
                        <div class="info__list-text">The unique development of the company, within the account, you can monitor the progress of work, traffic and positions,
                            communicate with experts, exchange with the accounting documents.
                        </div>
                    </div>
                    <div class="info__list-item">
                        <div class="info__list-name">Qualified staff</div>
                        <div class="info__list-text">A unique internal system of training and quality control at all stages.</div>
                    </div>
                    <div class="info__list-item">
                        <div class="info__list-name">Turnkey works</div>
                        <div class="info__list-text">We undertake all obligations under the project from company planning and auditing to the implementation of all technical work.</div>
                    </div>
                    <div class="info__list-item">
                        <div class="info__list-name">A great deal of work under the project</div>
                        <div class="info__list-text">An extensive check-list is carried out for every project that guarantee the quality and volume of work performed.
                            It uses its own analytical tools and personal strategy. All works are transparent and duplicated in your personal account.
                        </div>
                    </div>
                    <?
                }
                ?>
            </div>
        </div>
        <div class="info__wrap-small">
            <div class="feedback-form _consult">
                <div class="feedback-form__title">Take opinion</div>
                <div class="feedback-form__text _white">
                    Leave the contact details and our specialist will answer on your question
                </div>
                <?
                $APPLICATION->IncludeComponent("bitrix:form.result.new", "phone", array(
                    "WEB_FORM_ID" => "4",
                    "LIST_URL" => "",
                    "AJAX_MODE" => "Y",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_HISTORY" => "N",
                ));
                ?>
            </div>
        </div>
    </div>
    <?
    if (!empty($arResult['PROPERTIES']['STEPS_SECTION']['VALUE'])){
        ?>
        <h2 class="page-title"><?= $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_STEPS_TITLE']['VALUE'] ?></h2>
        <?
        $APPLICATION->IncludeComponent("bitrix:news.list", "seo-slider", array(
            "IBLOCK_ID" => "1",
            "PARENT_SECTION" => $arResult['PROPERTIES']['STEPS_SECTION']['VALUE'],
            "NEWS_COUNT" => "4",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PROPERTY_CODE" => array("BUTTON_TITLE")
        ));
    }
    if (!empty($arResult['PROPERTIES']['STATIC_PAGES']['VALUE'])){
        ?>
        <h2 class="page-title" id="static"><?= $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_STATIC_PAGES_TITLE']['VALUE'] ?></h2>
        <?
        $APPLICATION->IncludeComponent("bitrix:news.list", "static-links_box", array(
            "IBLOCK_ID" => "15",
            "PARENT_SECTION" => $arResult['PROPERTIES']['STATIC_PAGES']['VALUE'],
            "NEWS_COUNT" => "10",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "PROPERTY_CODE" => array("LINK")
        ));
    }

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
}
?>