<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (LANGUAGE_ID != 'ru') {
    global $arrFilter;
    $arrFilter = array(
        "!PROPERTY_".strtoupper(LANGUAGE_ID)."_NAME"=> false
    );
}
?>
<h1 class="page-title"><?$APPLICATION->ShowTitle(false)?></h1>
<div class="slogan angle"><?$APPLICATION->ShowProperty("subtitle")?></div>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "blog", array(
	"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"NEWS_COUNT" => $arParams["NEWS_COUNT"],
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"SORT_BY1" => "ACTIVE_FROM",
	"FIELD_CODE" => array("SHOW_COUNTER"),
	"PROPERTY_CODE" => array("TAGS"),
	"PAGER_TEMPLATE" => "show_more",
    "FILTER_NAME" => "arrFilter",
));?>