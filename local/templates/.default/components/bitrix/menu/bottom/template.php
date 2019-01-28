<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<ul class="footer__menu">
	<?foreach ($arResult as $arItem):?>
		<li class="footer__menu-item"><a class="footer__menu-link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endforeach?>
</ul>