<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="about__awards">
	<?foreach($arResult['ITEMS'] as $arItem):
		$info = explode(';', $arItem['DESCRIPTION']);
	?>
		<a href="<?=$info[1]?>" target="_blank" class="about__awards-item">
			<img src="<?=$arItem['SRC']?>" alt="">
			<div class="about__awards-info"><?=$info[0]?></div>
		</a>
	<?endforeach?>
</div>