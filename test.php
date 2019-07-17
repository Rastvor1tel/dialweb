<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


use Bitrix\Main\Localization\Loc;
$curElement = CIBlockElement::GetList(
    Array(),
    Array('IBLOCK_ID'=>9,'ID'=>204),
    false,
    false,
    Array('IBLOCK_ID','NAME','IBLOCK_SECTION_ID','PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME'))->Fetch();
if (LANGUAGE_ID == 'ru' || !$curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']) {
    $APPLICATION->SetTitle($curElement['NAME']);
    $APPLICATION->SetPageProperty('title', $curElement['NAME']);
    $APPLICATION->AddChainItem($curElement['NAME']);
} else {
    $APPLICATION->SetTitle($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->SetPageProperty('title', $curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
    $APPLICATION->AddChainItem($curElement['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE']);
}

/*
// ID веб-формы
$FORM_ID = 4;

// массив описывающий загруженную на сервер фотографию
$arImage = CFile::MakeFileArray($_SERVER["DOCUMENT_ROOT"]."/images/photo.gif");

// массив значений ответов
$arValues = array (
    "form_text_586"                 => "Иванов Иван",    // "Фамилия, имя, отчество"
    "form_date_587"                 => "01.06.1904",     // "Дата рождения"
    "form_textarea_588"             => "г. Москва",      // "Адрес"
    "form_radio_VS_MARRIED"         => 590,              // "Женаты/замужем?"
    "form_checkbox_VS_INTEREST"     => array(612, 613),  // "Увлечения"
    "form_dropdown_VS_AGE"          => 601,              // "Возраст"
    "form_multiselect_VS_EDUCATION" => array(602, 603),  // "Образование"
    "form_text_606"                 => 300,              // "Доход"
    "form_image_607"                => $arImage          // "Фотография"
);

// создадим новый результат
if ($RESULT_ID = CFormResult::Add($FORM_ID, $arValues))
{
    echo "Результат #".$RESULT_ID." успешно создан";
}
else
{
    global $strError;
    echo $strError;
}
*/
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
