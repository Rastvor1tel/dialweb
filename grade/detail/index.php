<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Оценка профессионализма сотрудника при работе с клиентом");
$APPLICATION->SetTitle("Оценка сотрудника");
?><div class="grade center">
<?$APPLICATION->IncludeComponent(
	"dial:grade.info", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"GRADES_IBLOCK_ID" => "12",
		"GRADES_IBLOCK_TYPE" => "secondary",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "blog",
		"PAGER_TITLE" => "",
		"PERSONS_IBLOCK_ID" => "",
		"PERSONS_IBLOCK_TYPE" => "ibt_info_k3",
		"PERSON_ID" => $_REQUEST["id"]
	),
	false
);?>
</div>
 <br><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>