<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);?>
<div class="container-inner">
	<div class="footer__wrap-inner">
		<div class="footer__bottom">
			<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", array("ROOT_MENU_TYPE" => "bottom", "MAX_LEVEL" => "1"));?>
			<div class="footer__social">
                <a class="footer__social-item agima-link" href="https://agima.partners/?utm_source=together-with-agima&utm_medium=beydzh&utm_campaign=dialweb" target="_blank">
                    <svg id="agima-badge" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 87.9 39.7">
                        <style>
                            .st1,.st2{fill:#1c1917}.st2{fill-rule:evenodd;clip-rule:evenodd}
                        </style>
                        <path d="M83.3 38.8H5.6c-2 0-3.7-1.6-3.7-3.7V4.5c0-2 1.6-3.7 3.7-3.7h77.7c2 0 3.7 1.6 3.7 3.7v30.7c-.1 2-1.7 3.6-3.7 3.6z" fill="#fff" stroke="#979898" stroke-miterlimit="10"/>
                        <path class="st1" d="M13.9 14.8V9.4H12V8.2h5.3v1.2h-1.9v5.4h-1.5zM17.1 12.4c0-1.4 1-2.5 2.5-2.5 1.6 0 2.6 1.2 2.6 2.5 0 1.4-1 2.5-2.6 2.5-1.6.1-2.5-1.1-2.5-2.5zm3.8 0c0-.8-.4-1.4-1.2-1.4-.8 0-1.2.7-1.2 1.4 0 .8.4 1.4 1.2 1.4.7 0 1.2-.6 1.2-1.4zM23.3 16.1l.6-.9c.4.4.9.6 1.5.6s1.3-.3 1.3-1.2v-.5c-.4.5-.9.8-1.5.8-1.2 0-2.1-.8-2.1-2.5 0-1.6.9-2.5 2.1-2.5.6 0 1.1.2 1.5.7V10H28v4.5c0 1.8-1.4 2.3-2.6 2.3-.9 0-1.5-.2-2.1-.7zm3.4-3v-1.6c-.2-.2-.7-.5-1.1-.5-.7 0-1.2.5-1.2 1.3s.5 1.3 1.2 1.3c.4.1.9-.2 1.1-.5zM29.2 12.4c0-1.4 1-2.5 2.5-2.5 1.4 0 2.4 1.1 2.4 2.7v.3h-3.6c.1.6.6 1.1 1.4 1.1.4 0 1-.2 1.3-.5l.6.8c-.5.4-1.2.7-2 .7-1.5 0-2.6-1-2.6-2.6zm2.5-1.5c-.8 0-1.1.6-1.2 1.1h2.4c-.1-.5-.4-1.1-1.2-1.1zM35.5 13.6v-2.5h-.8V10h.8V8.7h1.3V10h1v1.1h-1v2.2c0 .3.2.5.4.5s.4-.1.4-.1l.3 1c-.2.2-.5.3-1.1.3-.8 0-1.3-.5-1.3-1.4zM42.2 14.8v-2.9c0-.7-.3-.9-.9-.9-.5 0-.9.3-1.1.6v3.2h-1.3V8.2h1.3v2.5c.3-.4.9-.8 1.7-.8 1.1 0 1.6.6 1.6 1.5v3.4h-1.3zM44.6 12.4c0-1.4 1-2.5 2.5-2.5 1.4 0 2.4 1.1 2.4 2.7v.3H46c.1.6.6 1.1 1.4 1.1.4 0 1-.2 1.3-.5l.6.8c-.5.4-1.2.7-2 .7-1.6 0-2.7-1-2.7-2.6zm2.5-1.5c-.8 0-1.1.6-1.2 1.1h2.4c0-.5-.3-1.1-1.2-1.1zM50.7 14.8V10H52v.7c.3-.4.9-.8 1.5-.8v1.2h-.4c-.4 0-1 .2-1.2.5v3.2h-1.2zM61.6 14.8l-1-3.3-1 3.3h-1.4L56.8 10h1.3l.9 3.2 1-3.2h1.1l1.1 3.2.9-3.2h1.3L63 14.8h-1.4zM65.2 8.7c0-.4.3-.7.8-.7.4 0 .8.3.8.8 0 .4-.3.8-.8.8-.5-.1-.8-.4-.8-.9zm.1 6.1V10h1.3v4.8h-1.3zM68.4 13.6v-2.5h-.8V10h.8V8.7h1.3V10h1v1.1h-1v2.2c0 .3.2.5.4.5s.4-.1.4-.1l.3 1c-.2.2-.5.3-1.1.3-.9 0-1.3-.5-1.3-1.4zM75 14.8v-2.9c0-.7-.3-.9-.9-.9-.5 0-.9.3-1.1.6v3.2h-1.3V8.2H73v2.5c.3-.4.9-.8 1.7-.8 1.1 0 1.6.6 1.6 1.5v3.4H75z"/>
                        <g>
                            <path class="st2" d="M60.2 19.1h-3.4L54 26.3l-2.8-7.2h-3.4l-2.3 13.5H49l1.1-7.8 2.2 5.6.9 2.2h1.4l3.2-7.8 1 7.8h3.5zM42.2 19.1c-1.1 0-2.1.9-2.1 2v4.7-.1 4.9c0 1.1.9 2 2.1 2 1.1 0 2.1-.9 2.1-2v-4.9.1V21c0-1-.9-1.9-2.1-1.9zM71.9 19.1h-3.8l-5.2 13.4h3.7l.9-2.3h4.8l.9 2.3h3.7zM20.9 19.2h-3.8l-5.2 13.4h3.7l.9-2.4h4.8l.9 2.4h3.7zM36.8 25.1h-4.5v2.5H35c-.1.6-.3 1.1-.6 1.4-.5.5-1.2.7-2 .7-1 0-1.7-.3-2.3-.9-.8-.8-1.1-1.8-1.1-3 0-.6.1-1.1.3-1.7.6-1.5 1.6-2.2 3-2.2.7 0 1.3.2 1.8.6.4.3.7.7.9 1.3l3.1-1.3c-.5-1.1-1.2-1.9-1.9-2.4-1.1-.8-2.3-1.1-3.8-1.1-2.3 0-4 .7-5.3 2.2-1.1 1.3-1.7 2.8-1.7 4.7 0 1.7.5 3.1 1.4 4.3 1.3 1.6 3 2.4 5.4 2.4.6 0 1.1-.1 1.7-.2.8-.2 1.4-.5 2.1-.9 1.1-.7 1.9-1.7 2.4-3.1.3-.9.5-2 .5-3.4l-2.1.1z"/>
                        </g>
                    </svg>
                </a>
				<div class="footer__social-item">
					<div class="footer__social-text"><?=Loc::getMessage("FOOTER_SOCIAL");?></div>
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
