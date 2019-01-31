<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Context;
use Bitrix\Main\Application;
use Bitrix\Main\Web\Cookie;
use Bitrix\Main\Service\GeoIp;
use Bitrix\Main\Loader;

Class City extends CBitrixComponent {

    public function checkModules() {
        return Loader::includeModule("iblock");
    }

    public static function getCityCode() {
        if($_SESSION['city']){
            return $_SESSION['city'];
        }else{
            if(Application::getInstance()->getContext()->getRequest()->getCookie("city")){
                self::setCity(Application::getInstance()->getContext()->getRequest()->getCookie("city"));
            }else{
                if (SITE_ID == 's1') {
                    $cityCode = self::getGeoCode();
                    $rsCity = CIBlockElement::GetList([], ['IBLOCK_ID' => 14, 'PROPERTY_SITE_ID' => SITE_ID], [], [], [])->FetchAll();
                } else {
                    self::setCity('RU-TUL');
                }
            }
            return $_SESSION['city'];
        }
    }

    public static function getGeoCode() {
        $isBot = preg_match("~(Google|Yahoo|Rambler|Bot|Yandex|Spider|Snoopy|Crawler|Finder|Mail|curl)~i", $_SERVER['HTTP_USER_AGENT']);
        if (!$isBot) {
            $ipAdress = GeoIp\Manager::getRealIp();
            GeoIp\Manager::useCookieToStoreInfo(true);
            $geoObject = GeoIp\Manager::getDataResult($ipAdress, 'ru');
            $geoResult = $geoObject->getGeoData();
        }
        return $geoResult->regionCode;
    }

    public static function setCity($code) {
        $_SESSION['city'] = $code;
        $cookie = new Cookie('city', $code);
        $cookie->setDomain('/');
    }

    public function executeComponent() {
        if ($this->checkModules()) {
            $request = Context::getCurrent()->getRequest();
            $cityCode = $request->getQuery("city");
            if (!$cityCode) {
                $code = self::getCityCode();
                self::setCity($code);
            } else {
                self::setCity($cityCode);
            }
        }
    }
}