<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();


foreach($arResult['ITEMS'] as $key => $arItem){
    foreach($arItem['PROPERTIES']['CITY']['VALUE'] as $city){
        $arResult['VAC'][$city]['LIST'][] = $arItem;
        if(!$arResult['VAC'][$city]['CITY']){
            $arResult['VAC'][$city]['CITY'] = CIBlockElement::GetByID($city)->getNext();

            $arResult['VAC'][$city]['PROP']['EN_TITLE'] = CIBlockElement::GetProperty(14, $city, array("sort" => "asc"), Array("CODE"=>"EN_TITLE"))->Fetch();
        }
    }
}
