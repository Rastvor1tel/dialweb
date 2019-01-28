<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<section class="blog lattice-ie-fix">
	<div class="container-outer">
		<div class="blog__wrap-outer">
			<div class="container-inner">
				<h2 class="blog__title title angle">Блог</h2>
				<div class="blog__wrap-inner">
					<a class="blog__more button button_grey button_arrow" href="/blog/">
						<div class="button__arrow-text">Читать блог</div>
						<div class="button__arrow"></div>
					</a>
					<div class="blog__list">
						<?foreach ($arResult["ITEMS"] as $arItem):
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
							?>
							<article class="blog__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
								<a class="blog__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<div class="blog__date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
									<h3 class="blog__name"><?=$arItem["NAME"]?></h3>
									<div class="blog__description"><?=$arItem["PREVIEW_TEXT"]?></div>
								</a>
							</article>
						<?endforeach?>
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
</section>