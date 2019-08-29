<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
$this->setFrameMode(true);
if ($arResult['VARIABLES']['SECTION_CODE'] == 'development') {
	LocalRedirect($arParams['SEF_FOLDER']);
}

$developmentSection = Array('development', 'customized', 'ready-solution','Landing-page');
if(in_array($arResult['VARIABLES']['SECTION_CODE'], $developmentSection)) {
	include('development.php');
} else {
	?><h1 class="page-title"><?$APPLICATION->ShowTitle(false)?></h1><?
	$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "cases", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "1",
		"ACTIVE_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
        "SECTION_USER_FIELDS" => array('UF_EN_NAME'),
	));
    $sectionID = $APPLICATION->IncludeComponent("bitrix:news.list", "cases", array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"PARENT_SECTION_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
		"NEWS_COUNT" => "6",
		"PROPERTY_CODE" => array("TYPE"),
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"PAGER_TEMPLATE" => "show_more",
	),
        $component);

    $curSection = CIBlockSection::GetList(
        Array(),
        Array(
            'IBLOCK_ID' => $arParams["IBLOCK_ID"],
            'ID' => $sectionID
        ),
        true,
        Array(
            'NAME',
            'ID',
            'UF_' . strtoupper(LANGUAGE_ID) . '_NAME'
        ))->Fetch();
    if (LANGUAGE_ID == 'ru') {
        $APPLICATION->AddChainItem($curSection['NAME']);
    } else {
        $APPLICATION->AddChainItem($curSection['UF_'.strtoupper(LANGUAGE_ID).'_NAME']);
    }



    $res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'CODE' => $arResult['VARIABLES']['SECTION_CODE'], 'SITE_ID' => "s2"));
    $section = $res->Fetch();

    $sectionID = $section["ID"];

    $curSection = CIBlockSection::GetList(Array(), Array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'ID'=>$sectionID), true, Array('NAME', 'ID', 'UF_'.strtoupper(LANGUAGE_ID).'_NAME'))->Fetch();
    if (LANGUAGE_ID == 'ru' || !$curSection['UF_'.strtoupper(LANGUAGE_ID).'_NAME']) {
        $APPLICATION->AddChainItem($curSection['NAME']);
    } else {
        $APPLICATION->AddChainItem($curSection['UF_'.strtoupper(LANGUAGE_ID).'_NAME']);
    }
}
?>