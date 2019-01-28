<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="page-title">Кейсы</div>
<div class="slogan _bold angle">
    <?if($arParams['SLOGAN']):?>
        <?=$arParams['SLOGAN']?>
    <?else:?>
    Мы не работаем впустую. Каждый результат фиксируется. В итоге мы можем проследить эффективность нашей работы и показать вам
    <?endif;?>
</div>
<div class="seo-cases">
	<a href="<?=$arResult["SECTION"]["PATH"][0]["SECTION_PAGE_URL"]?>" class="inner-callback button button_grey button_arrow">
		<div class="button__arrow-text">Смотреть все кейсы</div>
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
										<div class="button__arrow-text">Смотреть кейс</div>
										<div class="button__arrow"></div>
									</a>
								<div class="seo-cases__type"><?=$arItem["PROPERTIES"]["TYPE"]["VALUE"]?></div>
								<div class="seo-cases__name"><?=$arItem["NAME"]?></div>
								<a class="seo-cases__link" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>" target="_blank"><?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?></a>
								<div class="contols seo-cases__contols">
									<button class="seo-cases__contols-item contols__item _left" type="button"></button>
									<button class="seo-cases__contols-item contols__item _right" type="button"></button>
								</div>
							</div>
						</div>
						<div class="seo-cases__info">
							<div class="seo-cases__target">
								<div class="seo-cases__target-title">Цель:</div>
								<div class="seo-cases__target-text"><?=$arItem["PREVIEW_TEXT"]?></div>
							</div>
							<div class="seo-cases__result">
								<div class="seo-cases__result-title">
									<span>Результат</span>
									<span><?=$arItem["PROPERTIES"]["RESULT_LIST"]["DESCRIPTION"]?></span>
								</div>
								<div class="seo-cases__result-info"><?=$arItem["PROPERTIES"]["RESULT_LIST"]["VALUE"]?></div>
							</div>
						</div>
					</div>
				<?endforeach?>
			</div>
		</div>
	</div>
</div>
