<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul class="services__list">
	<?foreach ($arResult as $arItem):?>
		<li class="services__item">
			<a class="services-item" href="<?=$arItem["LINK"]?>">
				<div class="services-item__title">
					<div class="services-item__name"><?=$arItem["TEXT"]?></div>
					<div class="services-item__arrow"></div>
				</div>
				<div class="services-item__info"><?=$arItem["PARAMS"]["info"]?></div>
			</a>
		</li>
	<?endforeach?>
</ul>