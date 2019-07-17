<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
$this->addExternalJS($templateFolder . '/chart.bundle.min.js');
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
                <b><?= Loc::getMessage("TARGET_TITLE") ?>:</b>
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
	<div class="site-case__about">
		<div class="site-case__block-name _about"><?= Loc::getMessage("WORKS_TITLE") ?></div>
		<div class="site-case__about-info">
            <?
            if (LANGUAGE_ID == 'ru') {
                echo $arResult['PROPERTIES']['WORKS']['~VALUE']['TEXT'];
            } else {
                echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_WORKS']['~VALUE']['TEXT'];
            }
            ?>
		</div>
	</div>
	<div class="site-case__about _pregraph">
		<div class="site-case__block-name _about"><?= Loc::getMessage("RESULTS_TITLE") ?></div>
		<div class="site-case__about-info">
            <?
            if (LANGUAGE_ID == 'ru') {
                echo $arResult['PROPERTIES']['RESULT_SEO']['~VALUE']['TEXT'];
            } else {
                echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_RESULT_SEO']['~VALUE']['TEXT'];
            }
            ?>
		</div>
	</div>
    <?
    if (LANGUAGE_ID == 'ru') {
        foreach ($arResult['PROPERTIES']['GRAPHICS_TEXT']['~VALUE'] as $key => $graphicText):?>
            <?if ($key % 2):?>
                <div class="site-case__statistic-block _left">
                    <div class="site-case__statistic _left">
                        <?=$graphicText?>
                    </div>
                    <div class="site-case__graph">
                        <canvas width="755px" height="300px" class="site-case__canvas" data-values="<?=$arResult['PROPERTIES']['GRAPHICS_DATA']['VALUE'][$key]?>" data-labels="<?=$arResult['PROPERTIES']['GRAPHICS_DATA']['DESCRIPTION'][$key]?>"></canvas>
                    </div>
                </div>
                <?
                //p($arResult['PROPERTIES']['GRAPHICS_DATA']['VALUE'][$key]);
                ?>
            <?else:?>
                <div class="site-case__statistic-block">
                    <div class="site-case__graph">
                        <canvas width="755px" height="300px" class="site-case__canvas" data-values="<?=$arResult['PROPERTIES']['GRAPHICS_DATA']['VALUE'][$key]?>" data-labels="<?=$arResult['PROPERTIES']['GRAPHICS_DATA']['DESCRIPTION'][$key]?>"></canvas>
                    </div>
                    <div class="site-case__statistic">
                        <?=$graphicText?>
                    </div>
                </div>
            <?endif?>
        <?endforeach;
    } else {
        foreach ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_GRAPHICS_TEXT']['~VALUE'] as $key => $graphicText) {
            if ($key % 2) {
                ?>
                <div class="site-case__statistic-block _left">
                    <div class="site-case__statistic _left">
                        <?= $graphicText ?>
                    </div>
                    <div class="site-case__graph">
                        <canvas width="755px" height="300px" class="site-case__canvas"
                                data-values="<?= $arResult['PROPERTIES']['GRAPHICS_DATA']['VALUE'][$key] ?>"></canvas>
                    </div>
                </div>
                <?
            } else {
                ?>
                <div class="site-case__statistic-block">
                    <div class="site-case__graph">
                        <canvas width="755px" height="300px" class="site-case__canvas"
                                data-values="<?= $arResult['PROPERTIES']['GRAPHICS_DATA']['VALUE'][$key] ?>"></canvas>
                    </div>
                    <div class="site-case__statistic">
                        <?= $graphicText ?>
                    </div>
                </div>
                <?
            }
        }
    }
    ?>
</div>