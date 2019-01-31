<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?if (count($arResult['ITEMS']) > 3):?>
	<div class="tariff__contols contols">
		<button class="tariff__contols-item contols__item _left" type="button"></button>
		<button class="tariff__contols-item contols__item _right" type="button"></button>
	</div>
	<div class="tariff__slider">
<?endif?>
<div class="tariff__wrap">
	<?foreach($arResult['ITEMS'] as $key => $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<div class="tariff__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="tariff__number" data-number="0<?=$key+1?>">Тариф</div>
			<div class="tariff__info">
				<?
				if ($arItem['PROPERTIES']['LINK']['VALUE']) {
					?>
					<a href="<?=$arItem['PROPERTIES']['LINK']['VALUE'];?>" class="tariff__name"><?=$arItem["NAME"]?></a>
					<?
				} else {
					?>
					<div class="tariff__name"><?=$arItem["NAME"]?></div>
					<?
				}
				?>
				<div class="tariff__desc"><?=$arItem["PREVIEW_TEXT"]?></div>
				<div class="tariff__price">
					<?if (isset($arItem["PROPERTIES"]["PRICE"]["VALUE"]) && $arItem["PROPERTIES"]["PRICE"]["VALUE"] !=0):?>
						<div class="tariff__price-text">от</div>
						<div class="tariff__price-wrap">
							<div class="tariff__price-count"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></div>
							<div class="tariff__price-text">рублей</div>
						</div>
					<?endif;?>
					<?if ($arItem["PROPERTIES"]["ADD_PRICE"]["VALUE"]):?>
							<?foreach($arItem["PROPERTIES"]["ADD_PRICE"]["VALUE"] as $k=>$val):?>
										<div class="tariff__price-text"><?=$arItem["PROPERTIES"]["ADD_PRICE"]["DESCRIPTION"][$k]?> от</div>
										<div class="tariff__price-wrap">
											<div class="tariff__price-count"><?=$val?></div>
											<div class="tariff__price-text">рублей</div>
										</div>
							<?endforeach;?>
					<?endif;?>
					<?/*if($arItem['IBLOCK_SECTION_ID'] == 9){?>
						<div class="black-friday__price">от<span><?=$arItem["PROPERTIES"]["BLACKFRIDAY_PRICE"]["VALUE"]?></span>рублей</div>
					<?};*/?>
				</div>
				<button class="tariff__order button button_oragne" type="button" data-popup="js-popup-service">Заказать услугу</button>
			</div>
		</div>
	<?endforeach?>
</div>
<?if (count($arResult['ITEMS']) > 3):?>
	</div>
<?endif?>
<?
global $USER;
if ($USER->IsAdmin()) {
/*echo '<pre>';
print_r($arResult['ITEMS']);
echo '</pre>';*/
}
?>