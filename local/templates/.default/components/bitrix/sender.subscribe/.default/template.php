<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<form action="<?=$arResult["FORM_ACTION"]?>" method="post" class="subscription _news">
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="sender_subscription" value="add">
	<div class="subscription__wrap _news">
		<div class="subscription__title">Самое важное и интересное для вас!</div>
		<div class="subscription__desc">Мы не рассылаем спам. Только важная и актуальная информация. Полезные советы, статьи и события в фирме - будьте в курсе последних событий!</div>
		<?if (!empty($arResult['MESSAGE'])):?>
			<div class="subscription__desc"><b><?=$arResult['MESSAGE']['TEXT']?></b></div>
		<?endif?>
		<?if (empty($arResult['MESSAGE']) || $arResult['MESSAGE']['TYPE'] == 'ERROR'):?> 
			<label class="subscription__label input-label">
				<input type="email" name="SENDER_SUBSCRIBE_EMAIL" class="input-label__input text-input">
				<span class="input-label__placeholder js-placeholder">E-mail</span>
			</label>
			<input class="subscription__submit button button_white-bg" type="submit" value="Подписаться">
		<?endif?>
	</div>
</form>