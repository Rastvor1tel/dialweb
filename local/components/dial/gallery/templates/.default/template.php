<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="container-outer">
	<div class="container-inner">
		<div class="gallery">
			<?foreach($arResult['ITEMS'] as $arItem):
				$image = CFile::ResizeImageGet($arItem, array("width" => 300, "height" => 235), BX_RESIZE_IMAGE_EXACT);
				?>
				<a class="gallery__item" href="<?=$arItem["SRC"]?>" data-fancybox="gallery">
					<img src="<?=$image['src']?>" alt="">
				</a>
			<?endforeach?>
		</div>
	</div>
</div>