<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="site-case">
	<div class="site-case__head">
		<div class="site-case__name">
			<div class="site-case__type"><?=$arResult['PROPERTIES']['TYPE']['VALUE']?></div>
			<h1 class="site-case__title page-title"><?=$arResult['NAME']?></h1>
			<div class="site-case__slogan slogan angle"><?=$arResult['PREVIEW_TEXT']?></div>
			<a class="site-case__link" href="<?=$arResult['PROPERTIES']['LINK']['VALUE']?>" target="_blank">
				<?if(empty($arResult['PROPERTIES']['LINK']['DESCRIPTION'])):
					echo $arResult['PROPERTIES']['LINK']['VALUE'];
				else: 
					echo $arResult['PROPERTIES']['LINK']['DESCRIPTION'];
				endif;?>
			</a>
		</div>
		<div class="site-case__head-image">
			<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="<?=$arResult['DETAIL_PICTURE']['ALT']?>" title="<?=$arResult['DETAIL_PICTURE']['TITLE']?>">
		</div>
	</div>
	<div class="site-case__about">
		<div class="site-case__block-name _about">О проекте</div>
		<div class="site-case__about-info">
			<?=$arResult['DETAIL_TEXT']?>
		</div>
	</div>
	<div class="site-case__index">
		<div class="site-case__block-name _index">Главная страница</div>
		<a class="site-case__image" href="<?=$arResult['DISPLAY_PROPERTIES']['HOME_IMAGE']['FILE_VALUE']['SRC']?>" data-fancybox="dev">
			<img src="<?=$arResult['DISPLAY_PROPERTIES']['HOME_IMAGE']['FILE_VALUE']['SRC']?>" alt="">
		</a>
	</div>
	<div class="site-case__parameters">
		<?if (!empty($arResult['PROPERTIES']['TYPOGRAPHY']['VALUE'])):?>
			<div class="site-case__print">
				<style><?=$arResult['PROPERTIES']['TYPOFONTS']['~VALUE']?></style>
				<div class="site-case__block-name _print">Типографика</div>
				<div class="site-case__print-wrap">
					<?foreach ($arResult['PROPERTIES']['TYPOGRAPHY']['VALUE'] as $key => $name):?>
						<div class="site-case__print-item" style="<?=$arResult['PROPERTIES']['TYPOSTYLES']['VALUE'][$key]?>">
							<div class="site-case__print-size"><?=$arResult['PROPERTIES']['TYPOGRAPHY']['DESCRIPTION'][$key]?></div>
							<div class="site-case__print-name"><?=$name?></div>
						</div>
					<?endforeach?>
				</div>
			</div>
		<?endif?>
		<?if (!empty($arResult['PROPERTIES']['COLORS']['VALUE'])):?>
			<div class="site-case__colors">
				<div class="site-case__block-name _colors">Цвета</div>
				<div class="site-case__colors-wrap">
					<?foreach ($arResult['PROPERTIES']['COLORS']['VALUE'] as $key => $color):?>
						<div class="site-case__colors-item" style="background-color: #<?=$color?>; color: <?=$arResult['PROPERTIES']['COLORS']['DESCRIPTION'][$key]?>;"><?=$color?></div>
					<?endforeach?>
				</div>
			</div>
		<?endif?>
	</div>
	<div class="site-case__gallery">
		<?if (!empty($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC'])):?>
			<a class="site-case__image" href="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC']?>" data-fancybox="dev">
				<img src="<?=$arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE']['SRC']?>" alt="">
			</a>
		<?else:?>
			<?foreach ($arResult['DISPLAY_PROPERTIES']['GALLERY']['FILE_VALUE'] as $key => $image):?>
				<?if ($key == 0):?>
					<a class="site-case__image" href="<?=$image['SRC']?>" data-fancybox="dev">
						<img src="<?=$image['SRC']?>" alt="">
					</a>
				<?else:?>
					<a href="<?=$image['SRC']?>" data-fancybox="dev"></a>
				<?endif?>
			<?endforeach?>
		<?endif?>
	</div>
	<div class="site-case__result">
		<div class="site-case__result-left">
			<div class="site-case__result-title page-title _small">Что в итоге мы получили</div>
			<div class="site-case__result-text"><?=$arResult['PROPERTIES']['RESULT']['~VALUE']['TEXT']?></div>
		</div>
		<div class="site-case__result-right">
			<div class="site-case__result-info">
				<div class="site-case__result-subtitle">Бюджет</div>
				<div class="site-case__result-number"><?=$arResult['PROPERTIES']['PRICE']['VALUE']?> <span>руб.</span></div>
			</div>
			<div class="site-case__result-info">
				<div class="site-case__result-subtitle">Затрачено времени</div>
				<div class="site-case__result-number"><?=$arResult['PROPERTIES']['TIME']['VALUE']?> <span>рабочих дней</span></div>
			</div>
		</div>
	</div>
	<?if (!empty($arResult['PROPERTIES']['TEAM']['VALUE'])):?>
		<div class="teamwork">
			<div class="teamwork__title page-title _small">Командная группа</div>
			<div class="teamwork__wrap">
				<?foreach ($arResult['PROPERTIES']['TEAM']['VALUE'] as $arItem):
					$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width"=>380,"height"=>460), BX_RESIZE_IMAGE_EXACT);
					?>
					<div class="teamwork__item">
						<img src="<?=$image['src']?>" alt="">
						<div class="teamwork__info">
							<div class="teamwork__name"><?=$arItem['NAME']?></div>
							<div class="teamwork__post"><?=$arItem['PROPERTY_POSITION_VALUE']?></div>
						</div>
					</div>
				<?endforeach?>
			</div>
		</div>
	<?endif?>
	<?if (!empty($arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'])):?>
		<div class="site-case__adaptive">
			<div class="site-case__adaptive-info">
				<div class="site-case__block-name _adaptive">Адаптив</div>
				<div class="site-case__adaptive-desc">Мы разработали удобный и красивый адаптивный дизайн для мобильных устройств. В результате чего сайт прекрасно отображается на любом носителе не теряя своего функционала.</div>
			</div>
			<div class="site-case__adaptive-image">
				<img src="<?=TEMPLATE_PATH?>/img/case-adaptive.png" alt="">
				<div class="site-case__adaptive-desktop" style="background-image: url(<?=$arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'][0]['SRC']?>)"></div>
				<div class="site-case__adaptive-tablet" style="background-image: url(<?=$arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'][1]['SRC']?>)"></div>
				<div class="site-case__adaptive-mobile" style="background-image: url(<?=$arResult['DISPLAY_PROPERTIES']['ADAPTIVE']['FILE_VALUE'][2]['SRC']?>)"></div>
			</div>
		</div>
	<?endif?>
	<?if (!empty($arResult['PROPERTIES']['REVIEW']['VALUE'])):
		$review = $arResult['PROPERTIES']['REVIEW']['VALUE'];
		?>
		<div class="site-case__review">
			<div class="site-case__block-name _review">Отзыв</div>
			<div class="site-case__review-block">
				<div class="site-case__review-desc">
					<div class="site-case__review-info">
						<div class="site-case__review-name"><?=$review['NAME']?></div>
						<?if (!empty($review['PROPERTY_REVIEW_VALUE'])):?>
							<div class="site-case__review-type">
								<a class="review__link" href="<?=$review['PROPERTY_REVIEW_VALUE']['SRC']?>" data-fancybox="review">Читать благодарственное письмо</a>
							</div>
						<?endif?>
					</div>
					<div class="site-case__review-info">
						<div class="site-case__review-name"><?=$review['PROPERTY_AUTHOR_VALUE']?></div>
						<div class="site-case__review-type"><?=$review['PROPERTY_POSITION_VALUE']?></div>
					</div>
					<div class="site-case__review-text"><?=$review['PREVIEW_TEXT']?></div>
				</div>
				<div class="site-case__review-image">
					<img src="<?=$review['PREVIEW_PICTURE']['SRC']?>" alt="">
				</div>
			</div>
		</div>
	<?endif?>
	<div class="site-case__thanks">Спасибо за просмотр!</div>
</div>