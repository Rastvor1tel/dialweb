<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="actions__wrap">
	<?foreach($arResult["ITEMS"] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<a class="actions__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
			<div class="actions__info">
				<div class="actions__name"><?=$arItem["NAME"]?></div>
				<div class="actions__button button">Узнать условия</div>
			</div>
		</a>
	<?endforeach?>
</div>