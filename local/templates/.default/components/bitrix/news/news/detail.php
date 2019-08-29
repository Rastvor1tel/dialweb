<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$GLOBALS['NEWS_ELEMENT_ID'] = $APPLICATION->IncludeComponent("bitrix:news.detail", "news", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
	"FIELD_CODE" => array("SHOW_COUNTER"),
    "PROPERTY_CODE" => array("TAGS"),
	"ADD_ELEMENT_CHAIN" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"SET_CANONICAL_URL" => "Y",
	"SET_STATUS_404" => "Y",
	"SHOW_404" => "Y",
));

use Bitrix\Main\Localization\Loc;
$curElement = CIBlockElement::GetList(
    Array(),
    Array('IBLOCK_ID'=>$arParams["IBLOCK_ID"],'ID'=>$GLOBALS['NEWS_ELEMENT_ID']),
    false,
    false,
    Array('IBLOCK_ID','NAME','IBLOCK_SECTION_ID','PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME'))->Fetch();

if (LANGUAGE_ID == 'ru') {
    $APPLICATION->AddChainItem($curElement['NAME']);
} else {
    $APPLICATION->SetTitle($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->SetPageProperty('title', $curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->AddChainItem($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
}
