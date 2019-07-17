<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$elementID = $APPLICATION->IncludeComponent("bitrix:news.detail", "services", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
	"PROPERTY_CODE" => array("STAFF_COUNT"),
	"ADD_ELEMENT_CHAIN" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"SET_CANONICAL_URL" => "Y",
	"SET_STATUS_404" => "Y",
	"SHOW_404" => "Y",
));
use Bitrix\Main\Localization\Loc;
$curElement = CIBlockElement::GetList(
    Array(),
    Array('IBLOCK_ID'=>$arParams["IBLOCK_ID"],'ID'=>$elementID),
    false,
    false,
    Array('IBLOCK_ID','NAME','IBLOCK_SECTION_ID','PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME'))->Fetch();
//Ломает всю систему метатегов на сайте и доменах
if (LANGUAGE_ID == 'ru' || !$curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']) {
    $APPLICATION->AddChainItem($curElement['NAME']);
} else {
    $APPLICATION->SetTitle($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->SetPageProperty('title', $curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->AddChainItem($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
}
?>
