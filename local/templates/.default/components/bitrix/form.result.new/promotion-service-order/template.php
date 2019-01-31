<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="form-call form-circle">
	<div class="form-call__bg">
        <div class="center">
        	<div class="form-call__form">
				<?
					$aPaarams["DIAL_FORM_STYLES_BUTTON"]='';
					$aPaarams["DIAL_FORM_STYLES_LABEL"]='';
					$question_page = array(
						'/prodvizhenie-sajta/',
						'/sozdanie-sajta/',
						'/kontekstnaya-reklama/',
						'/smm/',
						'/audit-sayta/',
						'/kopirayting/',
						'/texnicheskaya-podderzhka/'
					);
					if (($APPLICATION->GetCurPage()=='/') || ($APPLICATION->GetCurPage()=='/uslugi/prodvizhenie-sajta/')) { 
						$arParams["DIAL_FORM_CAPTION"] = 'Хотите увеличить прибыль?'; 
						$arParams["DIAL_FORM_BUTTON"] = 'Вперед';
						$aPaarams["DIAL_FORM_STYLES_BUTTON"] = '';
						$aPaarams["DIAL_FORM_STYLES_LABEL"] = ' style="width:555px;" ';
					}

					if (in_array($APPLICATION->GetCurPage(), $question_page)) { 
						$arParams["DIAL_FORM_CAPTION"] = 'У вас есть вопросы?';
						$arParams["DIAL_FORM_BUTTON"] = 'Ответим';
						$aPaarams["DIAL_FORM_STYLES_BUTTON"] = '  style="width:295px;"';
						$aPaarams["DIAL_FORM_STYLES_LABEL"] = ' style="width:470px;" ';
					}
				?>
				<?=$arResult["FORM_HEADER"]?>
				<? if ($arResult['FORM_NOTE'] != '') : ?>
					<span><?=$arResult['FORM_NOTE'];?></span>
				<? else :?>
					<h5 class="form-call__title"><?=trim($arParams["DIAL_FORM_CAPTION"]) != '' ?  $arParams["DIAL_FORM_CAPTION"] : 'Заказать услугу:';?></h5>
					<input type="text" class="form-call__input" id="phone" name="form_text_31" placeholder="<?=trim($arParams["DIAL_PHONE_PLACEHOLDER"]) != '' ?  $arParams["DIAL_PHONE_PLACEHOLDER"] : 'Ваш телефон *';?>" required="required">
					<input name="web_form_submit" type="submit" class="form-call__submit" value="<?=trim($arParams["DIAL_FORM_BUTTON"]) != '' ?  $arParams["DIAL_FORM_BUTTON"] : 'Отправить';?>">
                    <p style="font-size: 13px;padding: 0;margin-top: -30px;color: #8a8c91;"><input type="checkbox" required="required" name="just" value="согласен с правилами обработки персональных данных">Согласен с правилами обработки персональных данных установленными в <a style="color: #8a8c91" target="_blank" href="/upload/privacy-policy.pdf">политике конфиденциальности</a></p>
                <? endif; ?>
				<?=$arResult["FORM_FOOTER"]?>
			</div>	
		</div>
	</div>
</div>
 <? // =$aPaarams["DIAL_FORM_STYLES_LABEL"] //?>
 <? // =$aPaarams["DIAL_FORM_STYLES_BUTTON"] //?>