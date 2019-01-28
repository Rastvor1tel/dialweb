<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<h1 class="page-title"><?$APPLICATION->ShowTitle(false)?></h1>
<div class="actions">
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "sale", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
	));?>
</div>