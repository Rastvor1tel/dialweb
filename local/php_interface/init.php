<?
define("TEMPLATE_PATH", '/local/templates/dial/template');

class Helpers
{
	public static function declOfNum($number, $titles)
	{
		$cases = array (2, 0, 1, 1, 1, 2);
		return $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
	}
}

/*use \Bitrix\Main\Service\GeoIp;
AddEventHandler('main', 'OnEpilog', array('CMainHandlers', 'OnEpilogHandler'));
class CMainHandlers {
    public static function OnEpilogHandler() {
        $city = \Bitrix\Main\Service\GeoIp\Manager::getCityName();
        if ($city == 'Moscow') {
            $title = $GLOBALS['APPLICATION']->GetTitle();
            $title1 = str_replace('Тула', 'Москва', $title);
            $title2 = str_replace('в Туле', 'в Москве', $title1);
            $GLOBALS['APPLICATION']->SetPageProperty('title',  $title2);
            $description = $GLOBALS['APPLICATION']->GetProperty("description");
            $description1 = str_replace('Тула', 'Москва', $description);
            $description2 = str_replace('в Туле', 'в Москве', $description1);
            $GLOBALS['APPLICATION']->SetPageProperty('description', $description2);
        }
    }
}*/