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
<div class="review-list js-show-more-container">
	<?foreach($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 218, "height" => 90), BX_RESIZE_IMAGE_PROPORTIONAL);
        if (LANGUAGE_ID != 'ru') {
            if ($arItem['PROPERTIES'][strtoupper(LANGUAGE_ID) . '_NAME']['VALUE']) {
            } else {
                continue;
            }
        }
		?>
		<div class="review" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="review__wrap">
				<div class="review__left">
					<div class="review__image">
						<img src="<?=$image['src']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>">
					</div>
				</div>
				<div class="review__right">
					<div class="review__name">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem['NAME'];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'];
                        }
                        ?>
                    </div>
					<div class="review__author">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["PROPERTIES"]["AUTHOR"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_AUTHOR']['VALUE'];
                        }
                        ?>
                    </div>
					<div class="review__post">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["PROPERTIES"]["POSITION"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_POSITION']['VALUE'];
                        }
                        ?>
                    </div>
					<div class="review__links">
						<?if (!empty($arItem['PROPERTIES']['VIDEO']['VALUE'])):?>
							<a class="review__link _video" href="<?=$arItem['PROPERTIES']['VIDEO']['VALUE']?>" data-fancybox="review<?=$arItem['ID']?>"><?= Loc::getMessage("WATCH_VIDEO") ?></a>
						<?endif?>
						<?if (!empty($arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC'])):?>
							<a class="review__link" href="<?=$arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC']?>" data-fancybox="review<?=$arItem['ID']?>"><?= Loc::getMessage("READ_LETTER") ?></a>
						<?endif?>
					</div>
				</div>
			</div>
			<div class="review__text">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo  $arItem['PREVIEW_TEXT'];
                } else {
                    echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_INTROTEXT']['~VALUE']['TEXT'];
                }
                ?>
            </div>
		</div>
	<?endforeach?>
</div>
<?=$arResult['NAV_STRING']?>
<?
if (isset($_GET['SHOW_MORE'])) {
	die();
}