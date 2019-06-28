<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

switch (strtoupper($arParams['FIELD'])) {
    case 'PROPERTY_PHONE':
        $phone = preg_replace('/\D/', '', $arResult['FIELD']);
        echo '<a class="'.$arParams['CLASS'].'" href="tel:+'.$phone.'" >'.$arResult['FIELD'].'</a>';
        break;
    default:
        echo '<span class="'.$arParams['CLASS'].'">'.$arResult['FIELD'].'</span>';
}