<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="page-title">Кейсы</div>
<div class="slogan _bold angle">Мы не работаем впустую. Каждый результат фиксируется. В итоге мы можем проследить эффективность нашей работы и показать вам</div>
<div class="development__controls contols _services">
	<button class="development__contols-item contols__item _left" type="button"></button>
	<button class="development__contols-item contols__item _right" type="button"></button>
</div>
<div class="cases-slider _services">
	<div class="cases-slider__wrap _active">
		<?foreach($arResult['ITEMS'] as $arItem):?>
			<a class="cases-slider__item case-item" href="<?=$arItem['DETAIL_PAGE_URL']?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
				<div class="case-item__info">
					<div class="case-item__type"><?=$arItem["PROPERTIES"]["TYPE"]["VALUE"]?></div>
					<div class="case-item__name"><?=$arItem["NAME"]?></div>
					<div class="case-item__description"><?=$arItem["PREVIEW_TEXT"]?></div>
				</div>
			</a>
		<?endforeach?>
	</div>
</div>