<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->IncludeComponent("dial:siblings", "blog", array(
	"IBLOCK_ID" => 10,
	"ELEMENT_ID" => $GLOBALS['NEWS_ELEMENT_ID']
));
?>