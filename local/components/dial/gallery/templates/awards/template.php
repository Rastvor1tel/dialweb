<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="about__awards">
	<?foreach($arResult['ITEMS'] as $key => $arItem):
		$info = explode(';', $arItem['DESCRIPTION']);
	?>
		<a href="<?=$info[1]?>" target="_blank" class="about__awards-item">
			<img src="<?=$arItem['SRC']?>" alt="">
			<div class="about__awards-info">
                <?
                if (LANGUAGE_ID == 'ru') {
                    echo $info[0];
                } else {
                   echo $arResult['PROP'][strtoupper(LANGUAGE_ID).'_IMAGES_DESCRIPTION'][$key];
                }
                ?>
            </div>
		</a>
	<?endforeach?>
</div>
<?
//p($arResult);
?>