<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="blog-inner__posts">
	<?foreach($arResult["ITEMS"] as $arItem):
		$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width"=>220,"height"=>120), BX_RESIZE_IMAGE_EXACT);
		?>
		<a class="blog-inner__post" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
			<div class="blog-inner__post-image">
				<img src="<?=$image['src']?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>">
			</div>
			<div class="blog-inner__post-name">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $arItem["NAME"];
                } else {
                    echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'];
                }
                ?>
            </div>
		</a>
	<?endforeach?>
</div>
<?
//p($arResult);
?>