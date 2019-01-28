<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

$rsSections = CIBlockSection::GetList(array('SORT' => 'ASC'), array('IBLOCK_ID' => $arResult['ID'], 'ACTIVE' => 'Y'), false, array('ID', 'NAME'));
while ($arSection = $rsSections->GetNext()) {
	$arResult['SECTIONS'][$arSection['ID']] = $arSection;
}

foreach ($arResult['ITEMS'] as $arItem) {
	$arResult['SECTIONS'][$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
}
unset($arResult['ITEMS']);