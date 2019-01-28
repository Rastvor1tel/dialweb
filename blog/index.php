<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Блог о SEO и интернет-маркетинге");
$APPLICATION->SetPageProperty("description", "Блог о SEO и интернет-маркетинге");
$APPLICATION->SetPageProperty("subtitle", "Все самое интересное из жизни компании. Мы публикуем статьи, исследования, новости рынка и контекстной рекламы.");
$APPLICATION->SetTitle("Блог");
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