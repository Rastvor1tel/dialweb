<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Посещайте занятия, разработанные лучшими преподавателями Тулы в отрасли программирования и верстки.");
$APPLICATION->SetPageProperty("subtitle", "Посещайте занятия, разработанные лучшими преподавателями Тулы в отрасли программирования и верстки");
$APPLICATION->SetTitle("Академия");
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "academy", array(
	"IBLOCK_ID" => "2",
	"NEWS_COUNT" => "10",
	"SET_TITLE" => "N",
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
	"PROPERTY_CODE" => array("PRICE")
));?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>