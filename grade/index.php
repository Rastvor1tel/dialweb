<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Оценка профессионализма сотрудника при работе с клиентом");
$APPLICATION->SetTitle("Оценка сотрудника");
?><div class="grade center">
	 <?$APPLICATION->IncludeComponent(
	"dial:grade", 
	".default", 
	array(
		"GRADES_IBLOCK_ID" => "12",
		"GRADES_IBLOCK_TYPE" => "secondary",
		"PERSONS_IBLOCK_ID" => "4",
		"PERSONS_IBLOCK_TYPE" => "secondary",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>

 <?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>