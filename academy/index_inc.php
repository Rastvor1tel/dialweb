<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<div class="feedback">
	<div class="container-outer">
		<div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('<?=TEMPLATE_PATH?>/img/feedback1.jpg')">
			<div class="container-inner">
				<div class="feedback__wrap-inner">
					<div class="feedback__head">
						<div class="feedback__title _cmon"><?=Loc::getMessage('PAGE_ACADEMY_FORM_TITLE')?></div>
						<div class="feedback__subtitle-text _academy"><?=Loc::getMessage('PAGE_ACADEMY_FORM_SUBTITLE')?></div>
					</div>
					<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "feedback", array(
						"WEB_FORM_ID" => "3",
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