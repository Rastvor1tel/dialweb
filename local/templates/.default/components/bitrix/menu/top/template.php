<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul class="navigation__list">
	<?foreach ($arResult as $arItem):?>
		<li class="navigation__item<?if ($arItem["SELECTED"]):?> _active<?endif?>">
			<a class="navigation__link" href="<?=$arItem["LINK"]?>"><div class="navigation__arrow"></div><?=$arItem["TEXT"]?></a>
		</li>
	<?endforeach?>
</ul>