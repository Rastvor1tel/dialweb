<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if ($this->StartResultCache(86400))
{
	CModule::IncludeModule("iblock");
	$arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'DETAIL_PAGE_URL', 'PROPERTY_EN_NAME');
	$arFilter = array('IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y');
	if ($arParams['DEVELOPMENT'] == 'Y') {
		$arSelect[] = 'PROPERTY_TYPE';
		$arFilter['SECTION_CODE'] = 'development';
		$arSort = array('SORT' => 'ASC');
	} else {
		$arSort = array('ACTIVE_FROM' => 'ASC');
	}
	$rsItems = CIBlockElement::GetList($arSort, $arFilter, false, array('nElementID' => $arParams['ELEMENT_ID'], 'nPageSize' => 1), $arSelect);
	while ($arItem = $rsItems->GetNext()) {
		if ($arItem['ID'] != $arParams['ELEMENT_ID']) {
			$arResult['ITEMS'][] = $arItem;
		}
        //p($arItem);
    }

	$this->IncludeComponentTemplate();
}