<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="subscribe__blog">
    <form action="<?=$arResult["FORM_ACTION"]?>" method="post" class="subscription _light">
        <?=bitrix_sessid_post()?>
        <div class="subscribe__blog-text">Подпишитесь на ежемесячную рассылку от Dial и заряжайтесь интересными идеями!</div>
        <div class="subscribe__blog-wrap">

            <input type="hidden" name="sender_subscription" value="add">
            <?if (!empty($arResult['MESSAGE'])):?>
                <div class="subscription__desc"><b><?=$arResult['MESSAGE']['TEXT']?></b></div>
            <?endif?>
            <?if (empty($arResult['MESSAGE']) || $arResult['MESSAGE']['TYPE'] == 'ERROR'):?>
                <label class="subscription__label input-label">
                    <input type="email" name="SENDER_SUBSCRIBE_EMAIL" class="input-label__input text-input _black">
                    <span class="input-label__placeholder js-placeholder _black">E-mail</span>
                </label>
                <button class="subscription__submit button button_oragne" type="submit" value="Подписаться">Подписаться</button>
        
            <?endif?>
        </div>
        <img class="subscribe__blog-image" src="/local/templates/dial/template/img/subscribe/convert.jpg" alt="">
    </form>
    
</div>