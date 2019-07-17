<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<h2 class="page-title"><?= Loc::getMessage("TEXT_CASES_TITLE") ?></h2>
<div class="slogan _bold angle">
    <?if($arParams['SLOGAN']):?>
        <?=$arParams['SLOGAN']?>
    <?else:?>
        <?= Loc::getMessage("TEXT_DEFAULT_SLOGAN") ?>
    <?endif;?>
</div>
<div class="seo-cases">
	<a href="<?=$arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"]?>" class="inner-callback button button_grey button_arrow">
		<div class="button__arrow-text"><?= Loc::getMessage("BUTTON_ALL") ?></div>
		<div class="button__arrow"></div>
	</a>
	<div class="seo-cases__slider">
		<div class="seo-cases__viewport">
			<div class="seo-cases__wrap">
				<?foreach ($arResult['ITEMS'] as $arItem):
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
					?>
					<div class="seo-cases__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="seo-cases__case">
							<div class="seo-cases__image">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
							</div>
							<div class="seo-cases__company">
								<a class="seo-cases__more button button_grey button_arrow" style="margin-bottom: 20px;" href="<?=$arItem['DETAIL_PAGE_URL']?>">
										<div class="button__arrow-text"><?= Loc::getMessage("BUTTON_DETAIL") ?></div>
										<div class="button__arrow"></div>
									</a>
								<div class="seo-cases__type">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo  $arItem["PROPERTIES"]["TYPE"]["VALUE"];
                                    } else {
                                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TYPE']['VALUE'];
                                    }
                                    ?>
                                </div>
								<div class="seo-cases__name">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo  $arItem['NAME'];
                                    } else {
                                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_MANE']['VALUE'];
                                    }
                                    ?>
                                </div>
								<a class="seo-cases__link" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" target="_blank">
                                    <?
                                    if ($arItem["PROPERTIES"]["LINK"]["DESCRIPTION"]) {
                                        echo $arItem["PROPERTIES"]["LINK"]["DESCRIPTION"];
                                    } else {
                                        echo $arItem["PROPERTIES"]["LINK"]["VALUE"];
                                    }
                                    ?>
                                </a>
                                <?
                                //p($arItem["PROPERTIES"]["LINK"]);
                                ?>
								<div class="contols seo-cases__contols">
									<button class="seo-cases__contols-item contols__item _left" type="button"></button>
									<button class="seo-cases__contols-item contols__item _right" type="button"></button>
								</div>
							</div>
						</div>
						<div class="seo-cases__info">
							<div class="seo-cases__target">
								<div class="seo-cases__target-title"><?= Loc::getMessage("TEXT_TARGET") ?></div>
								<div class="seo-cases__target-text">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo  $arItem['PREVIEW_TEXT'];
                                    } else {
                                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_INTROTEXT']['VALUE']['TEXT'];
                                    }
                                    ?>
                                </div>
							</div>
							<div class="seo-cases__result">
								<div class="seo-cases__result-title">
									<span><?= Loc::getMessage("TEXT_RESULT") ?></span>
									<span>
                                        <?
                                        if (LANGUAGE_ID == 'ru') {
                                            echo $arItem["PROPERTIES"]["RESULT_LIST"]["DESCRIPTION"];
                                        } else {
                                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_RESULT_LIST']['DESCRIPTION'];
                                        }
                                        ?>
                                    </span>
								</div>
								<div class="seo-cases__result-info">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo $arItem["PROPERTIES"]["RESULT_LIST"]["VALUE"];
                                    } else {
                                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_RESULT_LIST']['VALUE'];
                                    }
                                    ?>
                                </div>
							</div>
						</div>
					</div>
				<?endforeach?>
			</div>
		</div>
	</div>
</div>
