<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="head-socials">
	<div class="head-socials__text">Всегда на связи</div>
	<div class="head-socials__wrap">
		<a class="head-socials__item social-button" href="viber://pa?chatURI=dial" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#viber"></use>
			</svg>
		</a>
		<a class="head-socials__item social-button" href="https://vk.me/club41029771" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#vk"></use>
			</svg>
		</a>
		<a class="head-socials__item social-button" href="https://www.facebook.com/dialweb" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#facebook"></use>
			</svg>
		</a>
	</div>
</div>
<div class="dial-academy">
	<?foreach($arResult["ITEMS"] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
		?>
		<div class="dial-academy__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="dial-academy__left">
				<div class="dial-academy__name"><?=$arItem["NAME"]?></div>
				<div class="dial-academy__title"><?=$arItem["PREVIEW_TEXT"]?></div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle">Преподает:</div>
					<div class="dial-academy__text"><?=$arItem["PROPERTIES"]["TEACHER_NAME"]["VALUE"]?></div>
					<div class="dial-academy__post"><?=$arItem["PROPERTIES"]["TEACHER_POSITION"]["VALUE"]?></div>
				</div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle">Место проведения:</div>
					<div class="dial-academy__text"><?=$arItem["PROPERTIES"]["PLACE"]["VALUE"]?></div>
				</div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle">Количество в группе:</div>
					<div class="dial-academy__text"><?=$arItem["PROPERTIES"]["MAX_COUNT"]["VALUE"]?></div>
				</div>
				<div class="dial-academy__description">
					<div class="dial-academy__subtitle">Время обучения:</div>
					<div class="dial-academy__text"><?=$arItem["PROPERTIES"]["TIME"]["VALUE"]?></div>
				</div>
				<a class="dial-academy__button button button_oragne" href="https://academy.dialweb.ru" target="_blank">Подробнее</a>
			</div>
			<div class="dial-academy__right" style="background-image: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
				<div class="dial-academy__info">
					<div class="dial-academy__info-item">
						<div class="dial-academy__info-name">Стоимость курса</div>
						<div class="dial-academy__info-text"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></div>
						<div class="dial-academy__info-action">Для студентов <?=$arItem["PROPERTIES"]["PRICE_STUDENT"]["VALUE"]?></div>
					</div>
					<div class="dial-academy__info-item">
						<div class="dial-academy__info-name">Длительность курса</div>
						<div class="dial-academy__info-text"><?=$arItem["PROPERTIES"]["DURATION"]["VALUE"]?></div>
					</div>
					<div class="dial-academy__info-item">
						<div class="dial-academy__info-name">Дата начала</div>
						<div class="dial-academy__info-text"><?=$arItem["PROPERTIES"]["START"]["VALUE"]?></div>
					</div>
				</div>
			</div>
		</div>
	<?endforeach?>
</div>