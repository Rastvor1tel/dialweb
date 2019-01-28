<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="case-navigation _blog">
	<div class="container-outer">
		<div class="container-inner">
			<div class="case-navigation__wrap _blog">
				<?foreach ($arResult['ITEMS'] as $key => $arItem):
					if ($key == 0) {
						$mod = '_prev';
					} else {
						$mod = '_next';
					}
					?>
					<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="case-navigation__link _blog <?=$mod?>">
						<div class="case-navigation__info">
							<div class="case-navigation__name"><?=$arItem['NAME']?></div>
						</div>
					</a>
				<?endforeach?>
			</div>
		</div>
	</div>
</div>