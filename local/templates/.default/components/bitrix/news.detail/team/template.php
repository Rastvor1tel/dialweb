<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.js");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.css");

if($arResult['PROPERTIES']['PERSON_SLOGAN']['VALUE']){
    $APPLICATION->SetPageProperty("subtitle", $arResult['PROPERTIES']['PERSON_SLOGAN']['VALUE']['TEXT']);
}
?>
<script>
    $(function(){
        var sertificatesSlider = new Swiper('.person-sertificates__list',{
            slidesPerView: 2,
            spaceBetween: 80,
            freeMode: true,
            slidesOffsetBefore: 40,
            breakpoints: {
                1080:{
                    slidesPerView: 1,
                },
                580: {
                    slidesPerView: 1,
                    autoHeight: true,
                    slidesOffsetBefore: 0,
                    spaceBetween: 0,
                    freeMode: false,
                }
            }
        })
    })
</script>
<div class="person">
    <div class="person__main">
        <div class="person__photo">
            <?$file = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], ['width'=>625, 'height'=>520], BX_RESIZE_IMAGE_EXACT)?>
            <img src="<?=$file['src']?>" alt="">
        </div>
        <div class="person-info">
            <div class="person-info__name">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arResult['PROPERTIES']['SECOND_NAME']['VALUE']?$arResult['NAME'].' '.$arResult['PROPERTIES']['SECOND_NAME']['VALUE']:$arResult['NAME'];
                } else {
                    echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SECOND_NAME']['VALUE']?$arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'].' '.$arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SECOND_NAME']['VALUE']:$arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'];
                }
                ?>
            </div>
            <div class="person-data">
                <div class="person-data__item">
                    <div class="person-data__title"><?= Loc::getMessage("POST") ?></div>
                    <div class="person-data__value">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arResult['PROPERTIES']['POSITION']['VALUE'];
                        } else {
                            echo $arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_POSITION']['VALUE'];
                        }
                        ?>
                    </div>
                </div>
                <?
                if (LANGUAGE_ID == 'ru') {
                    $symblol = '.';
                } else {
                    $symblol = '/';
                }
                ?>
                <?if ($arResult['PROPERTIES']['START_WORKING']['VALUE']):?>
                <div class="person-data__item">
                    <div class="person-data__title"><?= Loc::getMessage("EXP1") ?></div>
                    <div class="person-data__value"><?= Loc::getMessage("FROM") ?> <?=explode($symblol, $arResult['PROPERTIES']['START_WORKING']['VALUE'])[2]?> <?= Loc::getMessage("YEAR") ?></div>
                </div>
                <?endif;?>
                <?if ($arResult['PROPERTIES']['DIAL_WORKING']['VALUE']):?>
                <div class="person-data__item">
                    <div class="person-data__title"><?= Loc::getMessage("EXP2") ?></div>
                    <div class="person-data__value"><?= Loc::getMessage("FROM") ?> <?=explode($symblol, $arResult['PROPERTIES']['DIAL_WORKING']['VALUE'])[2]?> <?= Loc::getMessage("YEAR") ?></div>
                </div>
                <?endif;?>
            </div>
        </div>
    </div>
    <?if ($arResult['PROPERTIES']['SKILLS']['VALUE'] || $arResult['PROPERTIES']['PROJECTS']['VALUE'] || $arResult['PREVIEW_TEXT']):?>
    <div class="person-feature person-block">
        <div class="person-feature__title person__numered-title"><?= Loc::getMessage("PORTRAIT") ?></div>
        <div class="person-feature__content">
            <div class="person-feature__about">
                <?
                if (LANGUAGE_ID == 'ru') {
                    if($arResult['DETAIL_TEXT']){
                        ?>
                        <?=$arResult['DETAIL_TEXT']?>
                        <?
                    } else {
                        ?>
                        <?= Loc::getMessage("PORTRAIT_TEXT") ?>
                        <?
                    }
                } else {
                    if($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_PERSON_SLOGAN']['~VALUE']['TEXT']){
                        ?>
                        <?=$arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_PERSON_SLOGAN']['~VALUE']['TEXT']?>
                        <?
                    } else {
                        ?>
                        <?= Loc::getMessage("PORTRAIT_TEXT") ?>
                        <?
                    }
                }
                ?>
            </div>
            <div class="person-feature__list">
                <?
                if (LANGUAGE_ID == 'ru') {
                    ?>
                    <?if ($arResult['PROPERTIES']['SKILLS']['VALUE']):?>
                        <div class="feature-list">
                            <div class="feature-list__title"><?= Loc::getMessage("SKILLS") ?></div>
                            <div class="feature-list__list">
                                <?
                                foreach($arResult['PROPERTIES']['SKILLS']['VALUE'] as $arItem) {
                                    echo '<div class="feature-list__item">'.$arItem.'</div>';
                                }
                                ?>
                            </div>
                        </div>
                    <?endif;?>
                    <?if ($arResult['PROPERTIES']['PROJECTS']['VALUE']):?>
                        <div class="feature-list">
                            <div class="feature-list__title"><?= Loc::getMessage("PROJECTS") ?></div>
                            <div class="feature-list__list">
                                <?
                                foreach($arResult['PROPERTIES']['PROJECTS']['VALUE'] as $arItem) {
                                    echo '<div class="feature-list__item">'.$arItem.'</div>';
                                }
                                ?>
                            </div>
                        </div>
                    <?endif;?>
                    <?
                } else {
                    ?>
                    <?if ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SKILLS']['VALUE']):?>
                        <div class="feature-list">
                            <div class="feature-list__title"><?= Loc::getMessage("SKILLS") ?></div>
                            <div class="feature-list__list">
                                <?
                                foreach($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_SKILLS']['VALUE'] as $arItem) {
                                    echo '<div class="feature-list__item">'.$arItem.'</div>';
                                }
                                ?>
                            </div>
                        </div>
                    <?endif;?>
                    <?if ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_PROJECTS']['VALUE']):?>
                        <div class="feature-list">
                            <div class="feature-list__title"><?= Loc::getMessage("PROJECTS") ?></div>
                            <div class="feature-list__list">
                                <?
                                foreach($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_PROJECTS']['VALUE'] as $arItem) {
                                    echo '<div class="feature-list__item">'.$arItem.'</div>';
                                }
                                ?>
                            </div>
                        </div>
                    <?endif;?>
                    <?
                }
                ?>
            </div>
        </div>
    </div>
    <?endif;?>
    <?if ($arResult['PROPERTIES']['SERTIFICATES']['VALUE']):?>
    <div class="person-sertificates person-block">
        <div class="person-sertificates__title person__numered-title"><?= Loc::getMessage("SERTIFICATES") ?></div>
        <div class="person-sertificates__list swiper-container">
            <div class="swiper-wrapper">
                <?
                foreach($arResult['PROPERTIES']['SERTIFICATES']['VALUE'] as $arSert) {
                    $cert = CFile::ResizeImageGet($arSert, ['width'=>625, 'height'=>480], BX_RESIZE_IMAGE_PROPORTIONAL);
                    $certSrc = CFile::GetFileArray($arSert);
                    echo '<a data-fancybox href="'.$certSrc['SRC'].'" class="person-sertificates__item swiper-slide"><img src="'.$cert['src'].'" alt=""></a>';
                }
                ?>
            </div>
        </div>
    </div>
    <?endif;?>

    <?
    if (LANGUAGE_ID == 'ru') {
        ?>
        <?if ($arResult['PROPERTIES']['ADDITIONAL_COURSE']['VALUE']):?>
        <div class="person-courses person-block">
            <div class="person-courses__title person__numered-title"><?= Loc::getMessage("COURSE") ?></div>
            <div class="person-courses__list">
                <?
                foreach($arResult['PROPERTIES']['ADDITIONAL_COURSE']['VALUE'] as $key => $arItem) {
                    echo '<div class="person-courses__item"><b>'.$arItem.'</b><br>'.$arResult['PROPERTIES']['ADDITIONAL_COURSE']['DESCRIPTION'][$key].'</div>';
                }
                ?>
            </div>
        </div>
        <?endif;?>
        <?if ($arResult['PROPERTIES']['ACHIVMENTS']['VALUE']):?>
        <div class="person-achievement person-block">
            <div class="person-achievement__title person__numered-title"><?= Loc::getMessage("ACHIVMENTS") ?></div>
            <div class="person-achievement__list">
                <?
                foreach($arResult['PROPERTIES']['ACHIVMENTS']['VALUE'] as $key => $arItem) {
                    echo '<div class="person-achievement__item"><b>'.$arItem.'</b><br>'.$arResult['PROPERTIES']['ACHIVMENTS']['DESCRIPTION'][$key].'</div>';
                }
                ?>
            </div>
        </div>
        <?endif;?>
        <?
    } else {
        ?>
        <?if ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_ADDITIONAL_COURSE']['VALUE']):?>
            <div class="person-courses person-block">
                <div class="person-courses__title person__numered-title"><?= Loc::getMessage("COURSE") ?></div>
                <div class="person-courses__list">
                    <?
                    foreach($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_ADDITIONAL_COURSE']['VALUE'] as $key => $arItem) {
                        echo '<div class="person-courses__item"><b>'.$arItem.'</b><br>'.$arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_ADDITIONAL_COURSE']['DESCRIPTION'][$key].'</div>';
                    }
                    ?>
                </div>
            </div>
        <?endif;?>
        <?if ($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_ACHIVMENTS']['VALUE']):?>
            <div class="person-achievement person-block">
                <div class="person-achievement__title person__numered-title"><?= Loc::getMessage("ACHIVMENTS") ?></div>
                <div class="person-achievement__list">
                    <?
                    foreach($arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_ACHIVMENTS']['VALUE'] as $key => $arItem) {
                        echo '<div class="person-achievement__item"><b>'.$arItem.'</b><br>'.$arResult['PROPERTIES'][strtoupper(LANGUAGE_ID).'_ACHIVMENTS']['DESCRIPTION'][$key].'</div>';
                    }
                    ?>
                </div>
            </div>
        <?endif;?>

        <?
    }
    ?>
</div>
