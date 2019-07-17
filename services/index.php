<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetPageProperty("description", Loc::getMessage('PAGE_SERVICES_META_DESCRIPTION'));
$APPLICATION->SetPageProperty("subtitle", Loc::getMessage('PAGE_SERVICES_META_SUBPAGETITLE'));
$APPLICATION->SetTitle(Loc::getMessage('PAGE_SERVICES_META_PAGETITLE'));

/* global $USER;
if ($USER->IsAdmin()) {
	$curSite = explode('.', $_SERVER['HTTP_HOST']);
	if (count($curSite) == 3) {
		$siteRegion = $curSite[0];
		$metaTitle = 'PROPERTY_'.$siteRegion.'_META_TITLE';
		$metaDescription = 'PROPERTY_'.$siteRegion.'_DESCRIPTION';
	}
} */

$APPLICATION->IncludeComponent(
	"bitrix:news", 
	"services", 
	array(
		"IBLOCK_TYPE" => "primary",
		"IBLOCK_ID" => "9",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/services/",
		"COMPONENT_TEMPLATE" => "services",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_TITLE" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"FILE_404" => "/404.php",
		"SEF_URL_TEMPLATES" => array(
			"news" => "index.php",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>