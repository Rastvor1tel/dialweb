<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetPageProperty("subtitle", Loc::getMessage('PAGE_PARTNERS_META_SUBTITLE'));
$APPLICATION->SetTitle(Loc::getMessage('PAGE_PARTNERS_META_PAGETITLE'));
?>
<?
$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "",
    Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/about/partnership/".LANGUAGE_ID ."_partners_text.php"
    )
);
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>