<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

CBitrixComponent::includeComponentClass('dial:city');

Class GeoCityShow extends GeoCity {

    public function checkModules() {
        return Loader::includeModule("iblock");
    }

    public function getCityData() {
        $cityCode = ($this->arParams['CITY_CODE']) ? $this->arParams['CITY_CODE'] : GeoCity::getCityCurrent();
        $field = $this->arParams['FIELD'] ? $this->arParams['FIELD'] : 'PROPERTY_PHONE';
        $cityData = GeoCity::getCityGeoData(['CODE' => $cityCode], [$field]);
        if ($cityData[$field.'_VALUE'])
            return $cityData[$field.'_VALUE'];
        else
            return $cityData[$field];
    }

    public function executeComponent() {
        if ($this->checkModules()) {
            $this->arResult['FIELD'] = $this->getCityData();
            $this->includeComponentTemplate();
        }
    }
}
