<?
//webp converter try
require_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/webp/webpbufermodifier.php');

define("TEMPLATE_PATH", '/local/templates/dial/template');
define("LOG_FILENAME", $_SERVER["DOCUMENT_ROOT"] . "/log.txt");

$eventManager = \Bitrix\Main\EventManager::getInstance();

$eventManager->addEventHandler("form", "onAfterResultAdd", "emailIpDivider");

class Helpers {
    public static function declOfNum($number, $titles) {
        $cases = array(2, 0, 1, 1, 1, 2);
        return $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
    }
}

/*------Отправка писем на разные почты------*/

function emailIpDivider($WEB_FORM_ID, $RESULT_ID) {
    CBitrixComponent::includeComponentClass('dial:city');
    $cityId = GeoCity::getCityCurrent();
    switch ($WEB_FORM_ID) {
        case 1:
            if ($cityId == 'RU-MOW' || $cityId == 'RU-MOS')
                $mailTemplateID = 177;
            elseif ($cityId == 'RU-TUL')
                $mailTemplateID = 84;
            CFormResult::Mail($RESULT_ID, intval($mailTemplateID));
            break;
        case 2:
            if ($cityId == 'RU-MOW' || $cityId == 'RU-MOS')
                $mailTemplateID = 176;
            elseif ($cityId == 'RU-TUL')
                $mailTemplateID = 85;
            CFormResult::Mail($RESULT_ID, intval($mailTemplateID));
            break;
        case 3:
            if ($cityId == 'RU-MOW' || $cityId == 'RU-MOS')
                $mailTemplateID = 175;
            elseif ($cityId == 'RU-TUL')
                $mailTemplateID = 86;
            CFormResult::Mail($RESULT_ID, intval($mailTemplateID));
            break;
        case 4:
            if ($cityId == 'RU-MOW' || $cityId == 'RU-MOS')
                $mailTemplateID = 174;
            elseif ($cityId == 'RU-TUL')
                $mailTemplateID = 87;
            CFormResult::Mail($RESULT_ID, intval($mailTemplateID));
            break;
    }
}
