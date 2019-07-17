<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<div class="head-socials">
	<div class="head-socials__text"><?= Loc::getMessage("SOCIAL") ?></div>
	<div class="head-socials__wrap">
		<a class="head-socials__item social-button" href="viber://pa?chatURI=dial" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#viber"></use>
			</svg>
		</a>
		<a class="head-socials__item social-button" href="https://vk.me/club41029771" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#vk"></use>
			</svg>
		</a>
		<a class="head-socials__item social-button" href="https://www.facebook.com/dialweb" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#facebook"></use>
			</svg>
		</a>
	</div>
</div>
<div class="dial-academy">
	<?foreach($arResult["ITEMS"] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<div class="dial-academy__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="dial-academy__left">
				<div class="dial-academy__name">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        echo $arItem['NAME'];
                    } else {
                        echo $arItem["PROPERTIES"][strtoupper(LANGUAGE_ID).'_NAME']["VALUE"];
                    }
                    ?>
                </div>
				<div class="dial-academy__title">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        echo $arItem['PREVIEW_TEXT'];
                    } else {
                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_DESCRIPTION']['VALUE']['TEXT'];
                    }
                    ?>
                </div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle"><?= Loc::getMessage("TEACHER") ?></div>
					<div class="dial-academy__text">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["PROPERTIES"]["TEACHER_NAME"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TEACHER_NAME']['VALUE'];
                        }
                        ?>
                    </div>
					<div class="dial-academy__post">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["PROPERTIES"]["TEACHER_POSITION"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TEACHER_POSITION']['VALUE'];
                        }
                        ?>
                    </div>
				</div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle"><?= Loc::getMessage("LOCATION") ?></div>
					<div class="dial-academy__text">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["PROPERTIES"]["PLACE"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_PLACE']['VALUE'];
                        }
                        ?>
                    </div>
				</div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle"><?= Loc::getMessage("LIMIT") ?></div>
					<div class="dial-academy__text">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["PROPERTIES"]["MAX_COUNT"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_MAX_COUNT']['VALUE'];
                        }
                        ?>
                    </div>
				</div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle"><?= Loc::getMessage("TIME") ?></div>
					<div class="dial-academy__text">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["PROPERTIES"]["TIME"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TIME']['VALUE'];
                        }
                        ?>
                    </div>
				</div>
				<a class="dial-academy__button button button_oragne" href="https://academy.dialweb.ru" target="_blank"><?= Loc::getMessage("MKORE") ?></a>
			</div>
			<div class="dial-academy__right" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
				<div class="dial-academy__info">
					<div class="dial-academy__info-item">
						<div class="dial-academy__info-name"><?= Loc::getMessage("COST") ?></div>
						<div class="dial-academy__info-text">
                            <?
                            if (LANGUAGE_ID == 'ru') {
                                echo $arItem["PROPERTIES"]["PRICE"]["VALUE"];
                            } else {
                                echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_PRICE']['VALUE'];
                            }
                            ?>
                        </div>
						<div class="dial-academy__info-action"><?= Loc::getMessage("COST_STUDENT") ?> <?
                            if (LANGUAGE_ID == 'ru') {
                                echo $arItem["PROPERTIES"]["PRICE_STUDENT"]["VALUE"];
                            } else {
                                echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_PRICE_STUDENT']['VALUE'];
                            }
                            ?></div>
					</div>
					<div class="dial-academy__info-item">
						<div class="dial-academy__info-name"><?= Loc::getMessage("SPEND") ?></div>
						<div class="dial-academy__info-text">
                            <?
                            if (LANGUAGE_ID == 'ru') {
                                echo $arItem["PROPERTIES"]["DURATION"]["VALUE"];
                            } else {
                                echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_DURATION']['VALUE'];
                            }
                            ?>
                        </div>
					</div>
					<div class="dial-academy__info-item">
						<div class="dial-academy__info-name"><?= Loc::getMessage("BEGIN") ?></div>
						<div class="dial-academy__info-text">
                            <?=$arItem["PROPERTIES"]["START"]["VALUE"]?>
                        </div>
					</div>
				</div>
			</div>
		</div>
	<?endforeach?>
</div>