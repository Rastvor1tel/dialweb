<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);?>
<div class="popup js-popup-service">
    <div class="feedback-form">
        <div class="feedback-form__title"><?=Loc::getMessage("POPUP_SERVICE");?></div>
        <? $APPLICATION->IncludeComponent("bitrix:form.result.new", "service", array(
            "WEB_FORM_ID" => "1",
            "LIST_URL" => "",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_HISTORY" => "N",
        )); ?>
    </div>
    <button class="popup__close" type="button"></button>
</div>
<div class="popup js-popup-strategy">
    <div class="feedback-form">
        <div class="feedback-form__title"><?=Loc::getMessage("POPUP_STRATEGY_TITLE");?></div>
        <? $APPLICATION->IncludeComponent("bitrix:form.result.new", "strategy", array(
            "WEB_FORM_ID" => "5",
            "LIST_URL" => "",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_HISTORY" => "N",
        )); ?>
    </div>
    <button class="popup__close" type="button"></button>
</div>
<div class="popup js-popup-vacancy">
    <div class="feedback-form _callback">
        <?
        if (LANGUAGE_ID == 'ru') {
            ?>
            <iframe data-src="https://bitrix.dialweb.ru/pub/form.php?view=frame&form_id=12&sec=bncbdh&r=<?= time() ?>#<?= urlencode('{"options":{"borders":false,"logo":false}}') ?>"></iframe>
            <?
        } else {
            ?>
            <script id="bx24_form_button" data-skip-moving="true">
                (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                    (w[b].forms=w[b].forms||[]).push(arguments[0])};
                    if(w[b]['forms']) return;
                    var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                })(window,document,'https://bitrix.dialweb.ru/bitrix/js/crm/form_loader.js','b24form');

                b24form({"id":"23","lang":"ru","sec":"4oo9w8","type":"button","click":""});
            </script>
            <?
        }
        ?>
    </div>
    <button class="popup__close" type="button"></button>
</div>
<div class="popup js-popup-gift">
    <div class="feedback-form">
        <div class="feedback-form__title">Получить подарок</div>
        <? $APPLICATION->IncludeComponent("bitrix:form.result.new", "service", array(
            "WEB_FORM_ID" => "8",
            "LIST_URL" => "",
            "AJAX_MODE" => "Y",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_HISTORY" => "N",
        )); ?>
    </div>
    <button class="popup__close" type="button"></button>
</div>
<div class="popup _quit js-popup-quit">
    <form class="feedback-form _blog" action="#" method="post">
        <div class="feedback-form__title">Уже уходите? :(</div>
        <div class="feedback-form__text _blog">Подпишитесь на самые интересные темы в интернет-маркетинге!</div>
        <label class="feedback-form__label input-label">
            <input class="input-label__input text-input" type="text">
            <span class="input-label__placeholder js-placeholder">Ваш e-mail</span>
        </label>
        <input class="feedback-form__submit button button_white-bg" type="submit" value="Подписаться">
    </form>
    <button class="popup__close" type="button"></button>
</div>
<div class="popup _chat js-popup-chat">
    <div class="feedback-form _chat">
        <?/*
        <script>
            (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://bitrix.dialweb.ru/upload/crm/site_button/loader_1_y7rhyw.js');
        </script>

        */?>
        <?
        if (LANGUAGE_ID == 'ru') {
            ?>
            <iframe data-src="https://bitrix.dialweb.ru/online/tula2"></iframe>
            <?
        } else {
            ?>
            <script>
                (function(w,d,u){
                    var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                })(window,document,'https://bitrix.dialweb.ru/upload/crm/site_button/loader_6_nyhzba.js');
            </script>
            <?
        }
        ?>
    </div>
    <button class="popup__close" type="button"></button>
</div>
<div class="popup _callback js-popup-callback">
    <div class="feedback-form _callback">
        <?
        if (LANGUAGE_ID == 'ru') {
            ?>
            <? if ($_SESSION['city'] == 'RU-MOW'): ?>
                <iframe data-src="https://bitrix.dialweb.ru/pub/form.php?view=frame&form_id=6&sec=i16uu3&r=<?= time() ?>#<?= urlencode('{"options":{"borders":false,"logo":false}}') ?>"></iframe>
            <? else: ?>
                <iframe data-src="https://bitrix.dialweb.ru/pub/form.php?view=frame&form_id=7&sec=yrpig9&r=<?= time() ?>#<?= urlencode('{"options":{"borders":false,"logo":false}}') ?>"></iframe>
            <? endif; ?>
            <?
        } else {
            ?>
            <script id="bx24_form_button" data-skip-moving="true">
                (function(w,d,u,b){w['Bitrix24FormObject']=b;w[b] = w[b] || function(){arguments[0].ref=u;
                    (w[b].forms=w[b].forms||[]).push(arguments[0])};
                    if(w[b]['forms']) return;
                    var s=d.createElement('script');s.async=1;s.src=u+'?'+(1*new Date());
                    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
                })(window,document,'https://bitrix.dialweb.ru/bitrix/js/crm/form_loader.js','b24form');

                b24form({"id":"22","lang":"ru","sec":"oqv9fh","type":"button","click":""});
            </script>
            <?
        }
        ?>
    </div>
    <button class="popup__close" type="button"></button>
</div>
<div class="popup _personal">
    <div class="feedback-form _personal">
        <iframe data-src="https://bitrix.dialweb.ru/pub/form.php?view=frame&form_id=13&sec=2lw8kl&r=<?= time() ?>#<?= urlencode('{"options":{"borders":false,"logo":false}}') ?>"></iframe>
    </div>
    <button class="popup__close" type="button"></button>
</div>
<div class="overlay"></div>
