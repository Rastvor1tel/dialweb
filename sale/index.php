<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Акции и бонусы.");
$APPLICATION->SetTitle("Акции");
?>
<?$APPLICATION->IncludeComponent("bitrix:news", "sale", array(
	"IBLOCK_TYPE" => "primary",
	"IBLOCK_ID" => "3",
	"NEWS_COUNT" => "20",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/sale/",
	"SEF_URL_TEMPLATES" => array("news" => "index.php", "detail" => "#ELEMENT_CODE#/"),
));?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>