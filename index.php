<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetPageProperty("description", Loc::getMessage('INDEX_DESCRIPTION'));
$APPLICATION->SetTitle(Loc::getMessage('INDEX_PAGETITLE'));
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>