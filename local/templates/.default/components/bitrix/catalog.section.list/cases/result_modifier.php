<?
$parentSection = Array();

foreach ($arResult['SECTIONS'] as $key => &$arSection) {
    if ($parentSection[$arSection['IBLOCK_SECTION_ID']] == '0') {
        if ($arSection['CODE'] == $arParams['ACTIVE_CODE']) {
            $arSection['CUR_SECTION'] = 'Y';
        } else {
            $arSection['CUR_SECTION'] = 'N';
        }
        $arResult['SECTIONS'][$parentSection[$arSection['IBLOCK_SECTION_ID']]]['CUR_SECTION'] = 'Y';
        $arResult['SECTIONS'][$parentSection[$arSection['IBLOCK_SECTION_ID']]]['SUBSECTION'][] = $arSection;
        unset($arResult['SECTIONS'][$key]);
    } else {
        if ($arSection['CODE'] == $arParams['ACTIVE_CODE']) {
            $arSection['CUR_SECTION'] = 'Y';
        } else {
            $arSection['CUR_SECTION'] = 'N';
        }
        $parentSection[$arSection['ID']] = $key;
    }
}
$arResult['SECTIONS'] = array_values($arResult['SECTIONS']);
?>