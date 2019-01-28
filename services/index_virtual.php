<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$cur_page = $APPLICATION->GetCurPage();
if($cur_page != '/services/bitrix24/'):?>
<div class="academy">
	<div class="container-outer">
		<div class="academy__wrap-outer">
			<div class="container-inner">
				<div class="academy__wrap-inner" style="background-image: url('<?=TEMPLATE_PATH?>/img/academy-bg2.jpg');">
					<div class="academy__banner _seo angle-white">
						<div class="academy__info">
							<div class="academy__question">У вас уже есть реклама в Яндексе или Google?</div>
							<div class="academy__text">Закажите бесплатный аудит. Проведем экспертный аудит вашей рекламной кампании, дадим рекомендации по улучшению.</div>
						</div>
						<button class="academy__button button button_white-bg js-popup-button" type="button" data-popup="js-popup-service">Получить бесплатный аудит</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?endif;?>
<div class="feedback">
	<div class="container-outer">
		<div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?=TEMPLATE_PATH?>/img/feedback1.jpg')">
			<div class="container-inner">
				<div class="feedback__wrap-inner">
					<div class="feedback__head">
						<div class="feedback__title"><?$APPLICATION->ShowProperty("feedback_title")?></div>
						<div class="feedback__subtitle">Отправьте нам заявку</div>
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