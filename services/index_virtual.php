<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<?$cur_page = $APPLICATION->GetCurPage();
$hideAudit = $APPLICATION->getPageProperty("hide_audit");
if($cur_page != '/services/bitrix24/' && $hideAudit != 'да'):?>
<div class="academy">
	<div class="container-outer">
		<div class="academy__wrap-outer">
			<div class="container-inner">
				<div class="academy__wrap-inner" style="background-image: url('<?=TEMPLATE_PATH?>/img/academy-bg2.jpg');">
					<div class="academy__banner _seo angle-white">
						<div class="academy__info">
							<div class="academy__question"><?=Loc::getMessage('PAGE_SERVICES_BOTTOM_BANNER_TITLE')?></div>
							<div class="academy__text"><?=Loc::getMessage('PAGE_SERVICES_BOTTOM_BANNER_SUBTITLE')?></div>
						</div>
						<button class="academy__button button button_white-bg js-popup-button" type="button" data-popup="js-popup-service"><?=Loc::getMessage('PAGE_SERVICES_BOTTOM_BANNER_BUTTON')?></button>
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
						<div class="feedback__subtitle"><?=Loc::getMessage('PAGE_SERVICES_BOTTOM_FEEDBACK_SUBTITLE')?></div>
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
