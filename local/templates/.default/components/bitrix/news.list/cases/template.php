<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (isset($_GET['SHOW_MORE'])) {
	$APPLICATION->RestartBuffer();
	while (ob_get_level()) {
		ob_end_clean();
	}
}
?>
<div class="seo-cases _inner js-show-more-container">
	<?foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<div class="seo-cases__item _inner" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="seo-cases__case">
				<div class="seo-cases__image">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
				</div>
				<div class="seo-cases__company">
					<div class="seo-cases__type"><?=$arItem["PROPERTIES"]["TYPE"]["VALUE"]?></div>
					<div class="seo-cases__name"><?=$arItem["NAME"]?></div>


			
					<a class="seo-cases__link" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" target="_blank">
						<?if (!empty($arItem["PROPERTIES"]["LINK"]["DESCRIPTION"])){
							echo $arItem["PROPERTIES"]["LINK"]["DESCRIPTION"];
						}else{
							echo $arItem["PROPERTIES"]["LINK"]["VALUE"];
						}?></a>



					<a class="seo-cases__more button button_grey button_arrow" href="<?=$arItem['DETAIL_PAGE_URL']?>">
						<div class="button__arrow-text">Смотреть кейс</div>
						<div class="button__arrow"></div>
					</a>
				</div>
			</div>
			<div class="seo-cases__info">
				<div class="seo-cases__target">
					<div class="seo-cases__target-title">Цель:</div>
					<div class="seo-cases__target-text"><?=$arItem["PREVIEW_TEXT"]?></div>
				</div>
				<div class="seo-cases__result">
					<div class="seo-cases__result-title">
						<span>Результат</span>
						<span><?=$arItem["PROPERTIES"]["RESULT_LIST"]["DESCRIPTION"]?></span>
					</div>
					<div class="seo-cases__result-info"><?=$arItem["PROPERTIES"]["RESULT_LIST"]["VALUE"]?></div>
				</div>
			</div>
		</div>
	<?endforeach?>
</div>
<?=$arResult['NAV_STRING']?>
<?
if (isset($_GET['SHOW_MORE'])) {
	die();
}