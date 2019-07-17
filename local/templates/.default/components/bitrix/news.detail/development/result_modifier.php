<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (!empty($arResult['PROPERTIES']['TEAM']['VALUE'])) {
	$arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'PREVIEW_PICTURE', 'PROPERTY_POSITION');
	$arFilter = array('ID' => $arResult['PROPERTIES']['TEAM']['VALUE']);
	$rsItems = CIBlockElement::GetList(false, $arFilter, false, false, $arSelect);
	while ($arItem = $rsItems->GetNext()) {
		$team[$arItem['ID']] = $arItem;
	}
	foreach ($arResult['PROPERTIES']['TEAM']['VALUE'] as &$id) {
		$id = $team[$id];
	}
	unset($id);
}

if (!empty($arResult['PROPERTIES']['REVIEW']['VALUE'])) {
	$arSelect = array(
	    'IBLOCK_ID',
        'ID',
        'NAME',
        'PREVIEW_PICTURE',
        'PREVIEW_TEXT',
        'PROPERTY_REVIEW',
        'PROPERTY_AUTHOR',
        'PROPERTY_POSITION',
        'PROPERTY_EN_NAME',
        'PROPERTY_'.strtoupper(LANGUAGE_ID).'_INTROTEXT',
        'PROPERTY_'.strtoupper(LANGUAGE_ID).'_AUTHOR',
        'PROPERTY_'.strtoupper(LANGUAGE_ID).'_POSITION',
        );
	$arFilter = array('ID' => $arResult['PROPERTIES']['REVIEW']['VALUE'], 'IBLOCK_ID' => 8);
	$review = CIBlockElement::GetList(false, $arFilter, false, false, $arSelect)->GetNext();
	if (!empty($review['PROPERTY_REVIEW_VALUE'])) {
		$review['PROPERTY_REVIEW_VALUE'] = CFile::GetFileArray($review['PROPERTY_REVIEW_VALUE']);
	}
	if (!empty($review['PREVIEW_PICTURE'])) {
		$review['PREVIEW_PICTURE'] = CFile::GetFileArray($review['PREVIEW_PICTURE']);
	}
	$arResult['PROPERTIES']['REVIEW']['VALUE'] = $review;
}