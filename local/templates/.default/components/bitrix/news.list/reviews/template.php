<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (isset($_GET['SHOW_MORE'])) {
	$APPLICATION->RestartBuffer();
	while (ob_get_level()) {
		ob_end_clean();
	}
}
?>
<div class="review-list js-show-more-container">
	<?foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 218, "height" => 90), BX_RESIZE_IMAGE_PROPORTIONAL);
		?>
		<div class="review" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="review__wrap">
				<div class="review__left">
					<div class="review__image">
						<img src="<?=$image['src']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>">
					</div>
				</div>
				<div class="review__right">
					<div class="review__name"><?=$arItem["NAME"]?></div>
					<div class="review__author"><?=$arItem["PROPERTIES"]["AUTHOR"]["VALUE"]?></div>
					<div class="review__post"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></div>
					<div class="review__links">
						<?if (!empty($arItem['PROPERTIES']['VIDEO']['VALUE'])):?>
							<a class="review__link _video" href="<?=$arItem['PROPERTIES']['VIDEO']['VALUE']?>" data-fancybox="review<?=$arItem['ID']?>">Смотреть видео</a>
						<?endif?>
						<?if (!empty($arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC'])):?>
							<a class="review__link" href="<?=$arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC']?>" data-fancybox="review<?=$arItem['ID']?>">Читать благодарственное письмо</a>
						<?endif?>
					</div>
				</div>
			</div>
			<div class="review__text"><?=$arItem["PREVIEW_TEXT"]?></div>
		</div>
	<?endforeach?>
</div>
<?=$arResult['NAV_STRING']?>
<?
if (isset($_GET['SHOW_MORE'])) {
	die();
}