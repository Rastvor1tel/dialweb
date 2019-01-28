<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="team">
	<?foreach($arResult['SECTIONS'] as $arSection):?>
	<div class="team__block">
		<div class="team__title"><?=$arSection['NAME']?></div>
		<div class="team__wrap">
			<?foreach($arSection['ITEMS'] as $arItem):
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
				$image = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array("width"=>288,"height"=>288), BX_RESIZE_IMAGE_EXACT);
				?>
				<div class="person" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					                        <div class="person__image">
						<img src="<?=$image['src']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" title="<?=$arItem['PREVIEW_PICTURE']['TITLE']?>">
						                          <div class="person__buttons">
                            <?if($arItem['DISPLAY_PROPERTIES']['GRADE']['VALUE']=='1'):?>
                                <a class="person__button button button_oragne" href="/grade/?id=<?=$arItem['ID'];?>" target="_blank">Оценить работу</a>
                            <?endif;?>
							<?if (!empty($arItem['DISPLAY_PROPERTIES']['SERTIFICATES'])):?>
								<div class="person__sertificates">
									<?if (!empty($arItem['DISPLAY_PROPERTIES']['SERTIFICATES']['FILE_VALUE']['SRC'])):?>
										<a class="person__button button button_oragne" href="<?=$arItem['DISPLAY_PROPERTIES']['SERTIFICATES']['FILE_VALUE']['SRC']?>" data-fancybox="person<?=$arItem['ID']?>">Сертификат</a>
									<?else:?>
										<?foreach ($arItem['DISPLAY_PROPERTIES']['SERTIFICATES']['FILE_VALUE'] as $sertificate):?>
											<a class="person__button button button_oragne" href="<?=$sertificate["SRC"]?>" data-fancybox="person<?=$arItem['ID']?>">Сертификаты</a>
										<?endforeach?>
									<?endif?>
								</div>
							<?endif?>
						</div>
					</div>
					<div class="person__info">
                        <a href="<?=$arItem['DETAIL_PAGE_URL']?>">
                            <div class="person__name"><?=$arItem["NAME"]?></div>
                            <div class="person__post"><?=$arItem["PROPERTIES"]["POSITION"]["VALUE"]?></div>
                            <?
                            /*global $USER;
                            if ($USER->IsAdmin()) {
                                $startWorking = strtotime($arResult['PROPERTIES']['START_WORKING']['VALUE']);
                                $curDay = strtotime(date('d.m.Y'));
                                $diff = $curDay - $startWorking;
                                $diff = $diff / (60 * 60 * 24 * 365);
                                $years = floor($diff);
                                print_r($arItem['PROPERTIES']['DIAL_WORKING']['VALUE'].' - '.$diff);
                            }*/
                            if ($arItem["PROPERTIES"]["TIME"]["VALUE"]) {
                                echo '<div class="person__experience">'.$arItem["PROPERTIES"]["TIME"]["VALUE"].' с нами</div>';
                            }
                            ?>
                        </a>
					</div>
				</div>
			<?endforeach?>
		</div>
	</div>
	<?endforeach?>
</div>
