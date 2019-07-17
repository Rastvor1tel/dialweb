<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<div class="about__thanks">
	<div class="about__thanks-left">
		<div class="about__title">
			<div class="about__title-name"><?= Loc::getMessage("TITLE_NAME") ?></div>
			<div class="about__title-info"><?= Loc::getMessage("TITLE_INFO") ?></div>
		</div>
		<a class="about__thanks-button button button_grey button_arrow" href="/about/reviews/">
			<div class="button__arrow-text"><?= Loc::getMessage("ARROW_TEXT") ?></div>
			<div class="button__arrow"></div>
		</a>
	</div>
	<div class="about__thanks-right">
		<?foreach($arResult['ITEMS'] as $arItem):
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
			?>
			<div class="review" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="review__wrap">
					<div class="review__left">
						<div class="review__image">
							<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>">
						</div>
						<?if (!empty($arItem['PROPERTIES']['VIDEO']['VALUE'])):?>
							<a class="review__link _video" href="<?=$arItem['PROPERTIES']['VIDEO']['VALUE']?>" data-fancybox="review<?=$arItem['ID']?>"><?= Loc::getMessage("WATCH_VIDEO") ?></a>
						<?endif?>
						<?if (!empty($arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC'])):?>
							<a class="review__link" href="<?=$arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC']?>" data-fancybox="review<?=$arItem['ID']?>"><?= Loc::getMessage("READ_LETTER") ?></a>
						<?endif?>
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
				</div>
			</div>
		<?endforeach?>
	</div>
</div>
<?
//p($arResult['ITEMS']);
?>