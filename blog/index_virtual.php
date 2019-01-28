<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->IncludeComponent("dial:siblings", "blog", array(
	"IBLOCK_ID" => 6,
	"ELEMENT_ID" => $GLOBALS['BLOG_ELEMENT_ID']
));
?>