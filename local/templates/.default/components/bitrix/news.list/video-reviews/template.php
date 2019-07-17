<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
use Bitrix\Main\Localization\Loc;
if (isset($_GET['SHOW_MORE'])) {
	$APPLICATION->RestartBuffer();
	while (ob_get_level()) {
		ob_end_clean();
	}
}
?>
<div class="reviews-video js-show-more-container">
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$url = stristr($arItem['PROPERTIES']['VIDEO']['VALUE'],'youtube');
	$re = '/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"\'>]+)/';
	preg_match($re, $url, $matches);
	$videoId = $matches[1];
	$image = "https://img.youtube.com/vi/".$videoId."/maxresdefault.jpg";
	$src = imagecreatefromjpeg($image);
	$w_ntmx = imagesx($src);
	$w_ntmy = imagesy($src);
	$res = ($w_ntmx * $w_ntmy);
	if($res < 300) {  // 300 для примера, можно и меньше, просто у меня все картинки от 800, мне 300 вполне
		$image = 'https://dialweb.ru/local/templates/dial/template/img/banner.jpg';
	} 
	
	?>
	<div class="reviews-video__item"  id="<?=$this->GetEditAreaId($arItem['ID']);?>" data-fancybox href="https://www.youtube.com/watch?v=<?=$videoId?>" >
        <img src="<?=$image?>" alt="<?=$arItem['NAME']?>">
        <div class="reviews-video__box">
            <div class="reviews-video__box-inner">
                <div class="reviews-video__title">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        echo $arItem['NAME'];
                    } else {
                        echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID).'_NAME']['VALUE'];
                    }
                    ?>
                </div>
                <div class="reviews-video__sub-title">
                    <?= Loc::getMessage("WATCH") ?>
                </div>
            </div>
        </div>
    </div>
<?endforeach;?>
</div>
<?=$arResult['NAV_STRING']?>
<?
if (isset($_GET['SHOW_MORE'])) {
	die();
}