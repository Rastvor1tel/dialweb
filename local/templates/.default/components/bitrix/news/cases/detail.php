<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

if (($arResult["VARIABLES"]["SECTION_CODE"] == 'development') || ($arResult["VARIABLES"]["SECTION_CODE"] == 'customized') || ($arResult["VARIABLES"]["SECTION_CODE"] == 'ready-solution')) {
    $elementID = $APPLICATION->IncludeComponent("bitrix:news.detail", "development", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"PROPERTY_CODE" => array("HOME_IMAGE", "GALLERY", "ADAPTIVE"),
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"SET_CANONICAL_URL" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
	));
} else {
    $elementID = $APPLICATION->IncludeComponent("bitrix:news.detail", "cases", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"PROPERTY_CODE" => array("WORKS"),
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"SET_CANONICAL_URL" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
	));
}

use Bitrix\Main\Localization\Loc;
$curElement = CIBlockElement::GetList(
    Array(),
    Array('IBLOCK_ID'=>$arParams["IBLOCK_ID"],'ID'=>$elementID),
    false,
    false,
    Array('IBLOCK_ID','NAME','IBLOCK_SECTION_ID','PROPERTY_'.strtoupper(LANGUAGE_ID).'_MANE'))->Fetch();

if (LANGUAGE_ID == 'ru') {
    $APPLICATION->AddChainItem($curElement['NAME']);
} else {
    $APPLICATION->SetTitle($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_MANE_VALUE']);
    $APPLICATION->SetPageProperty('title', $curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_MANE_VALUE']);
    $APPLICATION->AddChainItem($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_MANE_VALUE']);
}

//p($curElement);