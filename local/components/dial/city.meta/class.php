<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

CBitrixComponent::includeComponentClass('dial:city');

Class GeoCityChangeMeta extends GeoCity {

    public function changeMeta() {
        $arSelect = ["ID", "*", "IBLOCK_ID", "PROPERTY_P_IM", "PROPERTY_P_R", "PROPERTY_P_V", "PROPERTY_P_T", "PROPERTY_P_P", "PROPERTY_CHANGE_META"];
        $this->arResult['CITY'] = $this->getCityGeoData(["CODE" => $_SESSION['city']], $arSelect);
        if($this->arResult['CITY']['PROPERTY_CHANGE_META_VALUE']) {
            global $APPLICATION;
            $this->arResult["TITLE"] = $APPLICATION->GetPageProperty("title");
            $this->arResult["H1"] = $APPLICATION->GetTitle("false");
            $this->arResult["DESCRIPTION"] = $APPLICATION->GetPageProperty("description");
            $arrayShaffle = [
                "Тула" => "PROPERTY_P_IM_VALUE",
                "Тулы" => "PROPERTY_P_R_VALUE",
                "Тулу" => "PROPERTY_P_V_VALUE",
                "Тулой" => "PROPERTY_P_T_VALUE",
                "Туле" => "PROPERTY_P_P_VALUE"
            ];

            foreach ($arrayShaffle as $key => $value) {
                if (stripos($this->arResult['TITLE'], $key)) {
                    $APPLICATION->SetPageProperty('title', str_ireplace($key, $this->arResult['CITY'][$value], $this->arResult['TITLE']));
                    $APPLICATION->SetPageProperty('description', str_ireplace($key, $this->arResult['CITY'][$value], $this->arResult['DESCRIPTION']));
                }
                if (stripos($this->arResult['H1'], $key)) {
                    $APPLICATION->SetTitle(str_ireplace($key, $this->arResult['CITY'][$value], $this->arResult['H1']));
                }
            }
        }
    }

    public function executeComponent() {
        if ($this->checkModules()) {
            $this->arResult['CITY'] = $_SESSION['city'];
            $this->changeMeta();
        }
    }

}
