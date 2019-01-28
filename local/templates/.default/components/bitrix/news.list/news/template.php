<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (isset($_GET['SHOW_MORE'])) {
	$APPLICATION->RestartBuffer();
	while (ob_get_level()) {
		ob_end_clean();
	}
}
?>
<div class="news__wrapper js-show-more-container">
	<?foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		$url = ($arItem['PROPERTIES']['URL']['VALUE']) ? $arItem['PROPERTIES']['URL']['VALUE'] : $arItem['DETAIL_PAGE_URL'];
		?>
		<a 
			class="news__item arrow-block" 
			href="<?=$url?>" 
			id="<?=$this->GetEditAreaId($arItem['ID']);?>" 
			<?=$arItem['PROPERTIES']['ATTRIBUTES']['VALUE']?>
		>
			<div class="arrow-block__date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
			<div class="arrow-block__name"><?=$arItem["NAME"]?></div>
			<div class="arrow-block__arrow"></div>
		</a>
	<?endforeach?>
</div>
<?=$arResult['NAV_STRING']?>
<?
if (isset($_GET['SHOW_MORE'])) {
	die();
}