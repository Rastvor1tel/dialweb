<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="development__bottom">
	<div class="development__cases">
		<div class="development__tabs tabs">
			<?foreach ($arResult['SECTIONS'] as $key => $arSection):?>
				<button class="development__tab tabs__item button<?=($key == 0 ? ' _active' : '')?>" type="button" data-category="<?=$key?>">
					<?=$arSection['NAME']?>
					<span class="tabs__count"><?=$arSection['ELEMENT_CNT']?></span>
				</button>
			<?endforeach?>
		</div>
		<div class="cases-slider">
			<?foreach ($arResult['SECTIONS'] as $key => $arSection):?>
				<div class="cases-slider__wrap js-cases-tab-content<?=($key == 0 ? ' _active' : '')?>" data-category="<?=$key?>">
					<?foreach ($arSection['ITEMS'] as $arItem):
						$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 400, "height" => 460), BX_RESIZE_IMAGE_EXACT);
						?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="cases-slider__item case-item" style="background-image: url(<?=$image['src']?>)">
							<div class="case-item__info">
								<div class="case-item__type"><?=$arItem['PROPERTY_TYPE_VALUE']?></div>
								<div class="case-item__name"><?=$arItem['NAME']?></div>
								<div class="case-item__description"><?=$arItem['PREVIEW_TEXT']?></div>
							</div>
						</a>
					<?endforeach?>
				</div>
			<?endforeach?>
		</div>
	</div>
	<div class="development__right">
		<div class="development__controls contols">
			<button class="development__contols-item contols__item _left" type="button"></button>
			<button class="development__contols-item contols__item _right" type="button"></button>
		</div>
		<div class="development__statistic">
			<div class="development__statistic-compare">Более</div>
			<div class="development__statistic-count">800</div>
			<div class="development__statistic-text">Успешно реализованных проектов</div>
		</div>
		<a class="development__more development__more_cases button button_grey button_arrow" href="<?=$arResult['SECTIONS'][0]['LIST_PAGE_URL']?>">
			<div class="button__arrow-text">Смотреть все кейсы</div>
			<div class="button__arrow"></div>
		</a>
	</div>
</div>