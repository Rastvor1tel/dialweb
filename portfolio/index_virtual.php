<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
if (!empty($GLOBALS['DEV_ELEMENT_ID'])) {
	$APPLICATION->IncludeComponent("dial:siblings", "development", array(
		"IBLOCK_ID" => 11,
		"ELEMENT_ID" => $GLOBALS['DEV_ELEMENT_ID'],
		"DEVELOPMENT" => "Y",
	));
} else {
	?>
	<div class="feedback">
		<div class="container-outer">
			<div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?=TEMPLATE_PATH?>/img/feedback1.jpg')">
				<div class="container-inner">
					<div class="feedback__wrap-inner">
						<div class="feedback__head">
							<div class="feedback__title"><?=Loc::getMessage('PAGE_CASES_BOTTOM_FEEDBACK_TITLE')?></div>
							<div class="feedback__subtitle"><?=Loc::getMessage('PAGE_CASES_BOTTOM_FEEDBACK_SUBTITLE')?></div>
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
	<?
}