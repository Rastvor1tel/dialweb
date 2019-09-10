<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.js");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.css");

$ElementID = $APPLICATION->IncludeComponent("bitrix:news.detail", "team", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
	"FIELD_CODE" => $arParams['FIELD_CODE'],
    "PROPERTY_CODE" => $arParams['PROPERTY_CODE'],
	"ADD_ELEMENT_CHAIN" => 'N',
	"ADD_SECTIONS_CHAIN" => 'N',
	"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams['INCLUDE_IBLOCK_INTO_CHAIN'],
	"SET_CANONICAL_URL" => $arParams['SET_CANONICAL_URL'],
	"SET_STATUS_404" => $arParams['SET_STATUS_404'],
	"SHOW_404" => $arParams['SHOW_404'],
));

use Bitrix\Main\Localization\Loc;
$curElement = CIBlockElement::GetList(
    Array(),
    Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'],'ID'=>$ElementID),
    false,
    false,
    Array('IBLOCK_ID','NAME','IBLOCK_SECTION_ID','PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME'))->Fetch();
if (LANGUAGE_ID == 'ru' || !$curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']) {
    $APPLICATION->AddChainItem($curElement['NAME']);
} else {
    $APPLICATION->SetTitle($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->SetPageProperty('title', $curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->AddChainItem($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
}