<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="services _inner">
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "services", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => "100",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "PROPERTY_CODE" => array(
            0 => "EN_NAME",
            1 => "EN_INTROTEXT",
            2 => "HIDE_ON_MAIN_LIST"
        )
	));?>
</div>
