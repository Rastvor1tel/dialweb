<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetPageProperty("description", "Архив новостей компании.");
$APPLICATION->SetPageProperty("subtitle", Loc::getMessage('PAGE_NEWS_META_SUBTITLE'));
$APPLICATION->SetTitle(Loc::getMessage('PAGE_NEWS_META_PAGETITLE'));
?>

<?$APPLICATION->IncludeComponent("bitrix:news", "news", array(
	"IBLOCK_TYPE" => "primary",
	"IBLOCK_ID" => "10",
	"NEWS_COUNT" => "12",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/news/",
	"SEF_URL_TEMPLATES" => array("news" => "index.php", "detail" => "#ELEMENT_CODE#/"),
));?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>