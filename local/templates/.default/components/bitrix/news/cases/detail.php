<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if ($arResult["VARIABLES"]["SECTION_CODE"] == 'development') {
	$GLOBALS['DEV_ELEMENT_ID'] = $APPLICATION->IncludeComponent("bitrix:news.detail", "development", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"PROPERTY_CODE" => array("HOME_IMAGE", "GALLERY", "ADAPTIVE"),
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SET_CANONICAL_URL" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
	));
} else {
	$APPLICATION->IncludeComponent("bitrix:news.detail", "cases", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"PROPERTY_CODE" => array("WORKS"),
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"SET_CANONICAL_URL" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
	));
}