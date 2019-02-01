<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

CBitrixComponent::includeComponentClass('dial:city');

Class GeoCityChange extends GeoCity {

    public function checkModules() {
        return Loader::includeModule("iblock");
    }

    public function getSiteList() {
        $result = [];
        $count = 0;

        $cityList = GeoCity::getCityGeoDataList([],['NAME', 'CODE']);

        foreach ($cityList as $cityItem) {
            $site = CSite::GetList($by="sort", $order="desc", ['LID' => $cityItem['PROPERTY_SITE_ID_VALUE']])->Fetch();
            $result[$count]['NAME'] = $cityItem['NAME'];
            if ($cityItem['PROPERTY_SITE_ID_VALUE'] == 's1')
                $result[$count]['SITE_URL'] = 'https://'.$site['SERVER_NAME'].'?city='.$cityItem['CODE'];
            else
                $result[$count]['SITE_URL'] = 'https://'.$site['SERVER_NAME'];
            if (GeoCity::getCityCurrent() == $cityItem['CODE']) {
                $result[$count]['ACTIVE'] = 'Y';
            } else {
                $result[$count]['ACTIVE'] = 'N';
            }
            $count++;
        }
        return $result;
    }

    public function executeComponent() {
        if ($this->checkModules()) {
            $this->arResult['ITEMS'] = $this->getSiteList();
            $this->includeComponentTemplate();
        }
    }

}