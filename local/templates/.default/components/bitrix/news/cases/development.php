<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<h1 class="page-title"><?$APPLICATION->ShowTitle(false)?></h1>
<?
$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cases", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"COUNT_ELEMENTS" => "Y",
	"TOP_DEPTH" => "2",
	"ACTIVE_CODE" => $arResult['VARIABLES']['SECTION_CODE']?$arResult['VARIABLES']['SECTION_CODE']:"development",
    "SECTION_USER_FIELDS" => array('UF_EN_NAME'),
));
$APPLICATION->IncludeComponent("bitrix:news.list", "development", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"PARENT_SECTION_CODE" => $arResult['VARIABLES']['SECTION_CODE']?$arResult['VARIABLES']['SECTION_CODE']:"development",
	"NEWS_COUNT" => "12",
	"PROPERTY_CODE" => array("TYPE"),
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"ADD_SECTIONS_CHAIN" => "N",
	"PAGER_TEMPLATE" => "show_more",
));
?>