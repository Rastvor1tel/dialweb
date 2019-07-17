<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
if ($arResult["NavPageCount"] > 1 && ($arResult["NavPageNomer"] + 1 <= $arResult["nEndPage"])):
	if (strpos($arResult["sUrlPathParams"], 'SHOW_MORE') === false) {
		$arResult["sUrlPathParams"] .= 'SHOW_MORE=Y&';
	}
	$url = $arResult["sUrlPathParams"] . 'PAGEN_' . $arResult["NavNum"] . '=' . ($arResult["NavPageNomer"] + 1);
	?>
	<button class="button show-more-button js-show-more-button" type="button" data-url="<?=$url?>"><?=Loc::getMessage("BUTTON_TITLE");?></button>
<?endif?>