<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Context;
use Bitrix\Main\Service\GeoIp;
use Bitrix\Main\Loader;

Class GeoCity extends CBitrixComponent {

    private static $iblockID = 14;

    public function checkModules() {
        return Loader::includeModule("iblock");
    }

    public static function getCityCurrent() {
        return $_SESSION['city'];
    }

    public static function getCityCode() {
        if ($_SESSION['city'] && $_SESSION['SITE_ID'] == SITE_ID) {
            return self::getCityCurrent();
        } else {
            if (SITE_ID == 's1') {
                $cityCode = self::getGeoCode();
                $iblockCityCode = self::getCityGeoCode(['CODE' => $cityCode]);
                if ($iblockCityCode)
                    self::setCity($cityCode);
                else
                    self::setCity('RU-TUL');
            } else {
                $cityCode = self::getCityGeoCode(['PROPERTY_SITE_ID' => SITE_ID]);
                if ($cityCode)
                    self::setCity($cityCode);
                else
                    self::setCity('RU-TUL');
            }
            return self::getCityCurrent();
        }
    }

    public static function getCityName() {
        $cityCode = self::getCityCurrent();
        $cityData = GeoCity::getCityGeoData(['CODE' => $cityCode], ['NAME']);
        return $cityData['NAME'];
    }

    public static function getCityGeoData(array $filter, array $fields) {
        $filter['IBLOCK_ID'] = self::$iblockID;
        $filter['ACTIVE'] = 'Y';
        $arCity = CIBlockElement::GetList([], $filter, false, [], $fields)->Fetch();
        return $arCity;
    }

    public static function getCityGeoDataList(array $filter, array $fields) {
        $result = [];
        $filter['IBLOCK_ID'] = self::$iblockID;
        $filter['ACTIVE'] = 'Y';
        $fields[] = 'PROPERTY_SITE_ID';
        $arCity = CIBlockElement::GetList(['SORT' => 'ASC'], $filter, false, [], $fields);
        while ($cityItem = $arCity->Fetch()) {
            $result[$cityItem['CODE']] = $cityItem;
        }
        return $result;
    }

    public static function getCityGeoCode(array $filter) {
        $filter['IBLOCK_ID'] = self::$iblockID;
        $filter['ACTIVE'] = 'Y';
        $arCity = CIBlockElement::GetList([], $filter, false, [], [])->Fetch();
        return $arCity['CODE'];
    }

    public static function getGeoCode() {
        $isBot = preg_match("~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl)~i", $_SERVER['HTTP_USER_AGENT']);
        if (!$isBot) {
            $ipAdress = GeoIp\Manager::getRealIp();
            //$ipAdress = '195.239.1.1'; // Москва IP
            //$ipAdress = '94.159.65.182'; // Московская обл. IP
            //$ipAdress = '93.187.178.162'; // Калуга IP
            GeoIp\Manager::useCookieToStoreInfo(true);
            $geoObject = GeoIp\Manager::getDataResult($ipAdress, 'ru');
            $geoResult = $geoObject->getGeoData();
        }
        return $geoResult->regionCode;
    }

    public static function setCity($code) {
        $_SESSION['SITE_ID'] = SITE_ID;
        $_SESSION['city'] = $code;
    }

    public function executeComponent() {
        if ($this->checkModules()) {
            $request = Context::getCurrent()->getRequest();
            $cityCode = $request->getQuery("city");
            if (!$cityCode) {
                self::getCityCode();
            } else {
                self::setCity($cityCode);
            }
        }
    }

}
