<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<? if ($arResult['ITEMS']) :?>
<div class="city-select">
    <div class="city-select__close"></div>
    <div class="container-outer">
        <div class="city-select__title">Выберите город:</div>
        <div class="city-select__items">
            <? foreach ($arResult['ITEMS'] as $arItem) {?>
                <div class="city-select__item<?=$arItem['ACTIVE']=='Y'?' active':'';?>">
                    <a href="<?=$arItem['SITE_URL']?>"><span></span><div><?=$arItem['NAME']?></div></a>
                </div>
            <?}?>
        </div>
    </div>
</div>
<?endif?>