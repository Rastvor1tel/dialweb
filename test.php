<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Test");

use Bitrix\Main\Loader;
Loader::includeModule("iblock");

$rsCity = CIBlockElement::GetList([], ['IBLOCK_ID' => 14, 'PROPERTY_SITE_ID' => SITE_ID], false, [], []);
while ($arCity = $rsCity->Fetch()) {
    print_r($arCity);
}

/*use Bitrix\Main\Service\GeoIp;

$is_bot = preg_match("~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl)~i", $_SERVER['HTTP_USER_AGENT']);

if (!$is_bot) {
    $ipAdress = GeoIp\Manager::getRealIp();
    GeoIp\Manager::useCookieToStoreInfo(true);
    $geoObject = GeoIp\Manager::getDataResult($ipAdress, 'ru');
    $geoResult = $geoObject->getGeoData();
}

echo '<pre>';
print_r($geoResult->regionCode);
echo '<pre>';*/

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>