<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="book-feedback__form">
	<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif?>
	<?if (($_GET["WEB_FORM_ID"] == $arResult["arForm"]["ID"]) && ($_GET["formresult"] == "addok")):?><p style="color: white;">Ваша заявка отправлена.</p><?endif?>
	<?=$arResult["FORM_HEADER"]?>
	<?foreach ($arResult["QUESTIONS"] as $arQuestion):
		$fieldname = "form_" . $arQuestion["STRUCTURE"][0]["FIELD_TYPE"] . "_" . $arQuestion["STRUCTURE"][0]["ID"];
	?>
		<?if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == 'text'):?>
			<label class="feedback-form__label input-label">
				<input type="text" name="<?=$fieldname?>" value="<?=$arResult["arrVALUES"][$fieldname]?>" class="input-label__input text-input" <?if ($arQuestion["REQUIRED"] == "Y"):?>required<?endif?>>
				<span class="input-label__placeholder js-placeholder"><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?> *<?endif?></span>
			</label>
		<?elseif ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "url"):?>
			<noscript>Для отправки сообщения включите JavaScript.</noscript>
			<div class="antibot" data-id="<?=$arQuestion["STRUCTURE"][0]["ID"]?>"></div>
		<?elseif ($arQuestion['CAPTION'] == 'roistat'):?>
			<input type="hidden" name="<?=$fieldname?>" value="" data-roistat-field>
        <?elseif ($arQuestion['CAPTION'] == 'Домен'):?>
            <input type="hidden" name="<?=$fieldname?>" value="<?=$_SERVER['HTTP_HOST']?>">
		<?elseif ($arQuestion['CAPTION'] == 'Город'):?>
			<input type="hidden" name="<?=$fieldname?>" value="<?=GeoCity::getCityName();?>">
		<?endif?>
	<?endforeach?>
	<div class="feedback-form__text">Нажимая кнопку "ОТПРАВИТЬ" я даю согласие на обработку персональных данных</div>
	<input type="submit" name="web_form_submit" value="Отправить" class="feedback-form__submit button button_white-bg">
	<?=$arResult["FORM_FOOTER"]?>
</div>
<script>
	$('.antibot').each(function(){
		$(this).html('<input type="hidden" name="form_url_'+$(this).data('id')+'" value="' + location.href + '">');
	});
	$('input[name="form_text_34"]').inputmask({mask: "+7 (999) 999-99-99", showMaskOnHover: false});
</script>
