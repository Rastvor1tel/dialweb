<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
?>
<?
if (LANGUAGE_ID == 'ru') {
    ?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif?>
<?if (($_GET["WEB_FORM_ID"] == $arResult["arForm"]["ID"]) && ($_GET["formresult"] == "addok")):?><p>Ваша заявка отправлена.</p><?endif?>
<?=$arResult["FORM_HEADER"]?>
    <?foreach ($arResult["QUESTIONS"] as $key => $arQuestion):
        /*global $USER;
        if ($USER->IsAdmin()) {
            print_r($arQuestion);
        }*/
        $fieldname = "form_" . $arQuestion["STRUCTURE"][0]["FIELD_TYPE"] . "_" . $arQuestion["STRUCTURE"][0]["ID"];
        ?>
        <?if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == 'text'):?>
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
        <input type="hidden" name="<?=$fieldname?>" value="" data-roistat-field>
    <?elseif ($arQuestion['CAPTION'] == 'Домен'):?>
        <input type="hidden" name="<?=$fieldname?>" value="<?=$_SERVER['HTTP_HOST']?>">
    <?elseif ($arQuestion['CAPTION'] == 'Город'):?>
        <input type="hidden" name="<?=$fieldname?>" value="<?=GeoCity::getCityName();?>">
    <?endif?>
    <?endforeach?>
    <div class="feedback-form__text">Нажимая кнопку "ОТПРАВИТЬ" я даю согласие на обработку персональных данных</div>
    <input type="submit" name="web_form_submit" value="Отправить" class="feedback-form__submit button button_white-bg" onsubmit="ga('send', 'event', 'forma', 'sendzakaz');">
    <?=$arResult["FORM_FOOTER"]?>
    <script>
        $('.antibot').each(function(){
            $(this).html('<input type="hidden" name="form_url_'+$(this).data('id')+'" value="' + location.href + '">');
        });
        $('input[name="form_text_10"]').inputmask({mask: "+7 (999) 999-99-99", showMaskOnHover: false});
    </script>

    <?
} elseif (LANGUAGE_ID == 'en') {
    ?>

    <?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif?>
    <?if (($_GET["WEB_FORM_ID"] == $arResult["arForm"]["ID"]) && ($_GET["formresult"] == "addok")):?><p>Your message has been sent.</p><?endif?>
    <?=$arResult["FORM_HEADER"]?>

    <label class="feedback-form__label input-label">
        <input type="text" name="form_text_9" value="" class="input-label__input text-input">
        <span class="input-label__placeholder js-placeholder">First Name</span>
    </label>
    <label class="feedback-form__label input-label">
        <input type="text" name="form_text_10" value="" class="input-label__input text-input" required="">
        <span class="input-label__placeholder js-placeholder">Phone *</span>
    </label>
    <div class="feedback-form__label input-label">
        <select name="form_dropdown_SIMPLE_QUESTION_453" class="input-label__input text-input" required="">
            <option value="" selected="" disabled="">Choose a service</option>
            <option value="11">PPC Advertising</option>
            <option value="12">SEO</option>
            <option value="13">Website development</option>
            <option value="16">Complete marketing</option>
            <option value="17">SMM</option>
            <option value="18">Tech support</option>
            <option value="19">Website audit</option>
            <option value="20">ATL advertising</option>
            <option value="21">Bitrix24</option>
            <option value="22">Web analytics</option>
            <option value="29">Targeted advertising</option>
        </select>
    </div>
    <label class="feedback-form__label input-label">
        <input type="text" name="form_text_14" value="" class="input-label__input text-input">
        <span class="input-label__placeholder js-placeholder">Message</span>
    </label>

    <div class="antibot" data-id="15"></div>

    <div class="feedback-form__text">By clicking SEND on the website I give consent to personal data processing</div>
    <input type="submit" name="web_form_submit" value="Send" class="feedback-form__submit button button_white-bg" onsubmit="ga('send', 'event', 'forma', 'sendzakaz');">
    <?=$arResult["FORM_FOOTER"]?>
    <script>
        $('.antibot').each(function(){
            $(this).html('<input type="hidden" name="form_url_'+$(this).data('id')+'" value="' + location.href + '">');
        });
        $('input[name="form_text_10"]').inputmask({mask: "+7 (999) 999-99-99", showMaskOnHover: false});
    </script>

    <?
}
?>
