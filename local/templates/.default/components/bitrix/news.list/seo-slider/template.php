<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="seo">
	<div class="seo__head _full">
		<div class="seo__steps steps">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<button class="seo__steps-item steps__item" type="button"><?=$arItem["PROPERTIES"]["BUTTON_TITLE"]["VALUE"]?></button>
			<?endforeach?>
		</div>
	</div>
	<div class="seo-slider _full">
		<div class="seo-slider__viewport">
			<div class="seo-slider__wrap">
				<?foreach($arResult["ITEMS"] as $key => $arItem):
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
					?>
					<div class="seo-slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="seo-slider__left">
							<div class="seo-slider__name"><?=$arItem["NAME"]?></div>
							<div class="seo-slider__title"><?=$key + 1?> шаг</div>
							<div class="seo__contols _full">
								<div class="contols">
									<button class="seo__contols-item contols__item _left" type="button"></button>
									<button class="seo__contols-item contols__item _right" type="button"></button>
								</div>
							</div>
						</div>
						<div class="seo-slider__description content">
							<?=$arItem["PREVIEW_TEXT"]?>
						</div>
					</div>
				<?endforeach?>
			</div>
		</div>
	</div>
</div>