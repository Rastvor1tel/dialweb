<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Услуги Digital Agency Dial.");
$APPLICATION->SetPageProperty("subtitle", "Настоящий правильный комплекс интернет-маркетинга");
$APPLICATION->SetTitle("Услуги");

/* global $USER;
if ($USER->IsAdmin()) {
	$curSite = explode('.', $_SERVER['HTTP_HOST']);
	if (count($curSite) == 3) {
		$siteRegion = $curSite[0];
		$metaTitle = 'PROPERTY_'.$siteRegion.'_META_TITLE';
		$metaDescription = 'PROPERTY_'.$siteRegion.'_DESCRIPTION';
	}
} */

$APPLICATION->IncludeComponent("bitrix:news", "services", array(
	"IBLOCK_TYPE" => "primary",
	"IBLOCK_ID" => "9",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/services/",
	/* "BROWSER_TITLE" => "PROPERTY_kaluga_META_TITLE",
	"META_DESCRIPTION" => "PROPERTY_kaluga_DESCRIPTION", */
	"SEF_URL_TEMPLATES" => array("news" => "index.php", "detail" => "#ELEMENT_CODE#/"),
));

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>