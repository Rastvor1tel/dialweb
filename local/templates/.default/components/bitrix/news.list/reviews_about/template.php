<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="about__thanks">
	<div class="about__thanks-left">
		<div class="about__title">
			<div class="about__title-name">Нас благодарят</div>
			<div class="about__title-info">О качестве нашей работы говорят отзывы наших клиентов</div>
		</div>
		<a class="about__thanks-button button button_grey button_arrow" href="/about/reviews/">
			<div class="button__arrow-text">Читать все благодарности</div>
			<div class="button__arrow"></div>
		</a>
	</div>
	<div class="about__thanks-right">
		<?foreach($arResult['ITEMS'] as $arItem):
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
			?>
			<div class="review" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="review__wrap">
					<div class="review__left">
						<div class="review__image">
							<img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>">
						</div>
						<?if (!empty($arItem['PROPERTIES']['VIDEO']['VALUE'])):?>
							<a class="review__link _video" href="<?=$arItem['PROPERTIES']['VIDEO']['VALUE']?>" data-fancybox="review<?=$arItem['ID']?>">Смотреть видео</a>
						<?endif?>
						<?if (!empty($arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC'])):?>
							<a class="review__link" href="<?=$arItem['DISPLAY_PROPERTIES']['REVIEW']['FILE_VALUE']['SRC']?>" data-fancybox="review<?=$arItem['ID']?>">Читать благодарственное письмо</a>
						<?endif?>
					</div>
					<div class="review__right">
						<div class="review__name"><?=$arItem["NAME"]?></div>
						<div class="review__author"><?=$arItem["PROPERTIES"]["AUTHOR"]["VALUE"]?></div>
						<div class="review__post"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></div>
						<div class="review__text"><?=$arItem["PREVIEW_TEXT"]?></div>
					</div>
				</div>
			</div>
		<?endforeach?>
	</div>
</div>