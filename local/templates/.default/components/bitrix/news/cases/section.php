<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if ($arResult['VARIABLES']['SECTION_CODE'] == 'development') {
	LocalRedirect($arParams['SEF_FOLDER']);
}

$developmentSection = Array('development', 'customized', 'ready-solution');
if(in_array($arResult['VARIABLES']['SECTION_CODE'], $developmentSection)) {
	include('development.php');
} else {
	?><h1 class="page-title"><?$APPLICATION->ShowTitle(false)?></h1><?
	$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cases", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "1",
		"ACTIVE_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
	));
	$APPLICATION->IncludeComponent("bitrix:news.list", "cases", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"PARENT_SECTION_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
		"NEWS_COUNT" => "6",
		"PROPERTY_CODE" => array("TYPE"),
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"PAGER_TEMPLATE" => "show_more",
	));
}
?>