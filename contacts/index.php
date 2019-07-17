<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetPageProperty("description", "Контакты Digital Agency Dial.");
$APPLICATION->SetPageProperty("subtitle", Loc::getMessage('PAGE_CONTACTS_META_SUBTITLE'));
$APPLICATION->SetTitle(Loc::getMessage('PAGE_CONTACTS_META_PAGETITLE'));
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>