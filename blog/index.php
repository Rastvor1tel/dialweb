<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetPageProperty("title", Loc::getMessage('PAGE_BLOG_META_BROWSERTITLE'));
$APPLICATION->SetPageProperty("description", Loc::getMessage('PAGE_BLOG_META_BROWSERTITLE'));
$APPLICATION->SetPageProperty("subtitle", Loc::getMessage('PAGE_BLOG_META_SUBTITLE'));
$APPLICATION->SetTitle(Loc::getMessage('PAGE_BLOG_META_PAGETITLE'));
?>
<?$APPLICATION->IncludeComponent("bitrix:news", "blog", array(
	"IBLOCK_TYPE" => "primary",
	"IBLOCK_ID" => "6",
	"NEWS_COUNT" => "12",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/blog/",
	"SEF_URL_TEMPLATES" => array("news" => "index.php", "detail" => "#ELEMENT_CODE#/"),
));?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>