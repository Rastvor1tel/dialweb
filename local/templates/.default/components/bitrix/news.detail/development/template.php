<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<div class="site-case">
	<div class="site-case__head">
		<div class="site-case__name">
			<div class="site-case__type">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arResult["PROPERTIES"]["TYPE"]["VALUE"];
                } else {
                    echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TYPE']['VALUE'];
                }
                ?>
            </div>
			<h1 class="site-case__title page-title">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arResult['NAME'];
                } else {
                    echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_MANE']['VALUE'];
                }
                ?>
            </h1>
			<div class="site-case__slogan slogan angle">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arResult['PREVIEW_TEXT'];
                } else {
                    echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_INTROTEXT']['VALUE']['TEXT'];
                }
                ?>
            </div>
			<a class="site-case__link" href="<?=$arResult['PROPERTIES']['LINK']['VALUE']?>" target="_blank">
				<?if(empty($arResult['PROPERTIES']['LINK']['DESCRIPTION'])):
					echo $arResult['PROPERTIES']['LINK']['VALUE'];
				else: 
					echo $arResult['PROPERTIES']['LINK']['DESCRIPTION'];
				endif;?>
			</a>
		</div>
		<div class="site-case__head-image">
			<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>" title="<?=$arResult['DETAIL_PICTURE']['TITLE']?>">
		</div>
	</div>
	<div class="site-case__about">
		<div class="site-case__block-name _about"><?= Loc::getMessage("ABOUT_TITLE") ?></div>
		<div class="site-case__about-info">
            <?
            if (LANGUAGE_ID == 'ru') {
                echo $arResult['DETAIL_TEXT'];
            } else {
                echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_DETAILTEXT']['~VALUE']['TEXT'];
            }
            ?>
		</div>
	</div>
	<div class="site-case__index">
		<div class="site-case__block-name _index"><?= Loc::getMessage("MAINPAGE_TITLE") ?></div>
		<a class="site-case__image" href="<?=$arResult['DISPLAY_PROPERTIES']['HOME_IMAGE']['FILE_VALUE']['SRC']?>" data-fancybox="dev">
			<img src="<?=$arResult['DISPLAY_PROPERTIES']['HOME_IMAGE']['FILE_VALUE']['SRC']?>" alt="">
		</a>
	</div>
	<div class="site-case__parameters">
		<?if (!empty($arResult['PROPERTIES']['TYPOGRAPHY']['VALUE'])):?>
			<div class="site-case__print">
				<style><?=$arResult['PROPERTIES']['TYPOFONTS']['~VALUE']?></style>
				<div class="site-case__block-name _print"><?= Loc::getMessage("PRINT_TITLE") ?></div>
				<div class="site-case__print-wrap">
					<?foreach ($arResult['PROPERTIES']['TYPOGRAPHY']['VALUE'] as $key => $name):?>
						<div class="site-case__print-item" style="<?=$arResult['PROPERTIES']['TYPOSTYLES']['VALUE'][$key]?>">
							<div class="site-case__print-size"><?=$arResult['PROPERTIES']['TYPOGRAPHY']['DESCRIPTION'][$key]?></div>
							<div class="site-case__print-name"><?=$name?></div>
						</div>
					<?endforeach?>
				</div>
			</div>
		<?endif?>
		<?if (!empty($arResult['PROPERTIES']['COLORS']['VALUE'])):?>
			<div class="site-case__colors">
				<div class="site-case__block-name _colors"><?= Loc::getMessage("COLORS_TITLE") ?></div>
				<div class="site-case__colors-wrap">
					<?foreach ($arResult['PROPERTIES']['COLORS']['VALUE'] as $key => $color):?>
						<div class="site-case__colors-item" style="background-color: #<?=$color?>; color: <?=$arResult['PROPERTIES']['COLORS']['DESCRIPTION'][$key]?>;"><?=$color?></div>
					<?endforeach?>
				</div>
			</div>
		<?endif?>
	</div>
	<div class="site-case__gallery">
		<?if (!empty($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC'])):?>
			<a class="site-case__image" href="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC']?>" data-fancybox="dev">
				<img src="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC']?>" alt="">
			</a>
		<?else:?>
			<?foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE'] as $key => $image):?>
				<?if ($key == 0):?>
					<a class="site-case__image" href="<?=$image['SRC']?>" data-fancybox="dev">
						<img src="<?=$image['SRC']?>" alt="">
					</a>
				<?else:?>
					<a href="<?=$image['SRC']?>" data-fancybox="dev"></a>
				<?endif?>
			<?endforeach?>
		<?endif?>
	</div>
	<div class="site-case__result">
		<div class="site-case__result-left">
			<div class="site-case__result-title page-title _small"><?= Loc::getMessage("RESULT_TITLE") ?></div>
			<div class="site-case__result-text">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arResult['PROPERTIES']['RESULT']['~VALUE']['TEXT'];
                } else {
                    echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_RESULT']['~VALUE']['TEXT'];
                }
                ?>
            </div>
		</div>
		<div class="site-case__result-right">
			<div class="site-case__result-info">
				<div class="site-case__result-subtitle"><?= Loc::getMessage("PRICE_TITLE") ?></div>
				<div class="site-case__result-number"><?=$arResult['PROPERTIES']['PRICE']['VALUE']?> <span><?= Loc::getMessage("PRICE_CUR") ?></span></div>
			</div>
			<div class="site-case__result-info">
				<div class="site-case__result-subtitle"><?= Loc::getMessage("TIME_TITLE") ?></div>
				<div class="site-case__result-number"><?=$arResult['PROPERTIES']['TIME']['VALUE']?> <span><?= Loc::getMessage("TIME_VALUE") ?></span></div>
			</div>
		</div>
	</div>
	<?if (!empty($arResult['PROPERTIES']['TEAM']['VALUE'])):?>
		<div class="teamwork">
			<div class="teamwork__title page-title _small"><?= Loc::getMessage("GROUP_TITLE") ?></div>
			<div class="teamwork__wrap">
				<?foreach ($arResult['PROPERTIES']['TEAM']['VALUE'] as $arItem):
					$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width"=>380,"height"=>460), BX_RESIZE_IMAGE_EXACT);
					?>
					<div class="teamwork__item">
						<img src="<?=$image['src']?>" alt="">
						<div class="teamwork__info">
							<div class="teamwork__name"><?=$arItem['NAME']?></div>
							<div class="teamwork__post"><?=$arItem['PROPERTY_POSITION_VALUE']?></div>
						</div>
					</div>
				<?endforeach?>
			</div>
		</div>
	<?endif?>
	<?if (!empty($arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'])):?>
		<div class="site-case__adaptive">
			<div class="site-case__adaptive-info">
				<div class="site-case__block-name _adaptive"><?= Loc::getMessage("ADAPTIVE_TITLE") ?></div>
				<div class="site-case__adaptive-desc"><?= Loc::getMessage("ADAPTIVE_DESC") ?></div>
			</div>
			<div class="site-case__adaptive-image">
				<img src="<?=TEMPLATE_PATH?>/img/case-adaptive.png" alt="">
				<div class="site-case__adaptive-desktop" style="background-image: url(<?=$arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'][0]['SRC']?>)"></div>
				<div class="site-case__adaptive-tablet" style="background-image: url(<?=$arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'][1]['SRC']?>)"></div>
				<div class="site-case__adaptive-mobile" style="background-image: url(<?=$arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'][2]['SRC']?>)"></div>
			</div>
		</div>
	<?endif?>
	<?if (!empty($arResult['PROPERTIES']['REVIEW']['VALUE'])):
		$review = $arResult['PROPERTIES']['REVIEW']['VALUE'];
		?>
		<div class="site-case__review">
			<div class="site-case__block-name _review"><?= Loc::getMessage("REVIEW_TITLE") ?></div>
			<div class="site-case__review-block">
				<div class="site-case__review-desc">
					<div class="site-case__review-info">
						<div class="site-case__review-name">
                            <?
                            if (LANGUAGE_ID == 'ru') {
                                echo $review['NAME'];
                            } else {
                                echo $review['PROPERTY_'.strtoupper(LANGUAGE_ID).'_NAME_VALUE'];
                            }
                            ?>
                        </div>
						<?if (!empty($review['PROPERTY_REVIEW_VALUE'])):?>
							<div class="site-case__review-type">
								<a class="review__link" href="<?=$review['PROPERTY_REVIEW_VALUE']['SRC']?>" data-fancybox="review"><?= Loc::getMessage("REVIEW_MORE") ?></a>
							</div>
						<?endif?>
					</div>
					<div class="site-case__review-info">
						<div class="site-case__review-name">
                            <?
                            if (LANGUAGE_ID == 'ru') {
                                echo $review['PROPERTY_AUTHOR_VALUE'];
                            } else {
                                echo $review['PROPERTY_'.strtoupper(LANGUAGE_ID).'_AUTHOR_VALUE'];
                            }
                            ?>
                        </div>
						<div class="site-case__review-type">
                            <?
                            if (LANGUAGE_ID == 'ru') {
                                echo $review['PROPERTY_POSITION_VALUE'];
                            } else {
                                echo $review['PROPERTY_'.strtoupper(LANGUAGE_ID).'_POSITION_VALUE'];
                            }
                            ?>
                        </div>
					</div>
					<div class="site-case__review-text">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $review['PREVIEW_TEXT'];
                        } else {
                            echo $review['~PROPERTY_'.strtoupper(LANGUAGE_ID).'_INTROTEXT_VALUE']['TEXT'];
                        }
                        ?>
                    </div>
				</div>
				<div class="site-case__review-image">
					<img src="<?=$review['PREVIEW_PICTURE']['SRC']?>" alt="">
				</div>
			</div>
		</div>
	<?endif?>
	<div class="site-case__thanks"><?= Loc::getMessage("THANKS") ?></div>
</div>