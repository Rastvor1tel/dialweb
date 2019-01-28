<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="actions">
	<?
	$elementID = $APPLICATION->IncludeComponent("bitrix:news.detail", "sale", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
		"PROPERTY_CODE" => array(),
		"ADD_ELEMENT_CHAIN" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"SET_CANONICAL_URL" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"ACTIVE_DATE_FORMAT" => "d F Y",
	));
	?>
	<div class="actions__inner-title page-title _small">Другие акции</div>
	<?
	$GLOBALS['filterOtherSales'] = array('!ID' => $elementID);
	$APPLICATION->IncludeComponent("bitrix:news.list", "sale", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => 4,
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"FILTER_NAME" => "filterOtherSales",
		"SORT_BY1" => "RAND",
		"CACHE_FILTER" => "Y",
	));
	?>
</div>