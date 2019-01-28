<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="seo lattice-ie-fix">
	<div class="container-outer">
		<div class="seo__wrap-outer">
			<div class="container-inner">
				<div class="seo__wrap-inner">
					<div class="seo__head">
						<div class="seo__title title angle">Продвижение сайтов</div>
						<div class="seo__steps steps">
							<button class="seo__steps-item steps__item" type="button">Первый месяц</button>
							<button class="seo__steps-item steps__item" type="button">Второй месяц</button>
							<button class="seo__steps-item steps__item" type="button">Третий месяц</button>
							<button class="seo__steps-item steps__item" type="button">Четвертый месяц</button>
						</div>
					</div>
					<div class="seo__contols">
						<div class="contols">
							<button class="seo__contols-item contols__item _left" type="button"></button>
							<button class="seo__contols-item contols__item _right" type="button"></button>
						</div>
					</div>
					<div class="seo-slider">
						<div class="seo-slider__viewport">
							<div class="seo-slider__wrap">
								<?foreach($arResult["ITEMS"] as $key => $arItem):
									$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
									$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
									?>
									<div class="seo-slider__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
										<div class="seo-slider__info">
											<div class="seo-slider__title"><?=$key + 1?> месяц</div>
											<div class="seo-slider__name"><?=$arItem["NAME"]?></div>
											<div class="seo-slider__description content">
												<?=$arItem["PREVIEW_TEXT"]?>
											</div>
										</div>
										<div class="seo-slider__statistic angle angle_reverse angle-white" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
											<div class="seo-slider__statistic-info">
												<div class="seo-slider__statistic-count"><?=$arItem["PROPERTIES"]["COUNT_VALUE"]["~VALUE"]?></div>
												<div class="seo-slider__statistic-text"><?=$arItem["PROPERTIES"]["COUNT_TITLE"]["~VALUE"]?></div>
											</div>
											<a class="seo-slider__more button button_white button_arrow" href="/services/seo/">
												<div class="button__arrow-text">Узнать больше</div>
												<div class="button__arrow"></div>
											</a>
										</div>
									</div>
								<?endforeach?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="lattice">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</div>