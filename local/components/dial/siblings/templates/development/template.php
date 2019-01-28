<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="case-navigation">
	<div class="container-outer">
		<div class="container-inner">
			<div class="case-navigation__wrap">
				<?foreach ($arResult['ITEMS'] as $key => $arItem):
					if ($key == 0) {
						$mod = '_prev';
					} else {
						$mod = '_next';
					}
					?>
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="case-navigation__link <?=$mod?>">
						<div class="case-navigation__info">
							<div class="case-navigation__name"><?=$arItem['NAME']?></div>
							<div class="case-navigation__type"><?=$arItem['PROPERTY_TYPE_VALUE']?></div>
						</div>
					</a>
				<?endforeach?>
			</div>
		</div>
	</div>
</div>