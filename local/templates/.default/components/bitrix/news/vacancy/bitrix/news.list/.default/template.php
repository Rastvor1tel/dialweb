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
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.js");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.css");
Asset::getInstance()->addCss('/local/templates/.default/components/bitrix/news/vacancy/vacancy.css');
?>
<div class="vacancy">
    <div class="vacancy__citys"></div>
    <div class="vacancy__list">
        <div class="vacancy-city__slider swiper-container">
            <div class="swiper-wrapper">
                <?foreach ($arResult['VAC'] as $key => $arCity):?>
                <div class="swiper-slide vacancy-slide" data-name="
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arCity['CITY']['NAME'];
                } else {
                    echo $arCity["PROP"][strtoupper(LANGUAGE_ID).'_TITLE']["VALUE"];
                }
                ?>
                ">
                    <div class="vacancy-slide__slider swiper-container" data-swiper-parallax-y="-100%"
                         data-swiper-parallax-opacity="0" data-swiper-parallax-scale="0"
                         data-swiper-parallax-duration="1200">
                        <div class="swiper-wrapper">
                            <?foreach ($arCity['LIST'] as $key => $arItem):?>
                            <div class="swiper-slide vacancy-item">
                                <div class="vacancy-item__title">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo $arItem['NAME'];
                                    } else {
                                        echo $arItem["PROPERTIES"][strtoupper(LANGUAGE_ID).'_NAME']["VALUE"];
                                    }
                                    ?>
                                </div>
                                <div class="vacancy-item__cost">
                                    <?
                                    if (LANGUAGE_ID == 'ru') {
                                        echo $arItem['PROPERTIES']['COST']['VALUE'];
                                    } else {
                                        echo $arItem["PROPERTIES"][strtoupper(LANGUAGE_ID).'_COST']["VALUE"];
                                    }
                                    ?>
                                </div>
                                <div class="vacancy-item__preview"><?=$arItem['PREVIEW_TEXT']?></div>
                                <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="vacancy-item__link contols__item _right "></a>
                            </div>

                            <?endforeach;?>
                        </div>
                    </div>
                    <?
                    //p($arCity);
                    ?>
                </div>
                <?endforeach;?>
            </div>
        </div>
    </div>
</div>