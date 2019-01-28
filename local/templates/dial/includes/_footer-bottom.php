<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container-inner">
	<div class="footer__wrap-inner">
		<div class="footer__bottom">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array("ROOT_MENU_TYPE" => "bottom", "MAX_LEVEL" => "1"));?>
			<div class="footer__social">
				<div class="footer__social-item">
					<div class="footer__social-text">Мы в соцсетях:</div>
				</div>
				<a class="footer__social-item" href="https://www.facebook.com/dialweb" target="_blank">
					<div class="footer__social-text">Facebook</div>
					<svg class="footer__social-icon">
						<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#facebook"></use>
					</svg>
				</a>
				<a class="footer__social-item" href="https://vk.com/dialweb" target="_blank">
					<div class="footer__social-text">Vkontakte</div>
					<svg class="footer__social-icon">
						<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#vk"></use>
					</svg>
				</a>
				<a class="footer__social-item" href="https://www.instagram.com/dial.web/" target="_blank">
					<div class="footer__social-text">Instagram</div>
					<svg class="footer__social-icon">
						<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#insta"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>
</div>