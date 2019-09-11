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
<div class="news">
	<div class="news__list">
		<?$APPLICATION->IncludeComponent("bitrix:news.list", "news", array(
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"NEWS_COUNT" => $arParams["NEWS_COUNT"],
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"PAGER_TEMPLATE" => "show_more",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"PROPERTY_CODE" => ["URL","ATRIBUTES"],
            "FILTER_NAME" => "arrFilter",
		));?>
	</div>
	<div class="news__sidebar">
		<?
		$APPLICATION->IncludeComponent("bitrix:news.list", "news_sidebar", array(
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"NEWS_COUNT" => "5",
			"SET_TITLE" => "N",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"SORT_BY1" => "ACTIVE_FROM",
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
            "PROPERTY_CODE" => ["URL","ATRIBUTES"],
            "FILTER_NAME" => "arrFilter",
		));
		$APPLICATION->IncludeComponent("bitrix:sender.subscribe", "", array(
			"SET_TITLE" => "N",
			"AJAX_MODE" => "Y",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_HISTORY" => "N",
		));
		?>
	</div>
</div>