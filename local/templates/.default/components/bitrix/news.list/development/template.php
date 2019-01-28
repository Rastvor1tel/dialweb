<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (isset($_GET['SHOW_MORE'])) {
	$APPLICATION->RestartBuffer();
	while (ob_get_level()) {
		ob_end_clean();
	}
}
?>
<div class="cases__wrap _active js-show-more-container">
	<?foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<a class="cases__item case-item" href="<?=$arItem['DETAIL_PAGE_URL']?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="case-item__info">
				<div class="case-item__type"><?=$arItem["PROPERTIES"]["TYPE"]["VALUE"]?></div>
				<div class="case-item__name"><?=$arItem["NAME"]?></div>
				<div class="case-item__description"><?=$arItem["PREVIEW_TEXT"]?></div>
			</div>
		</a>
	<?endforeach?>
</div>
<?=$arResult['NAV_STRING']?>
<?
if (isset($_GET['SHOW_MORE'])) {
	die();
}