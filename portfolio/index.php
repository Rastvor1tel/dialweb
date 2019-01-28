<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кейсы");
?>
<?$APPLICATION->IncludeComponent("bitrix:news", "cases", array(
	"IBLOCK_TYPE" => "primary",
	"IBLOCK_ID" => "11",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/portfolio/",
	"SEF_URL_TEMPLATES" => array("development" => "index.php", "section" => "#SECTION_CODE#/", "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/"),
));?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>