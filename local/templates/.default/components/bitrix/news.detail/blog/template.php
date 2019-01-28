<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$shareUrl = urlencode('https://' . $_SERVER['SERVER_NAME'] . $arResult["DETAIL_PAGE_URL"]);
?>
<div class="blog-inner">
	<div class="blog-inner__type"><?=implode(', ', $arResult["PROPERTIES"]["TAGS"]["VALUE"])?></div>
	<h1 class="blog-inner__title"><?=$arResult["NAME"]?></h1>
	<div class="blog-inner__info">
		<div class="blog-inner__head">
			<div class="blog-inner__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
			<div class="blog-inner__views"><?=$arResult["SHOW_COUNTER"]?></div>
		</div>
			<div class="head-socials _blog">
			<div class="head-socials__text">Поделиться:</div>
			<div class="head-socials__wrap">
				<a class="head-socials__item social-button" href="https://vk.com/share.php?url=<?=$shareUrl?>" target="_blank">
					<svg class="social-button__icon">
						<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#vk"></use>
					</svg>
				</a>
				<a class="head-socials__item social-button" href="https://www.facebook.com/sharer.php?u=<?=$shareUrl?>" target="_blank">
					<svg class="social-button__icon">
						<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#facebook"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
	<div class="blog-inner__wrap">
		<div class="blog-inner__content">
			<?=$arResult["DETAIL_TEXT"]?>
		</div>
		<div class="blog-inner__side">
			<?if (!empty($arResult["AUTHOR"])):
				$image = CFile::ResizeImageGet($arResult["AUTHOR"]["PREVIEW_PICTURE"], array("width"=>120,"height"=>120), BX_RESIZE_IMAGE_EXACT);
				?>
				<div class="blog-inner__author author">
					<div class="author__image">
						<img src="<?=$image["src"]?>" alt="<?=$arResult["AUTHOR"]["NAME"]?>">
					</div>
					<div class="author__name"><?=$arResult["AUTHOR"]["NAME"]?></div>
					<div class="author__post"><?=$arResult["AUTHOR"]["PROPERTY_POSITION_VALUE"]?></div>
				</div>
			<?endif?>
			<?$APPLICATION->IncludeComponent("bitrix:news.list", "blog-sidebar", array(
				"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"NEWS_COUNT" => "4",
				"SET_TITLE" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"SORT_BY1" => "RAND",
			));?>
		</div>
	</div>


<!-- подписка для блогов -->
	<div class="subscribe__blog">
		<?/*$APPLICATION->IncludeComponent("asd:subscribe.quick.form", "subscribe", Array(
			"FORMAT" => "html",	// Формат подписки
				"INC_JQUERY" => "N",	// Подключить jQuery
				"NOT_CONFIRM" => "Y",	// Подписывать без подтверждения
				"RUBRICS" => array(	// Подписывать на рубрики
					0 => "4",
				),
					"SHOW_RUBRICS" => "N",	// Показывать рубрики
				),
			false
		);*/?>
	</div>
	
</div>