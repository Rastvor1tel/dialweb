<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

	<div class="grade-item">
		<div class="grade-item__image">
			<img src="<?= CFile::ResizeImageGet(
					$arResult['PICTURE'],
					['width' => 200, 'height' => 200],
					BX_RESIZE_IMAGE_PROPORTIONAL_ALT)['src'] ?>"
			     alt="">
			<div class="grade-item-rating">Средняя оценка: <?=$arResult['RATING'];?></div>
		</div>
		<div class="grade-item__wrapper">
			<? foreach ($arResult['ITEMS'] as $item):?>
			<div class="grade-item__content">
		<!--		<div class="grade-item__preview">-->
		<!--			<img src="/local/templates/dial/template/img/logo.jpg" alt="">-->
		<!--		</div>-->
				<div class="grade-item__desc">
					<span class="grade-item__title">
						<?=$item['PROPERTY_NAME_VALUE'];?>
					</span>
					<span class="grade-item__subtitle"><?=$item['PROPERTY_COMPANY_VALUE'];?></span>
					<span class="grade-item__ratin">Оценка: <?=$item['PROPERTY_RATING_VALUE'];?></span>
					<div class="grade__text">Отзыв:
						<?=$item['PREVIEW_TEXT'];?>
					</div>
				</div>
			</div>
			<? endforeach;?>
		</div>

	</div>
<?= $arResult['PAGE_NAV'];?>
