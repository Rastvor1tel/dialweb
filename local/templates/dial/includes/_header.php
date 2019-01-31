<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container-outer">
	<div class="header__wrap">
		<div class="header__wrap-logo">
			<div class="header__logo">
				<a href="/"><img src="<?=TEMPLATE_PATH?>/img/logo.svg" alt="Digital Agency Dial"></a>
			</div>
		</div>
		<div class="header__wrap-info">
			<div class="header__cases">
				<button class="header__order button button_oragne js-popup-button" type="button" data-popup="js-popup-service">Заказать услугу</button>
			</div>
			<div class="header__phone">
				<a class="header__phone-link" href="tel:+78007558343" id="call1">8 (800) 775 83 43</a>
			</div>
			<div class="header__phone">
				<?
				if (SITE_ID == "s3") {
                    echo '<a class="header__phone-link zphone" href="tel:+4842202484" id="call2">+7 (4842) 20 24 84</a>';
                } elseif (SITE_ID == "s1") {
                    $city = \Bitrix\Main\Service\GeoIp\Manager::getCityName();
                    if ($city == 'Moscow') {
                        echo '<a class="header__phone-link zphone" href="tel:+74959663898" id="call2">+7 (495) 966-38-98</a>';
                    } elseif ($city == 'Kaluga'){
                        echo '<a class="header__phone-link zphone" href="tel:+74842202484" id="call2">+7 (4842) 20 24 84</a>';
                    } else {
                        echo '<a class="header__phone-link zphone" href="tel:+74872250419" id="call2">+7 (4872) 25 04 19</a>';
                    }
                }
				?>
				<button type="button" class="header__phone-link js-popup-button" data-popup="js-popup-callback">Заказать звонок</button>
			</div>
            <div class="header__city">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="20px" height="20px" viewBox="0 0 491.582 491.582">
                    <path d="M245.791,0C153.799,0,78.957,74.841,78.957,166.833c0,36.967,21.764,93.187,68.493,176.926    c31.887,57.138,63.627,105.4,64.966,107.433l22.941,34.773c2.313,3.507,6.232,5.617,10.434,5.617s8.121-2.11,10.434-5.617    l22.94-34.771c1.326-2.01,32.835-49.855,64.967-107.435c46.729-83.735,68.493-139.955,68.493-176.926    C412.625,74.841,337.783,0,245.791,0z M322.302,331.576c-31.685,56.775-62.696,103.869-64.003,105.848l-12.508,18.959    l-12.504-18.954c-1.314-1.995-32.563-49.511-64.007-105.853c-43.345-77.676-65.323-133.104-65.323-164.743    C103.957,88.626,167.583,25,245.791,25s141.834,63.626,141.834,141.833C387.625,198.476,365.647,253.902,322.302,331.576z" fill="#fe9023"/>
                    <path d="M245.791,73.291c-51.005,0-92.5,41.496-92.5,92.5s41.495,92.5,92.5,92.5s92.5-41.496,92.5-92.5    S296.796,73.291,245.791,73.291z M245.791,233.291c-37.22,0-67.5-30.28-67.5-67.5s30.28-67.5,67.5-67.5    c37.221,0,67.5,30.28,67.5,67.5S283.012,233.291,245.791,233.291z" fill="#fe9023"/>
                </svg>
                <div class="header__city-select">
                    <?
                    $curSite = CSite::GetList($by="sort", $order="desc", ["LID" => SITE_ID])->Fetch();
                    echo $curSite['NAME'];
                    ?>
                </div>
            </div>
		</div>
		<div class="header__wrap-order">
			<a class="header__cases-button button" href="/portfolio/">Кейсы</a>
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
		<span class="sidebar__menu-text">Меню</span>
	</button>
	<div class="sidebar__social">
		<button type="button" class="sidebar__social-button social-button js-popup-button" data-popup="js-popup-callback">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#viber"></use>
			</svg>
			<div class="social-button__help">Обратный звонок</div>
		</button>
		<a class="sidebar__social-button social-button" href="https://vk.me/club41029771" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#vk"></use>
			</svg>
			<div class="social-button__help">Чат ВКонтакте</div>
		</a>
		<button type="button" class="sidebar__social-button social-button js-popup-button" data-popup="js-popup-chat">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#wechat"></use>
			</svg>
			<div class="social-button__help">Онлайн-чат</div>
		</button>
		<a class="sidebar__social-button social-button" href="https://lk.dialweb.ru/" target="_blank">
			<svg class="social-button__icon">
				<use xlink:href="<?=TEMPLATE_PATH?>/img/icons.svg#user"></use>
			</svg>
			<div class="social-button__help">Личный кабинет</div>
		</a>
	</div>
	<button class="sidebar__up" type="button">
		<span class="sidebar__up-text">Наверх</span>
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
		Презентация
	</a>
</div>
<div class="city-select">
    <div class="city-select__close"></div>
    <div class="container-outer">
        <div class="city-select__title">Выберите город:</div>
        <div class="city-select__items">
            <?
            $rsSite = CSite::GetList($by="sort", $order="desc", []);
            while ($arSite = $rsSite->Fetch()) {
                /*global $USER;
                if ($USER->IsAdmin()) {
                    echo $arSite['LID'];
                }*/
                if ($arSite['LID'] != SITE_ID) {
                    echo '<div class="city-select__item"><a href="https://' . $arSite['SERVER_NAME'] . '" selected disabled><span></span><div>' . $arSite['NAME'] . '</div></a></div>';
                } else {
                    echo '<div class="city-select__item active"><a href="https://' . $arSite['SERVER_NAME'] . '" selected disabled><span></span><div>' . $arSite['NAME'] . '</div></a></div>';
                }
            }
            ?>
        </div>
    </div>
</div>