<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$APPLICATION->IncludeComponent('dial:city', '');

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>
<div class="container-outer">
    <div class="header__wrap">
        <div class="header__wrap-logo">
            <div class="header__logo">
                <a href="/">
                    <img src="<?= TEMPLATE_PATH ?>/img/logo.svg" alt="Digital Agency Dial">
                </a>
				<?
				if (LANGUAGE_ID == 'ru') {
					?>
                    <img class="birthday10" src="/local/templates/dial/template/img/10year/10year.png" alt="">
					<?
				} else {
					?>
                    <img class="birthday10" src="/local/templates/dial/template/img/10year/10year_en.png" alt="">
					<?
				}
				?>

            </div>
			<? /*
            <div class="dial-division tablet-hide">
                    <div class="dial-division__current">Группа компаний</div>
                    <div class="dial-division__list">
                        <div class="dial-division__item dial-division__item_current">Внедрение CRM</div>
                        <div class="dial-division__item">DiStart</div>
                        <div class="dial-division__item">Video Production</div>
                    </div>
                </div>
            */ ?>
        </div>
        <div class="header__wrap-info">
            <div class="header__cases">
                <button class="header__order button button_oragne js-popup-button" type="button"
                        data-popup="js-popup-service"><?= Loc::getMessage("POPUP_SERVICE"); ?></button>
            </div>
            <div class="header__phone">
                <a class="header__phone-link" href="tel:+78007758343" id="call1"
                   onClick="ga('send', 'event', 'tel', 'click1');">8 (800) 775 83 43</a>
            </div>
            <div class="header__phone" id="call2" onClick="ga('send', 'event', 'tel', 'click2');">
				<?
				$currentCity = GeoCity::getCityCurrent();
				$roistatPhoneClass = '';
				$roistatClasses = '';
				if ($currentCity == 'RU-KLU') {
					$roistatPhoneClass = 'roistat-phone-4842';
				} elseif ($currentCity == 'RU-MOW' || $currentCity == 'RU-MOS') {
					$roistatPhoneClass = 'roistat-phone-495';
					$roistatClasses = 'roistat-phone-msk1';
				} elseif ($currentCity == 'RU-TUL') {
					$roistatPhoneClass = 'roistat-phone04-19';
					$roistatClasses = 'roistat-phone-tula1';
				}
				?>
				<? $APPLICATION->IncludeComponent('dial:city.show', '', ['FIELD' => 'PROPERTY_PHONE', 'CLASS' => 'header__phone-link ' . $roistatClasses . ' ' . $roistatPhoneClass]); ?>
				<?
				if (LANGUAGE_ID == 'ru') {
					?>
                    <button type="button" class="header__phone-link js-popup-button" data-popup="js-popup-callback"><?= Loc::getMessage("CALLBACK"); ?></button>
					<?
				} else {
					?>
                    <button type="button" class="header__phone-link b24-web-form-popup-btn-22"><?= Loc::getMessage("CALLBACK"); ?></button>
					<?
				}
				?>

            </div>
			<?
			if (LANGUAGE_ID == 'ru') {
				?>
                <div class="header__city">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         width="20px" height="20px" viewBox="0 0 491.582 491.582">
                        <path d="M245.791,0C153.799,0,78.957,74.841,78.957,166.833c0,36.967,21.764,93.187,68.493,176.926    c31.887,57.138,63.627,105.4,64.966,107.433l22.941,34.773c2.313,3.507,6.232,5.617,10.434,5.617s8.121-2.11,10.434-5.617    l22.94-34.771c1.326-2.01,32.835-49.855,64.967-107.435c46.729-83.735,68.493-139.955,68.493-176.926    C412.625,74.841,337.783,0,245.791,0z M322.302,331.576c-31.685,56.775-62.696,103.869-64.003,105.848l-12.508,18.959    l-12.504-18.954c-1.314-1.995-32.563-49.511-64.007-105.853c-43.345-77.676-65.323-133.104-65.323-164.743    C103.957,88.626,167.583,25,245.791,25s141.834,63.626,141.834,141.833C387.625,198.476,365.647,253.902,322.302,331.576z"
                              fill="#fe9023"/>
                        <path d="M245.791,73.291c-51.005,0-92.5,41.496-92.5,92.5s41.495,92.5,92.5,92.5s92.5-41.496,92.5-92.5    S296.796,73.291,245.791,73.291z M245.791,233.291c-37.22,0-67.5-30.28-67.5-67.5s30.28-67.5,67.5-67.5    c37.221,0,67.5,30.28,67.5,67.5S283.012,233.291,245.791,233.291z"
                              fill="#fe9023"/>
                    </svg>
                    <div class="header__city-select">
						<? $APPLICATION->IncludeComponent('dial:city.show', '', ['FIELD' => 'NAME']); ?>
                    </div>
                </div>
				<?
			}
			?>

        </div>
		<?
		global $USER;
		if ($USER->IsAdmin()) {
			if (LANGUAGE_ID == 'ru') {
				?>
                <a class="lang-switch" href="https://en.dialweb.ru<?= $APPLICATION->GetCurPage(); ?>">
                    EN
                </a>
				<?
			} else {
				?>
                <a class="lang-switch" href="https://dialweb.ru<?= $arSite['DOMAINS'] . $APPLICATION->GetCurPage(); ?>">
                    РУ
                </a>
				<?
			}
		}
		?>
        <div class="header__wrap-order">
			<? /*<div class="dial-division tablet-show">
                <div class="dial-division__current">Группа компаний</div>
                <div class="dial-division__list">
                    <div class="dial-division__item dial-division__item_current">Digital</div>
                    <div class="dial-division__item">CRM</div>
                    <div class="dial-division__item">Видеопродакшн</div>
                </div>
            </div>*/ ?>
            <a class="header__cases-button button" href="/portfolio/"><?= Loc::getMessage("HEADER_CASES_BUTTON"); ?></a>
        </div>
		<? if (SITE_TEMPLATE_ID == 'dial-home'): ?>
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
		<? endif ?>
    </div>
