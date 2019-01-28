<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="actions__head">
	<div class="actions__head-left">
		<div class="actions__head-subtitle">Акция</div>
		<h1 class="actions__head-title page-title _small"><?=$arResult["NAME"]?></h1>
		<div class="actions__description"><?=$arResult["DETAIL_TEXT"]?></div>
		<div class="actions__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
	</div>
	<div class="actions__head-image">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>">
	</div>
</div>