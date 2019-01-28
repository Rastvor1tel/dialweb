<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="development__tabs tabs">
	<?foreach ($arResult['SECTIONS'] as $arSection):
		if ($arSection['CODE'] == 'development') {
			$arSection['SECTION_PAGE_URL'] = $arSection['LIST_PAGE_URL'];
		}
	?>
		<div class="development__tab tabs__items">
			<a href="<?=$arSection['SECTION_PAGE_URL']?>" class="development__tab tabs__item button<?=$arSection['CUR_SECTION']=='Y'?' _active':''?>">
				<?=$arSection['NAME']?>
				<span class="tabs__count"><?=$arSection['ELEMENT_CNT']?></span>
			</a>
			<?if ($arSection['SUBSECTION']):?>
			<div class="development__tab tabs__subitems">
				<?foreach ($arSection['SUBSECTION'] as $key => $arSubSection):?>
					<a href="<?=$arSubSection['SECTION_PAGE_URL']?>" class="development__tab tabs__item button<?=$arSubSection['CUR_SECTION']=='Y'?' _active':''?>">
						<?=$arSubSection['NAME']?>
						<span class="tabs__count"><?=$arSubSection['ELEMENT_CNT']?></span>
					</a>
				<?endforeach;?>
			</div>
			<?endif;?>
		</div>
	<?endforeach?>
</div>