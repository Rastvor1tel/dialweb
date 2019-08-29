<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss('/local/templates/.default/components/bitrix/news/vacancy/vacancy.css');
$APPLICATION->setPageProperty('vacancy',$arResult['NAME']);
use Bitrix\Main\Localization\Loc;
?>
<div class="vacancy-detail">
    <div class="vacancy-detail__info">
        <div class="vacancy-detail__cost">
            <?
            if (LANGUAGE_ID == 'ru') {
                echo $arResult['PROPERTIES']['COST']['VALUE'];
            } else {
                echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_COST']['VALUE'];
            }
            ?>
        </div>
        <?
        if (LANGUAGE_ID == 'ru') {
            ?>
            <div class="vacancy-detail__button button button_oragne js-popup-button" data-popup="js-popup-vacancy"><?= Loc::getMessage("SEND_RESUME") ?></div>
            <?
        } else {
            ?>
            <div class="vacancy-detail__button button button_oragne b24-web-form-popup-btn-23"><?= Loc::getMessage("SEND_RESUME") ?></div>
            <?
        }
        ?>


        <div class="vacancy-detail__text"><?= Loc::getMessage("BUSYNESS") ?></div>
    </div>
    <?
    if (LANGUAGE_ID == 'ru') {
        ?>
        <?foreach ($arResult['DISPLAY_PROPERTIES'] as $key => $prop):?>
            <div class="vacancy-block <?if($key % 2 > 0):?> vacancy-block_grey <?endif;?>">
                <div class="vacancy-block__title">
                    <?=$prop["NAME"]?>:&nbsp;
                </div>
                <div class="vacancy-block__list feature-list__list">
                    <?foreach ($prop['VALUE'] as $value):?>
                        <div class="feature-list__item"><?=$value?></div>
                    <?endforeach;?>
                </div>
            </div>
        <?endforeach;?>
        <?
    } else {
        ?>

            <div class="vacancy-block">
                <div class="vacancy-block__title">
                    Duties:&nbsp;
                </div>
                <div class="vacancy-block__list feature-list__list">
                    <?foreach ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_DETAIL_OB']['VALUE'] as $value):?>
                        <div class="feature-list__item"><?=$value?></div>
                    <?endforeach;?>
                </div>
            </div>

        <div class="vacancy-block">
            <div class="vacancy-block__title">
                Requirements:&nbsp;
            </div>
            <div class="vacancy-block__list feature-list__list">
                <?foreach ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_DETAIL_TREB']['VALUE'] as $value):?>
                    <div class="feature-list__item"><?=$value?></div>
                <?endforeach;?>
            </div>
        </div>
        <?
    }
    ?>

</div>
<?
//p($arResult);
?>
