<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['PROPERTIES']['AUTHOR']['VALUE'])) {
	$arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'PREVIEW_PICTURE', 'PROPERTY_POSITION');
	$arFilter = array('ID' => $arResult['PROPERTIES']['AUTHOR']['VALUE']);
	$arResult['AUTHOR'] = CIBlockElement::GetList(false, $arFilter, false, false, $arSelect)->GetNext();
}