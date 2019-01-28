<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.js");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.css");
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
            <div class="person-info__name"><?=$arResult['PROPERTIES']['SECOND_NAME']['VALUE']?$arResult['NAME'].' '.$arResult['PROPERTIES']['SECOND_NAME']['VALUE']:$arResult['NAME'];?></div>
            <div class="person-data">
                <div class="person-data__item">
                    <div class="person-data__title">Должность</div>
                    <div class="person-data__value"><?=$arResult['PROPERTIES']['POSITION']['VALUE']?></div>
                </div>
                <?if ($arResult['PROPERTIES']['START_WORKING']['VALUE']):?>
                <div class="person-data__item">
                    <div class="person-data__title">Опыт работы в отрасли</div>
                    <div class="person-data__value">c <?=explode('.', $arResult['PROPERTIES']['START_WORKING']['VALUE'])[2]?> года</div>
                </div>
                <?endif;?>
                <?if ($arResult['PROPERTIES']['DIAL_WORKING']['VALUE']):?>
                <div class="person-data__item">
                    <div class="person-data__title">Опыт работы в DIAL</div>
                    <div class="person-data__value">с <?=explode('.', $arResult['PROPERTIES']['DIAL_WORKING']['VALUE'])[2]?> года</div>
                </div>
                <?endif;?>
            </div>
        </div>
    </div>
    <?if ($arResult['PROPERTIES']['SKILLS']['VALUE'] || $arResult['PROPERTIES']['PROJECTS']['VALUE']):?>
    <div class="person-feature person-block">
        <div class="person-feature__title person__numered-title">Автопортрет</div>
        <div class="person-feature__content">
            <div class="person-feature__about">Несколько слов сотрудника о себе
                и  своих интересах</div>
            <div class="person-feature__list">
                <?if ($arResult['PROPERTIES']['SKILLS']['VALUE']):?>
                <div class="feature-list">
                    <div class="feature-list__title">Профессиональные навыки:</div>
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
                    <div class="feature-list__title">Участие в проектах:</div>
                    <div class="feature-list__list">
                        <?
                        foreach($arResult['PROPERTIES']['PROJECTS']['VALUE'] as $arItem) {
                            echo '<div class="feature-list__item">'.$arItem.'</div>';
                        }
                        ?>
                    </div>
                </div>
                <?endif;?>
            </div>
        </div>
    </div>
    <?endif;?>
    <?if ($arResult['PROPERTIES']['SERTIFICATES']['VALUE']):?>
    <div class="person-sertificates person-block">
        <div class="person-sertificates__title person__numered-title">Сертификаты</div>
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
    <?if ($arResult['PROPERTIES']['ADDITIONAL_COURSE']['VALUE']):?>
    <div class="person-courses person-block">
        <div class="person-courses__title person__numered-title">Дополнительные курсы</div>
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
        <div class="person-achievement__title person__numered-title">Достижения</div>
        <div class="person-achievement__list">
            <?
            foreach($arResult['PROPERTIES']['ACHIVMENTS']['VALUE'] as $key => $arItem) {
                echo '<div class="person-achievement__item"><b>'.$arItem.'</b><br>'.$arResult['PROPERTIES']['ADDITIONAL_COURSE']['DESCRIPTION'][$key].'</div>';
            }
            ?>
        </div>
    </div>
    <?endif;?>
</div>