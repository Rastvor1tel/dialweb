<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<h2 class="page-title"><?= Loc::getMessage("TEXT_CASES_TITLE") ?></h2>
<div class="slogan _bold angle"><?= Loc::getMessage("TEXT_DEFAULT_SLOGAN") ?></div>
<div class="development__controls contols _services">
	<button class="development__contols-item contols__item _left" type="button"></button>
	<button class="development__contols-item contols__item _right" type="button"></button>
</div>
<div class="cases-slider _services">
	<div class="cases-slider__wrap _active">
		<?foreach($arResult['ITEMS'] as $arItem):?>
			<a class="cases-slider__item case-item" href="<?=$arItem['DETAIL_PAGE_URL']?>" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>)">
				<div class="case-item__info">
					<div class="case-item__type">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo  $arItem["PROPERTIES"]["TYPE"]["VALUE"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_TYPE']['VALUE'];
                        }
                        ?>
                    </div>
					<div class="case-item__name">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo  $arItem['NAME'];
                        } else{
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_MANE']['VALUE'];
                        }
                        ?>
                    </div>
					<div class="case-item__description">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo  $arItem['PREVIEW_TEXT'];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_INTROTEXT']['VALUE']['TEXT'];
                        }
                        ?>
                    </div>
				</div>
			</a>
		<?endforeach?>
	</div>
</div>
