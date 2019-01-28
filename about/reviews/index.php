<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Отзывы наших клиентов о веб студии Dial.");
$APPLICATION->SetPageProperty("title", "Отзывы о Dial Digital Agency");
$APPLICATION->SetPageProperty("subtitle", "Доверие наших заказчиков - несомненно предмет нашей гордости");
$APPLICATION->SetTitle("Отзывы");
?><?$APPLICATION->IncludeComponent(
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
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>