</div>
<div class="sidebar">
    <button class="sidebar__menu" type="button">
        <span class="sidebar__menu-cross"></span>
        <span class="sidebar__menu-text"><?= Loc::getMessage("SIDEBAR_MENU_TEXT"); ?></span>
    </button>
    <div class="sidebar__social">
		<?
		if (LANGUAGE_ID == 'ru') {
			?>
            <button type="button" class="sidebar__social-button social-button js-popup-button"
                    data-popup="js-popup-callback">
                <svg class="social-button__icon">
                    <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#viber"></use>
                </svg>
                <div class="social-button__help"><?= Loc::getMessage("SIDEBAR_SOCIAL_CALLBACK"); ?></div>
            </button>
			<?
		} else {
			?>
            <button type="button" class="sidebar__social-button social-button b24-web-form-popup-btn-22">
                <svg class="social-button__icon">
                    <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#viber"></use>
                </svg>
                <div class="social-button__help"><?= Loc::getMessage("SIDEBAR_SOCIAL_CALLBACK"); ?></div>
            </button>
			<?
		}
		?>
        <a href="https://wa.me/79509200049" target="_blank" class="sidebar__social-button social-button tablet-show">
            <svg class="social-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
            </svg>
            <div class="social-button__help"><?= Loc::getMessage("SIDEBAR_SOCIAL_WAZZUP"); ?></div>
        </a>
        <a class="sidebar__social-button social-button" href="https://vk.me/club41029771" target="_blank">
            <svg class="social-button__icon">
                <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#vk"></use>
            </svg>
            <div class="social-button__help"><?= Loc::getMessage("SIDEBAR_SOCIAL_VK"); ?></div>
        </a>
		<?
		if (LANGUAGE_ID == 'ru') {
			?>
            <button type="button" class="sidebar__social-button social-button js-popup-button" data-popup="js-popup-chat">
                <svg class="social-button__icon">
                    <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#wechat"></use>
                </svg>
                <div class="social-button__help"><?= Loc::getMessage("SIDEBAR_SOCIAL_CHAT"); ?></div>
            </button>
			<?
		}
		?>
        <a class="sidebar__social-button social-button" href="https://lk.dialweb.ru/" target="_blank">
            <svg class="social-button__icon">
                <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#user"></use>
            </svg>
            <div class="social-button__help"><?= Loc::getMessage("SIDEBAR_SOCIAL_CABINET"); ?></div>
        </a>
    </div>
    <button class="sidebar__up" type="button">
        <span class="sidebar__up-text"><?= Loc::getMessage("SIDEBAR_UP"); ?></span>
    </button>
</div>
<div class="navigation">
    <nav class="navigation__wrap">
		<? $APPLICATION->IncludeComponent("bitrix:menu", "top", ["ROOT_MENU_TYPE" => "top", "MAX_LEVEL" => "1"]); ?>
    </nav>
    <a class="navigation__presentation button" href="/upload/dial-presentation.pdf" target="_blank">
        <svg class="navigation__presentation-icon">
            <use xlink:href="<?= TEMPLATE_PATH ?>/img/icons.svg#adobe-reader"></use>
        </svg>
		<?= Loc::getMessage("NAVIGATION_PRESENTATION"); ?>
    </a>
</div>
<? $APPLICATION->IncludeComponent('dial:city.change', '', ['ADDITIONAL_CITY' => [0 => 'RU-MOW']]); ?>
