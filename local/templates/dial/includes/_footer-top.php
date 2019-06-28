<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container-inner">
	<div class="footer__wrap-inner">
		<div class="footer__contacts">
			<div class="footer__contacts-title _black">Единый номер</div>
			<div class="footer__contacts-info">
				<a class="footer__text" href="tel:+78007758343">8 (800) 775 83 43</a>
			</div>
		</div>
		<div class="footer__contacts">
			<div class="footer__contacts-title _black">Тула</div>
			<div class="footer__contacts-info _icon _address">
				<div class="footer__text">ул. 3-я Трубная, д.22, оф.2</div>
			</div>
			<div class="footer__contacts-info _icon _phones">
				<a class="footer__text zphone" href="tel:+74872250419">+7 (4872) 25-04-19</a>
				<a class="footer__text" href="tel:+79534256999">+7 (953) 425-69-99</a>
			</div>
			<div class="footer__contacts-info _icon _email">
				<a class="footer__text" href="mailto:manager@dialweb.ru">manager@dialweb.ru</a>
			</div>
		</div>
		<div class="footer__contacts">
			<div class="footer__contacts-title">Калуга</div>
			<div class="footer__contacts-info _icon _address">
				<div class="footer__text">ул. Дзержинского, д.35, оф.11</div>
			</div>

            <?
            if ($_SERVER['HTTP_HOST'] == 'kaluga.dialweb.ru') {
                $roistat4842Class = 'roistat-phone-4842';
            } else {
                $roistat4842Class = 'roistat-phone-dialweb4842';
            }
            ?>

			<div class="footer__contacts-info _icon _phones">
				<a class="footer__text <? echo $roistat4842Class; ?>-tel" href="tel:+74842202484">
                    <span class="<? echo $roistat4842Class; ?>">+7 (4842) 20-24-84</span>
                </a>
				<a class="footer__text" href="tel:+79308493454">+7 (930) 849-34-54</a>
			</div>
			<div class="footer__contacts-info _icon _email">
				<a class="footer__text" href="mailto:mo@dialweb.ru">mo@dialweb.ru</a>
			</div>
		</div>
		<div class="footer__contacts">
			<div class="footer__contacts-title">Москва</div>
			<div class="footer__contacts-info _icon _address">
				<div class="footer__text">ул. Угрешская, д.2, стр.31, оф.116</div>
			</div>

            <?
            if ($_SERVER['HTTP_HOST'] == 'kaluga.dialweb.ru') {
                $roistat495Class = 'roistat-phone-kaluga495';
            } else {
                $roistat495Class = 'roistat-phone-495';
            }
            ?>

			<div class="footer__contacts-info _icon _phones">
				<a class="footer__text <? echo $roistat495Class; ?>-tel" href="tel:+74959663898">
                    <span class="<? echo $roistat495Class; ?>"> +7 (495) 266-62-87</span>
                </a>
				<a class="footer__text" href="tel:+79035385939">+7 (903) 538-59-39</a>
			</div>
			<div class="footer__contacts-info _icon _email">
				<a class="footer__text" href="mailto:salemsk@dialweb.ru">salemsk@dialweb.ru</a>
			</div>
		</div>
	</div>
</div>