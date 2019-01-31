<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif?>
<?if (($_GET["WEB_FORM_ID"] == $arResult["arForm"]["ID"]) && ($_GET["formresult"] == "addok")):?><p>Ваша заявка отправлена.</p><?endif?>
<?=$arResult["FORM_HEADER"]?>
<?foreach ($arResult["QUESTIONS"] as $key => $arQuestion):
	$fieldname = "form_" . $arQuestion["STRUCTURE"][0]["FIELD_TYPE"] . "_" . $arQuestion["STRUCTURE"][0]["ID"];
?>	
	<?if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == 'text' && $arQuestion['CAPTION'] != 'roistat'):?>
		<label class="feedback-form__label input-label">
			<input type="text" name="<?=$fieldname?>" value="<?=$arResult["arrVALUES"][$fieldname]?>" class="input-label__input text-input" <?if ($arQuestion["REQUIRED"] == "Y"):?>required<?endif?>>
			<span class="input-label__placeholder js-placeholder"><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?> *<?endif?></span>
		</label>
	<?elseif ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == 'dropdown'):?>
		<div class="feedback-form__label input-label">
			<select name="form_dropdown_<?=$key?>" class="input-label__input text-input" required>
				<option value="" selected disabled>Выберите услугу</option>
				<?foreach ($arQuestion["STRUCTURE"] as $option):?>
					<option value="<?=$option["ID"]?>"><?=$option["MESSAGE"]?></option>
				<?endforeach?>
			</select>
		</div>
	<?elseif ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "url"):?>
		<noscript>Для отправки сообщения включите JavaScript.</noscript>
		<div class="antibot" data-id="<?=$arQuestion["STRUCTURE"][0]["ID"]?>"></div>
	<?elseif ($arQuestion['CAPTION'] == 'roistat'):?>
		<input type="hidden" 
			name="<?=$fieldname?>" 
			value="<?=array_key_exists('roistat_visit', $_COOKIE) ? $_COOKIE['roistat_visit'] : "неизвестно";?>"
		>
	<?endif?>
<?endforeach?>
<div class="feedback-form__text">Нажимая кнопку "ОТПРАВИТЬ" я даю согласие на обработку персональных данных</div>
<input type="submit" name="web_form_submit" value="Отправить" class="feedback-form__submit button button_white-bg">
<?=$arResult["FORM_FOOTER"]?>
<script>
	$('.antibot').each(function(){
		$(this).html('<input type="hidden" name="form_url_'+$(this).data('id')+'" value="' + location.href + '">');
	});
	$('input[name="form_text_31"]').inputmask({mask: "+7 (999) 999-99-99", showMaskOnHover: false});
</script>