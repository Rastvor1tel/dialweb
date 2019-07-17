<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$APPLICATION->SetTitle(Loc::getMessage('PAGE_CASES_META_PAGETITLE'));
$APPLICATION->IncludeComponent("bitrix:news", "cases", array(
	"IBLOCK_TYPE" => "primary",
	"IBLOCK_ID" => "11",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "/portfolio/",
	"SEF_URL_TEMPLATES" => array("development" => "index.php", "section" => "#SECTION_CODE#/", "detail" => "#SECTION_CODE#/#ELEMENT_CODE#/"),
));
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>