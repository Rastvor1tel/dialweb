<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Архив новостей компании.");
$APPLICATION->SetPageProperty("subtitle", "Все самое интересное из жизни компании. Мы публикуем статьи, исследования, новости рынка и контекстной рекламы");
$APPLICATION->SetTitle("Новости");
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