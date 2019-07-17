<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$main = ($APPLICATION->getCurPage(false) == '/') ? true : false;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
    <? include($_SERVER["DOCUMENT_ROOT"] . '/local/templates/dial/includes/_head.php'); ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
    <header class="header">
        <? include($_SERVER["DOCUMENT_ROOT"] . '/local/templates/dial/includes/_header.php'); ?>
    </header>
<main class="main">
<? if ($main): ?>
    <div class="banner">
        <div class="container-outer">
            <div class="banner__wrap-outer">
                <div class="container-inner">
                    <div class="banner__wrap-inner">
                        <div class="banner__title"><?=Loc::getMessage("BANNER_TITLE");?></div>
                        <div class="banner__info">
                            <div class="banner__description">
                                <?=Loc::getMessage("BANNER_DESCR");?>
                            </div>
                            <a class="banner__video video-button"
                               href="https://www.youtube.com/watch?v=NNpk78i0RWc&autoplay=1&rel=0&&showinfo=0"
                               data-fancybox>
                                <svg class="video-button__icon">
                                    <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#play"></use>
                                </svg>
                                <span class="video-button__info">
                                    <span class="video-button__text"><?=Loc::getMessage("VIDEO_BUTTON_TEXT");?></span>
                                    <span class="video-button__link">
                                        <span class="video-button__link-text"><?=Loc::getMessage("VIDEO_BUTTON_LINK_TEXT");?></span>
                                        <span class="video-button__link-time">1:38</span>
                                    </span>
                                </span>
                            </a>
                            <!-- <a href="/services/seo/" class="black_friday"><img src="/upload/blackfriday/black.png" alt="черная-пятница"></a> -->
                        </div>
                        <div class="banner__social">
                            <div class="banner__social-item">
                                <div class="banner__social-text"><?=Loc::getMessage("BANNER_SOCIAL_TEXT");?></div>
                            </div>
                            <a class="banner__social-item" href="viber://pa?chatURI=dial" target="_blank">
                                <svg class="banner__social-icon">
                                    <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#viber"></use>
                                </svg>
                                <div class="banner__social-text">Viber</div>
                            </a>
                            <a class="banner__social-item" href="https://vk.me/club41029771" target="_blank">
                                <svg class="banner__social-icon">
                                    <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#vk2"></use>
                                </svg>
                                <div class="banner__social-text">Vkontakte</div>
                            </a>
                            <a class="banner__social-item" href="https://www.facebook.com/dialweb" target="_blank">
                                <svg class="banner__social-icon">
                                    <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#facebook"></use>
                                </svg>
                                <div class="banner__social-text">Facebook</div>
                            </a>
                        </div>
                        <button class="banner__next" type="button">
                            <span class="banner__next-text"><?=Loc::getMessage("BUNNER_NEXT_TEXT");?></span>
                        </button>
                    </div>
                </div>
                <div class="lattice lattice_banner">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <section class="services lattice-ie-fix">
        <div class="container-outer">
            <div class="services__wrap-outer">
                <div class="container-inner">
                    <div class="services__wrap-inner">
                        <h2 class="services__title title angle"><?=Loc::getMessage("SERVICES_TITLE");?></h2>
                        <div class="services__slogan slogan">
                            <?=Loc::getMessage("SERVICES_SLOGAN");?>
                        </div>
                        <?
                        $GLOBALS['filterServices'] = array('PROPERTY_SHOW' => 6);
                        $APPLICATION->IncludeComponent(
                            "bitrix:news.list",
                            "services",
                            array(
                                "IBLOCK_ID" => "9",
                                "NEWS_COUNT" => "100",
                                "SET_TITLE" => "N",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "FILTER_NAME" => "filterServices",
                                "CACHE_FILTER" => "Y",
                                "COMPONENT_TEMPLATE" => "services",
                                "IBLOCK_TYPE" => "-",
                                "SORT_BY1" => "SORT",
                                "SORT_ORDER1" => "ASC",
                                "SORT_BY2" => "ACTIVE_FROM",
                                "SORT_ORDER2" => "DESC",
                                "FIELD_CODE" => array(
                                    0 => "",
                                    1 => "",
                                ),
                                "PROPERTY_CODE" => array(
                                    0 => "EN_NAME",
                                    1 => "EN_INTROTEXT",
                                ),
                                "CHECK_DATES" => "Y",
                                "DETAIL_URL" => "",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "AJAX_OPTION_ADDITIONAL" => "",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_GROUPS" => "Y",
                                "PREVIEW_TRUNCATE_LEN" => "",
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                "SET_BROWSER_TITLE" => "Y",
                                "SET_META_KEYWORDS" => "Y",
                                "SET_META_DESCRIPTION" => "Y",
                                "SET_LAST_MODIFIED" => "N",
                                "ADD_SECTIONS_CHAIN" => "Y",
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                "PARENT_SECTION" => "",
                                "PARENT_SECTION_CODE" => "",
                                "INCLUDE_SUBSECTIONS" => "Y",
                                "STRICT_SECTION_CHECK" => "N",
                                "PAGER_TEMPLATE" => ".default",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "PAGER_BASE_LINK_ENABLE" => "N",
                                "SET_STATUS_404" => "N",
                                "SHOW_404" => "N",
                                "MESSAGE_404" => ""
                            ),
                            false
                        );
                        ?>
                    </div>
                </div>
                <div class="lattice">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </section>
    <div class="contextual lattice-ie-fix">
        <div class="container-outer">
            <div class="contextual__wrap-outer">
                <div class="container-inner">
                    <div class="contextual__wrap-inner">
                        <div class="contextual__title title angle"><?=Loc::getMessage("CONTEXTUAL_TITLE");?></div>
                        <div class="contextual__slogan">
                            <div class="contextual__slogan-big"><?=Loc::getMessage("CONTEXTUAL_SLOGAN_BIG");?></div>
                            <div class="contextual__slogan-small"><?=Loc::getMessage("CONTEXTUAL_SLOGAN_SMALL");?></div>
                        </div>
                        <div class="contextual__info">
                            <a class="contextual__statistic angle angle_reverse angle-white" href="/portfolio/context/">
                                <div class="contextual__statistic-count">
                                    <div class="contextual__statistic-number">250</div>
                                    <div class="contextual__statistic-sites"><?=Loc::getMessage("CONTEXTUAL_STATISTIC_SITES");?></div>
                                </div>
                                <div class="contextual__statistic-text"><?=Loc::getMessage("CONTEXTUAL_STATISTIC_TEXT");?></div>
                            </a>
                            <a class="contextual__more button button_grey button_arrow" href="/services/context/">
                                <div class="button__arrow-text"><?=Loc::getMessage("CONTEXTUAL_MORE");?></div>
                                <div class="button__arrow"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lattice">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <? $APPLICATION->IncludeComponent("bitrix:news.list", "seo-slider_home", array(
        "IBLOCK_ID" => "1",
        "PARENT_SECTION" => "10",
        "NEWS_COUNT" => "4",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "PROPERTY_CODE" => array(
            "COUNT_VALUE",
            "COUNT_TITLE",
            "EN_NAME",
            "EN_INTROTEXT",
            "EN_BUTTON_TITLE",
            "EN_COUNT_VALUE",
            "EN_COUNT_TITLE",
        )
    )); ?>
    <div class="feedback lattice-ie-fix">
        <div class="container-outer">
            <div class="feedback__wrap-outer angle angle_reverse angle-white"
                 style="background-image: url('<?= TEMPLATE_PATH ?>/img/feedback1.jpg')">
                <div class="container-inner">
                    <div class="feedback__wrap-inner">
                        <div class="feedback__head">
                            <div class="feedback__title"><?=Loc::getMessage("FEEDBACK_TITLE");?></div>
                            <div class="feedback__subtitle"><?=Loc::getMessage("FEEDBACK_SUBTITLE");?></div>
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
                <div class="lattice">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="development lattice-ie-fix">
        <div class="container-outer">
            <div class="development__wrap-outer">
                <div class="container-inner">
                    <div class="development__wrap-inner">
                        <div class="development__top">
                            <div class="development__info">
                                <div class="development__title title angle"><?=Loc::getMessage("DEVELOPMENT_TITLE");?></div>
                                <div class="development__description"><?=Loc::getMessage("DEVELOPMENT_DESCRIPTION");?></div>
                                <a class="development__more button button_grey button_arrow"
                                   href="/services/development/">
                                    <div class="button__arrow-text"><?=Loc::getMessage("DEVELOPMENT_MORE");?></div>
                                    <div class="button__arrow"></div>
                                </a>
                            </div>
                            <div class="development__banner">
                                <div class="development__banner-description"><?=Loc::getMessage("DEVELOPMENT_BANNER_DESCRIPTION");?></div>
                            </div>
                        </div>
                        <?
                        $APPLICATION->IncludeComponent(
                            "bitrix:catalog.section.list",
                            "cases_home",
                            array(
                                "IBLOCK_TYPE" => "primary",
                                "IBLOCK_ID" => "11",
                                "COUNT_ELEMENTS" => "Y",
                                "TOP_DEPTH" => "1",
                                "SECTION_USER_FIELDS" => array('UF_EN_NAME'),
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="lattice">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="academy lattice-ie-fix">
        <div class="container-outer">
            <div class="academy__wrap-outer">
                <div class="container-inner">
                    <div class="academy__wrap-inner"
                         style="background-image: url('<?= TEMPLATE_PATH ?>/img/academy-bg.jpg');">
                        <div class="academy__banner angle-white">
                            <div class="academy__info">
                                <div class="academy__title"><?=Loc::getMessage("ACADEMY_TITLE");?></div>
                                <div class="academy__item">
                                    <div class="academy__name"><?=Loc::getMessage("ACADEMY_NAME");?></div>
                                    <div class="academy__description"><?=Loc::getMessage("ACADEMY_DESCRIPTION");?></div>
                                </div>
                                <div class="academy__item">
                                    <div class="academy__name"><?=Loc::getMessage("ACADEMY_NAME2");?></div>
                                    <div class="academy__description"><?=Loc::getMessage("ACADEMY_DESCRIPTION2");?></div>
                                </div>
                            </div>
                            <a class="academy__more button button_white button_arrow" href="/academy/">
                                <div class="button__arrow-text"><?=Loc::getMessage("ACADEMY_MORE");?></div>
                                <div class="button__arrow"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="lattice">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <?
    $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "blog_home",
        array(
            "IBLOCK_ID" => "6",
            "NEWS_COUNT" => "3",
            "SET_TITLE" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "SORT_BY1" => "ACTIVE_FROM",
            "ACTIVE_DATE_FORMAT" => "d F Y",
            "PROPERTY_CODE" => array(
                "EN_NAME",
                "EN_INTROTEXT",
            )
        )
    );
    ?>
    <div class="contacts lattice-ie-fix">
        <div class="container-outer">
            <div class="contacts__wrap-outer angle angle_reverse angle-white">
                <div class="container-inner">
                    <div class="contacts__wrap-inner">
                        <div class="contacts__left">
                            <div class="contacts__title"><?=Loc::getMessage("CONTACTS_TITLE");?></div>
                            <div class="contacts__menu">
                                <a href="/about/" class="contacts__menu-link"><?=Loc::getMessage("CONTACTS_MENU1");?></a>
                                <a class="contacts__menu-link" data-popup="js-popup-chat" style="cursor: pointer;"><?=Loc::getMessage("CONTACTS_MENU2");?></a>
                                <a href="/blog/" class="contacts__menu-link"><?=Loc::getMessage("CONTACTS_MENU3");?></a>
                                <a class="contacts__menu-link _popup" data-popup="js-popup-service" style="cursor: pointer;"><?=Loc::getMessage("CONTACTS_MENU4");?></a>
                            </div>
                        </div>
                        <div class="contacts__center">
                            <div class="contacts__cities">
                                <button type="button" class="contacts__city<?= SITE_ID == 's1' || SITE_ID == 's4' || SITE_ID == 's5' ? ' _active' : ''; ?>">
                                    <?=Loc::getMessage("CONTACTS_CITY1");?>
                                </button>
                                <button type="button" class="contacts__city<?= SITE_ID == 's3' ? ' _active' : ''; ?>">
                                    <?=Loc::getMessage("CONTACTS_CITY2");?>
                                </button>
                                <button type="button" class="contacts__city _moscow">
                                    <?=Loc::getMessage("CONTACTS_CITY3");?>
                                </button>
                            </div>
                        </div>
                        <div class="contacts__right">
                            <div class="contacts__text">
                                <?=Loc::getMessage("CONTACTS_TEXT");?>
                            </div>
                            <div class="contacts__info<?= SITE_ID == 's1' || SITE_ID == 's4' || SITE_ID == 's5' ? ' _active' : ''; ?>">
                                <div class="contacts__block">
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name _large"><?=Loc::getMessage("CONTACTS_TOLLFREE");?></div>
                                        <a class="contacts__block-info _large" href="tel:+78007758343">8 (800) 775 83 43</a>
                                    </div>
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_ADDRESS");?></div>
                                        <div class="contacts__block-info"><?=Loc::getMessage("CONTACTS_ADDRESS_TULA");?></div>
                                    </div>
                                </div>
                                <div class="contacts__block">
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_PHONE");?></div>
                                        <?$APPLICATION->IncludeComponent('dial:city.show', '', ['FIELD' => 'PROPERTY_PHONE', 'CITY_CODE' => 'RU-TUL', 'CLASS' => 'contacts__block-info roistat-phone04-19']);?>
                                        <a class="contacts__block-info" href="tel:+79534256999">+7 (953) 425-69-99</a>
                                    </div>
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_EMAIL");?></div>
                                        <a class="contacts__block-info" href="mailto:manager@dialweb.ru">manager@dialweb.ru</a>
                                    </div>
                                </div>
                            </div>
                            <div class="contacts__info<?= SITE_ID == 's3' ? ' _active' : ''; ?>">
                                <div class="contacts__block">
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name _large"><?=Loc::getMessage("CONTACTS_TOLLFREE");?></div>
                                        <a class="contacts__block-info _large" href="tel:+78007758343">8 (800) 775 83 43</a>
                                    </div>
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_ADDRESS");?></div>
                                        <div class="contacts__block-info"><?=Loc::getMessage("CONTACTS_ADDRESS_KALUGA");?></div>
                                    </div>
                                </div>
                                <div class="contacts__block">
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_PHONE");?></div>
                                        <?$APPLICATION->IncludeComponent(
	"dial:city.show", 
	".default", 
	array(
		"FIELD" => "PROPERTY_PHONE",
		"CITY_CODE" => "RU-KLU",
		"CLASS" => "contacts__block-info roistat-phone-4842",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
                                        <a class="contacts__block-info" href="tel:+79308493454">+7 (930) 849-34-54</a>
                                    </div>
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_EMAIL");?></div>
                                        <a class="contacts__block-info" href="mailto:mo@dialweb.ru">mo@dialweb.ru</a>
                                    </div>
                                </div>
                            </div>
                            <div class="contacts__info _moscow">
                                <div class="contacts__block">
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name _large"><?=Loc::getMessage("CONTACTS_TOLLFREE");?></div>
                                        <a class="contacts__block-info _large" href="tel:+78007758343">8 (800) 775 83 43</a>
                                    </div>
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_ADDRESS");?></div>
                                        <div class="contacts__block-info"><?=Loc::getMessage("CONTACTS_ADDRESS_MOSCOW");?></div>
                                    </div>
                                </div>
                                <div class="contacts__block">
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_PHONE");?></div>
                                        <?$APPLICATION->IncludeComponent('dial:city.show', '', ['FIELD' => 'PROPERTY_PHONE', 'CITY_CODE' => 'RU-MOW', 'CLASS' => 'contacts__block-info roistat-phone-495']);?>
                                        <a class="contacts__block-info" href="tel:+79035385939">+7 (903) 538-59-39</a>
                                    </div>
                                    <div class="contacts__block-item">
                                        <div class="contacts__block-name"><?=Loc::getMessage("CONTACTS_EMAIL");?></div>
                                        <a class="contacts__block-info" href="mailto:salemsk@dialweb.ru">salemsk@dialweb.ru</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lattice">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    </main>
<? endif; ?>
