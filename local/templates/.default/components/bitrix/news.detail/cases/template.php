<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$this->addExternalJS($templateFolder . '/chart.bundle.min.js');
?>
<div class="site-case">
	<div class="site-case__head">
		<div class="site-case__name">
			<div class="site-case__type"><?=$arResult['PROPERTIES']['TYPE']['VALUE']?></div>
			<h1 class="site-case__title page-title"><?=$arResult['NAME']?></h1>
			<div class="site-case__slogan slogan angle"><b>Цель:</b> <?=$arResult['PREVIEW_TEXT']?></div>
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
	<div class="site-case__about">
		<div class="site-case__block-name _about">Выполненные работы</div>
		<div class="site-case__about-info">
			<?=$arResult['PROPERTIES']['WORKS']['~VALUE']['TEXT']?>
		</div>
	</div>
	<div class="site-case__about _pregraph">
		<div class="site-case__block-name _about">Достигнутые результаты</div>
		<div class="site-case__about-info">
			<?=$arResult['PROPERTIES']['RESULT_SEO']['~VALUE']['TEXT']?>
		</div>
	</div>
	<?foreach ($arResult['PROPERTIES']['GRAPHICS_TEXT']['~VALUE'] as $key => $graphicText):?>
		<?if ($key % 2):?>
			<div class="site-case__statistic-block _left">
				<div class="site-case__statistic _left">
					<?=$graphicText?>
				</div>
				<div class="site-case__graph">
					<canvas width="755px" height="300px" class="site-case__canvas" data-values="<?=$arResult['PROPERTIES']['GRAPHICS_DATA']['VALUE'][$key]?>"></canvas>
				</div>
			</div>
		<?else:?>
			<div class="site-case__statistic-block">
				<div class="site-case__graph">
					<canvas width="755px" height="300px" class="site-case__canvas" data-values="<?=$arResult['PROPERTIES']['GRAPHICS_DATA']['VALUE'][$key]?>"></canvas>
				</div>
				<div class="site-case__statistic">
					<?=$graphicText?>
				</div>
			</div>
		<?endif?>
	<?endforeach?>
</div>