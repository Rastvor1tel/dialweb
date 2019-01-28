<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

    $APPLICATION->IncludeComponent("bitrix:news.list", "team", array(
        "IBLOCK_ID" => $arParams['IBLOCK_ID'],
        "NEWS_COUNT" => $arParams['NEWS_COUNT'],
        "SET_TITLE" => $arParams['SET_TITLE'],
        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams['INCLUDE_IBLOCK_INTO_CHAIN'],
        "PROPERTY_CODE" => $arParams['PROPERTY_CODE'],
        "SORT_BY1" => $arParams['SORT_BY1'],
        "SORT_ORDER1" => $arParams['SORT_ORDER1'],
        "SORT_BY2" => $arParams['SORT_BY2'],
        "SORT_ORDER2" => $arParams['SORT_ORDER2'],
    ));
?>
