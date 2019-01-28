<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$APPLICATION->IncludeComponent("bitrix:news.detail", "team", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
	"FIELD_CODE" => $arParams['FIELD_CODE'],
    "PROPERTY_CODE" => $arParams['PROPERTY_CODE'],
	"ADD_ELEMENT_CHAIN" => $arParams['ADD_ELEMENT_CHAIN'],
	"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams['INCLUDE_IBLOCK_INTO_CHAIN'],
	"SET_CANONICAL_URL" => $arParams['SET_CANONICAL_URL'],
	"SET_STATUS_404" => $arParams['SET_STATUS_404'],
	"SHOW_404" => $arParams['SHOW_404'],
));