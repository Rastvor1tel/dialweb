<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetPageProperty("description", "Отзывы наших клиентов о веб студии Dial.");
$APPLICATION->SetPageProperty("title", Loc::getMessage('PAGE_REVIEWS_META_PAGETITLE2'));
$APPLICATION->SetPageProperty("subtitle", Loc::getMessage('PAGE_REVIEWS_META_SUBTITLE'));
$APPLICATION->SetTitle(Loc::getMessage('PAGE_REVIEWS_META_PAGETITLE'));
?>
<?
$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"reviews",
	Array(
		"IBLOCK_ID" => "8",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "10",
		"PAGER_TEMPLATE" => "show_more",
		"PROPERTY_CODE" => array("REVIEW"),
		"SET_TITLE" => "N"
	)
);
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>