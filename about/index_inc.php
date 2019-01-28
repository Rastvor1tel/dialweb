<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="feedback">
	<div class="container-outer">
		<div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?=TEMPLATE_PATH?>/img/feedback2.jpg')">
			<div class="container-inner">
				<div class="feedback__wrap-inner">
					<div class="feedback__head">
						<div class="feedback__title _cmon">Давайте обсудим вашу задачу</div>
						<div class="feedback__subtitle-text">Наш специалист перезвонит Вам, и предложит варианты решения, а так же ответит на все Ваши вопросы.</div>
					</div>
					<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "feedback", array(
						"WEB_FORM_ID" => "2",
						"LIST_URL" => "",
						"AJAX_MODE" => "Y",
						"AJAX_OPTION_JUMP" => "N",
						"AJAX_OPTION_HISTORY" => "N",
					));?>
				</div>
			</div>
		</div>
	</div>
</div>
<?$APPLICATION->IncludeComponent("dial:gallery", "", array("ELEMENT_ID" => "87"));?>