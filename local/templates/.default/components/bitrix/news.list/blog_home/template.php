<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
?>
<section class="blog lattice-ie-fix">
	<div class="container-outer">
		<div class="blog__wrap-outer">
			<div class="container-inner">
				<h2 class="blog__title title angle"><?=Loc::getMessage("BLOG_TITLE");?></h2>
				<div class="blog__wrap-inner">
					<a class="blog__more button button_grey button_arrow" href="/blog/">
						<div class="button__arrow-text"><?=Loc::getMessage("BLOG_MORE");?></div>
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
									<h3 class="blog__name">
                                        <?
                                        if (LANGUAGE_ID == 'ru') {
                                            echo  $arItem['NAME'];
                                        } else {
                                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'];
                                        }
                                        ?>
                                    </h3>
									<div class="blog__description">
                                        <?
                                        if (LANGUAGE_ID == 'ru') {
                                            echo  $arItem['PREVIEW_TEXT'];
                                        } else {
                                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_INTROTEXT']['~VALUE']['TEXT'];
                                        }
                                        ?>
                                     </div>
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