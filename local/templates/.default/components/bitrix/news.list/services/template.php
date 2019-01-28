<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<ul class="services__list">
	<?foreach($arResult["ITEMS"] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<li class="services__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a class="services-item" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<div class="services-item__title">
					<div class="services-item__name"><?=$arItem["NAME"]?></div>
					<div class="services-item__arrow"></div>
				</div>
				<div class="services-item__info"><?=$arItem["PREVIEW_TEXT"]?></div>
			</a>
		</li>
	<?endforeach?>
</ul>