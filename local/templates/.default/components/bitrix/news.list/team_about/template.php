<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<div class="about__key">
	<div class="about__title">
		<div class="about__title-name"><?= Loc::getMessage("TEXT1") ?></div>
		<div class="about__title-info"><?= Loc::getMessage("TEXT2") ?></div>
		<div class="about-team__contols contols">
			<button class="about-team__contols-item contols__item _left" type="button"></button>
			<button class="about-team__contols-item contols__item _right" type="button"></button>
		</div>
	</div>
	<a class="about__team button button_grey button_arrow" href="/about/team/">
		<div class="button__arrow-text"><?= Loc::getMessage("TEXT3") ?></div>
		<div class="button__arrow"></div>
	</a>
	<div class="about-team__slider">
		<div class="about-team__wrap">
			<?foreach($arResult['ITEMS'] as $arItem):
				$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width"=>300,"height"=>300), BX_RESIZE_IMAGE_EXACT);
				?>
				<div class="about-team__person person">
					<div class="person__image">
						<img src="<?=$image['src']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>">
						<div class="person__buttons">
							<?/*<button class="person__button button button_oragne" type="button">Оценить работу</button>*/?>
							<?if (!empty($arItem['DISPLAY_PROPERTIES']['SERTIFICATES'])):?>
								<div class="person__sertificates">
									<?if (!empty($arItem['DISPLAY_PROPERTIES']['SERTIFICATES']['FILE_VALUE']['SRC'])):?>
										<a class="person__button button button_oragne" href="<?=$arItem['DISPLAY_PROPERTIES']['SERTIFICATES']['FILE_VALUE']['SRC']?>" data-fancybox="person<?=$arItem['ID']?>">Сертификат</a>
									<?else:?>
										<?foreach ($arItem['DISPLAY_PROPERTIES']['SERTIFICATES']['FILE_VALUE'] as $sertificate):?>
											<a class="person__button button button_oragne" href="<?=$sertificate["SRC"]?>" data-fancybox="person<?=$arItem['ID']?>">
                                                <?= Loc::getMessage("CERTIFICAT") ?>
                                            </a>
										<?endforeach?>
									<?endif?>
								</div>
							<?endif?>
						</div>
					</div>
					<div class="person__info">
						<div class="person__name">
                            <?
                            if (LANGUAGE_ID == 'ru') {
                                echo $arItem['NAME'];
                            } else {
                                echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'];
                            }
                            ?>
                        </div>
						<div class="person__post">
                            <?
                            if (LANGUAGE_ID == 'ru') {
                                echo  $arItem["PROPERTIES"]["POSITION"]["VALUE"];
                            } else {
                                echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_POSITION']['VALUE'];
                            }
                            ?>
                        </div>
						<div class="person__experience">
                             <?
                            if (LANGUAGE_ID == 'ru') {
                                echo  $arItem["PROPERTIES"]["TIME"]["VALUE"];
                            } else {
                                echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TIME']['VALUE'];
                            }
                            ?> <?= Loc::getMessage("EXPERIANCE") ?></div>
					</div>
				</div>
			<?endforeach?>
		</div>
	</div>
</div>