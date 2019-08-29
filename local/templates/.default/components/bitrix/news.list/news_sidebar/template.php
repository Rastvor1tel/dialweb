<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="news__feed">
	<div class="news__feed-title">
        <?
        if (LANGUAGE_ID == 'ru') {
            echo 'Последние новости';
        } else {
            echo 'Latest news';
        }
        ?>
    </div>
	<?foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<a class="news__feed-item" href="<?=$arItem['DETAIL_PAGE_URL']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="news__feed-date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
			<div class="news__feed-name">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arItem["NAME"];
                } else {
                    echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'];
                }
                ?>
            </div>
		</a>
	<?endforeach?>
</div>