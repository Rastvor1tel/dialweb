<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'DETAIL_PAGE_URL', 'PROPERTY_TYPE');
$arFilter = array('IBLOCK_ID' => 11, 'ACTIVE' => 'Y');
foreach ($arResult['SECTIONS'] as &$arSection) {
	$arFilter['SECTION_ID'] = $arSection['ID'];
	$rsItems = CIBlockElement::GetList(array('SORT' => 'ASC'), $arFilter, false, array('nTopCount' => 10), $arSelect);
	while ($arItem = $rsItems->GetNext()) {
		$arItem['PREVIEW_PICTURE'] = CFile::GetFileArray($arItem['PREVIEW_PICTURE']);
		$arSection['ITEMS'][] = $arItem;
	}
}
unset($arSection);