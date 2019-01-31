<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$GLOBALS['BLOG_ELEMENT_ID'] = $APPLICATION->IncludeComponent("bitrix:news.detail", "blog", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
	"FIELD_CODE" => array("SHOW_COUNTER"),
	"PROPERTY_CODE" => array("TAGS"),
	"ADD_ELEMENT_CHAIN" => "Y",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"SET_CANONICAL_URL" => "Y",
	"SET_STATUS_404" => "Y",
	"SHOW_404" => "Y",
));
