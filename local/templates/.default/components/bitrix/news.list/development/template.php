<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
if (isset($_GET['SHOW_MORE'])) {
	$APPLICATION->RestartBuffer();
	while (ob_get_level()) {
		ob_end_clean();
	}
}
?>
<div class="cases__wrap _active js-show-more-container">
	<?foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<a class="cases__item case-item" href="<?=$arItem['DETAIL_PAGE_URL']?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="case-item__info">
				<div class="case-item__type">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        echo  $arItem["PROPERTIES"]["TYPE"]["VALUE"];
                    } else {
                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TYPE']['VALUE'];
                    }
                    ?>
                </div>
				<div class="case-item__name">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        echo  $arItem['NAME'];
                    } else{
                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_MANE']['VALUE'];
                    }
                    ?>
                </div>
				<div class="case-item__description">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        echo  $arItem['PREVIEW_TEXT'];
                    } else {
                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_INTROTEXT']['VALUE']['TEXT'];
                    }
                    ?>
                </div>
			</div>
		</a>
	<?endforeach?>
</div>
<?=$arResult['NAV_STRING']?>
<?
if (isset($_GET['SHOW_MORE'])) {
	die();
}