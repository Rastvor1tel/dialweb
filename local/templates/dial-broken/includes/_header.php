<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<div class="container-outer">
	<div class="header__wrap">
		<div class="header__wrap-logo">
			<div class="header__logo">
				<a href="/"><img src="<?=TEMPLATE_PATH?>/img/logo.svg" alt="Digital Agency Dial"></a>
			</div>
		</div>
		<div class="header__wrap-info">
			<div class="header__cases">
				<button class="header__order button button_oragne js-popup-button" type="button" data-popup="js-popup-service"><?=Loc::getMessage("POPUP_SERVICE");?></button>
			</div>
			<div class="header__phone">
				<a class="header__phone-link" href="tel:+78007758343" id="call1">8 (800) 775 83 43</a>
			</div>
			<div class="header__phone">
                <?
                    $currentCity = GeoCity::getCityCurrent();
                    $roistatPhoneClass = '';
                    if ($currentCity === 'RU-KLU') {
                        $roistatPhoneClass = 'roistat-phone-4842';
                    } else if ($currentCity === 'RU-MOW') {
                        $roistatPhoneClass = 'roistat-phone-495';
                    }
                ?>
				<?$APPLICATION->IncludeComponent('dial:city.show', '', ['FIELD' => 'PROPERTY_PHONE', 'CLASS' => 'header__phone-link '.$roistatPhoneClass]);?>
                <?
                if (LANGUAGE_ID == 'ru') {
                    ?>
                    <button type="button" class="header__phone-link js-popup-button" data-popup="js-popup-callback"><?=Loc::getMessage("CALLBACK");?></button>
                    <?
                } else {
                    ?>
                    <button type="button" class="header__phone-link b24-web-form-popup-btn-22"><?=Loc::getMessage("CALLBACK");?></button>
                    <?
                }
                ?>
			</div>
            <div class="header__city">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20px" height="20px" viewBox="0 0 491.582 491.582">
                    <path d="M245.791,0C153.799,0,78.957,74.841,78.957,166.833c0,36.967,21.764,93.187,68.493,176.926    c31.887,57.138,63.627,105.4,64.966,107.433l22.941,34.773c2.313,3.507,6.232,5.617,10.434,5.617s8.121-2.11,10.434-5.617    l22.94-34.771c1.326-2.01,32.835-49.855,64.967-107.435c46.729-83.735,68.493-139.955,68.493-176.926    C412.625,74.841,337.783,0,245.791,0z M322.302,331.576c-31.685,56.775-62.696,103.869-64.003,105.848l-12.508,18.959    l-12.504-18.954c-1.314-1.995-32.563-49.511-64.007-105.853c-43.345-77.676-65.323-133.104-65.323-164.743    C103.957,88.626,167.583,25,245.791,25s141.834,63.626,141.834,141.833C387.625,198.476,365.647,253.902,322.302,331.576z" fill="#fe9023"/>
                    <path d="M245.791,73.291c-51.005,0-92.5,41.496-92.5,92.5s41.495,92.5,92.5,92.5s92.5-41.496,92.5-92.5    S296.796,73.291,245.791,73.291z M245.791,233.291c-37.22,0-67.5-30.28-67.5-67.5s30.28-67.5,67.5-67.5    c37.221,0,67.5,30.28,67.5,67.5S283.012,233.291,245.791,233.291z" fill="#fe9023"/>
                </svg>
                <div class="header__city-select">
                    <?$APPLICATION->IncludeComponent('dial:city.show', '', ['FIELD' => 'NAME']);?>
                </div>
            </div>
		</div>
		<div class="header__wrap-order">
			<a class="header__cases-button button" href="/portfolio/"><?=Loc::getMessage("HEADER_CASES_BUTTON");?></a>
		</div>
		<?if (SITE_TEMPLATE_ID == 'dial-home'):?>
			<div class="lattice lattice_header">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		<?endif?>
	</div>
</div>
<div class="sidebar">
	<button class="sidebar__menu" type="button">
		<span class="sidebar__menu-cross"></span>
		<span class="sidebar__menu-text"><?=Loc::getMessage("SIDEBAR_MENU_TEXT");?></span>
	</button>
	<div class="sidebar__social">
		<button type="button" class="sidebar__social-button social-button js-popup-button" data-popup="js-popup-callback">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#viber"></use>
			</svg>
			<div class="social-button__help"><?=Loc::getMessage("SIDEBAR_SOCIAL_CALLBACK");?></div>
		</button>
		<a class="sidebar__social-button social-button" href="https://vk.me/club41029771" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#vk"></use>
			</svg>
			<div class="social-button__help"><?=Loc::getMessage("SIDEBAR_SOCIAL_VK");?></div>
		</a>
		<button type="button" class="sidebar__social-button social-button js-popup-button" data-popup="js-popup-chat">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#wechat"></use>
			</svg>
			<div class="social-button__help"><?=Loc::getMessage("SIDEBAR_SOCIAL_CHAT");?></div>
		</button>
		<a class="sidebar__social-button social-button" href="https://lk.dialweb.ru/" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#user"></use>
			</svg>
			<div class="social-button__help"><?=Loc::getMessage("SIDEBAR_SOCIAL_CABINET");?></div>
		</a>
	</div>
	<button class="sidebar__up" type="button">
		<span class="sidebar__up-text"><?=Loc::getMessage("SIDEBAR_UP");?></span>
	</button>
</div>
<div class="navigation">
	<nav class="navigation__wrap">
		<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array("ROOT_MENU_TYPE" => "top", "MAX_LEVEL" => "1"));?>
	</nav>
	<a class="navigation__presentation button" href="/upload/dial-presentation.pdf" target="_blank">
		<svg class="navigation__presentation-icon">
			<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#adobe-reader"></use>
		</svg>
        <?=Loc::getMessage("NAVIGATION_PRESENTATION");?>
	</a>
</div>
<?$APPLICATION->IncludeComponent('dial:city.change', '', ['ADDITIONAL_CITY' => [0 => 'RU-MOW']]);?>
