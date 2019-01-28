<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (isset($_GET['SHOW_MORE'])) {
	$APPLICATION->RestartBuffer();
	while (ob_get_level()) {
		ob_end_clean();
	}
}
?>
<div class="blog-section js-show-more-container">
	<div class="blog-section__wrap-first">
		<?renderItem($arResult['ITEMS'][0], 'img')?>
		<?renderItem($arResult['ITEMS'][1], 'img')?>
		<?renderItem($arResult['ITEMS'][2], 'img')?>
	</div>
	<div class="blog-section__wrap-second">
		<div class="blog-section__wrap-third">
			<?renderItem($arResult['ITEMS'][3])?>
			<?renderItem($arResult['ITEMS'][4])?>
		</div>
		<div class="blog-section__wrap-fourth">
			<?renderItem($arResult['ITEMS'][5], 'bg')?>
		</div>
	</div>
	<div class="blog-section__wrap-first">
		<?renderItem($arResult['ITEMS'][6], 'img')?>
		<?renderItem($arResult['ITEMS'][7], 'img')?>
		<?renderItem($arResult['ITEMS'][8], 'img')?>
	</div>
	<div class="blog-section__wrap-second">
		<div class="blog-section__wrap-third">
			<?renderItem($arResult['ITEMS'][9])?>
			<?renderItem($arResult['ITEMS'][10])?>
		</div>
		<div class="blog-section__wrap-fourth">
			<?renderItem($arResult['ITEMS'][11], 'bg')?>
		</div>
	</div>
</div>
<?=$arResult['NAV_STRING']?>

<?
function renderItem($arItem, $type = null) {
	if (empty($arItem)) {
		return;
	}
	if ($type == 'img') {
		$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width"=>500,"height"=>300), BX_RESIZE_IMAGE_EXACT);
	} elseif ($type == 'bg') {
		$bg = 'style="background-image: url(\'' . $arItem["PREVIEW_PICTURE"]["SRC"] . '\')"';
	} else {
		$bg = '';
	}
	?>
	<a class="blog-section__item" href="<?=$arItem["DETAIL_PAGE_URL"]?>" <?=$bg?>>
		<?if (!empty($arItem["PROPERTIES"]["TAGS"]["VALUE"])):?>
			<div class="blog-section__type"><?=implode(', ', $arItem["PROPERTIES"]["TAGS"]["VALUE"])?></div>
		<?endif?>
		<?if ($type == 'img'):?>
			<div class="blog-section__image">
				<img src="<?=$image['src']?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
			</div>
		<?endif?>
		<div class="blog-section__info">
			<div class="blog-section__head">
				<div class="blog-section__date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
				<div class="blog-section__views"><?=$arItem["SHOW_COUNTER"]?></div>
			</div>
			<div class="blog-section__title"><?=$arItem["NAME"]?></div>
			<div class="blog-section__announcement"><?=$arItem["PREVIEW_TEXT"]?></div>
		</div>
	</a>
	<?
}

if (isset($_GET['SHOW_MORE'])) {
	die();
}