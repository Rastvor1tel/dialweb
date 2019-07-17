<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

<div class="links-block">
	<?foreach($arResult['ITEMS'] as $key => $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
        <a href="<?=$arItem['PROPERTIES']['LINK']['VALUE']?>" class="links-block__item"id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <?=$arItem['NAME']?>
        </a>
	<?endforeach?>
</div>
