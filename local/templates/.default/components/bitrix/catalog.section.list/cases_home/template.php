<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<div class="development__bottom">
	<div class="development__cases">
		<div class="development__tabs tabs">
			<?foreach ($arResult['SECTIONS'] as $key => $arSection):?>
				<button class="development__tab tabs__item button<?=($key == 0 ? ' _active' : '')?>" type="button" data-category="<?=$key?>">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        echo $arSection['NAME'];
                    } else {
                        echo $arSection['UF_'.strtoupper(LANGUAGE_ID).'_NAME'];
                    }
                    ?>
					<span class="tabs__count"><?=$arSection['ELEMENT_CNT']?></span>
				</button>
			<?endforeach?>
		</div>
		<div class="cases-slider">
			<?foreach ($arResult['SECTIONS'] as $key => $arSection):?>
				<div class="cases-slider__wrap js-cases-tab-content<?=($key == 0 ? ' _active' : '')?>" data-category="<?=$key?>">
					<?foreach ($arSection['ITEMS'] as $arItem):
						$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width" => 399, "height" => 460), BX_RESIZE_IMAGE_EXACT, false, false, 70);
						?>
						<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="cases-slider__item case-item" style="background-image: url(<?=$image['src']?>)">
							<div class="case-item__info">
								<div class="case-item__type">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo $arItem['PROPERTY_TYPE_VALUE'];
                                    } else {
                                        echo $arItem['PROPERTY_'.strtoupper(LANGUAGE_ID).'_TYPE_VALUE'];
                                    }
                                    ?>
                                </div>
								<div class="case-item__name">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo $arItem['NAME'];
                                    } else {
                                        echo $arItem['PROPERTY_'.strtoupper(LANGUAGE_ID).'_MANE_VALUE'];
                                    }
                                    ?>
                                </div>
								<div class="case-item__description">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo $arItem['PREVIEW_TEXT'];
                                    } else {
                                        echo $arItem['~PROPERTY_'.strtoupper(LANGUAGE_ID).'_INTROTEXT_VALUE']['TEXT'];
                                    }
                                    ?>
                                </div>
							</div>
						</a>
					<?endforeach?>
				</div>
                <?
                global $USER;
                if ($USER->IsAdmin()) {
                    //echo LANGUAGE_ID;
                }
                ?>
			<?endforeach?>
		</div>
	</div>
	<div class="development__right">
		<div class="development__controls contols">
			<button class="development__contols-item contols__item _left" type="button"></button>
			<button class="development__contols-item contols__item _right" type="button"></button>
		</div>
		<div class="development__statistic">
			<div class="development__statistic-compare"><?=Loc::getMessage("DEVELOPMENT_STATISTC_COMPARE");?></div>
			<div class="development__statistic-count">800</div>
			<div class="development__statistic-text"><?=Loc::getMessage("DEVELOPMENT_STATISTC_TEXT");?></div>
		</div>
		<a class="development__more development__more_cases button button_grey button_arrow" href="<?=$arResult['SECTIONS'][0]['LIST_PAGE_URL']?>">
			<div class="button__arrow-text"><?=Loc::getMessage("DEVELOPMENT_MORE");?></div>
			<div class="button__arrow"></div>
		</a>
	</div>
</div>
