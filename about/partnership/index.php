<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("subtitle", "Партнерство с нашей компанией позволит вам предложить своим клиентам полный спектр высококачественных услуг, что повысит их удовлетворенность и лояльность к вашей компании");
$APPLICATION->SetTitle("Партнерам");
?>
<div class="partners">
	<div class="partners__block">
		<div class="partners__title">Основные услуги нашей компании</div>
		<div class="partners__services">
			<div class="partners__services-list">
				<a class="partners__services-item arrow-block" href="/services/seo/">
					<div class="arrow-block__name">Продвижение сайтов</div>
					<div class="arrow-block__arrow"></div>
				</a>
				<a class="partners__services-item arrow-block" href="/services/context/">
					<div class="arrow-block__name">Размещение контекстной рекламы</div>
					<div class="arrow-block__arrow"></div>
				</a>
				<a class="partners__services-item arrow-block" href="/services/development/">
					<div class="arrow-block__name">Создание сайтов</div>
					<div class="arrow-block__arrow"></div>
				</a>
			</div>
			<div class="partners__services-text">Приглашаем к сотрудничеству рекламные агества, дизайн студии и другие компании, работающие в сфере B2B</div>
		</div>
	</div>
	<div class="partners__block">
		<div class="partners__title _subtitle">Помимо этих услуг мы оказываем такие, как</div>
		<div class="partners__subtitle">Комплекс наших услуг огромен, каждую из них вы можете предложить своим клиентам</div>
		<div class="partners__also">
			<a class="partners__also-item arrow-block" href="/services/support/">
				<div class="arrow-block__name">Техническая поддержка</div>
				<div class="arrow-block__arrow"></div>
			</a>
			<a class="partners__also-item arrow-block" href="/services/audit/">
				<div class="arrow-block__name">Аудит сайта или рекламной компании</div>
				<div class="arrow-block__arrow"></div>
			</a>
			<a class="partners__also-item arrow-block" href="/services/development/">
				<div class="arrow-block__name">Веб-дизайн</div>
				<div class="arrow-block__arrow"></div>
			</a>
			<a class="partners__also-item arrow-block" href="/services/bitrix24/">
				<div class="arrow-block__name">Внедрение Битрикс 24</div>
				<div class="arrow-block__arrow"></div>
			</a>
			<a class="partners__also-item arrow-block" href="/services/analytics/">
				<div class="arrow-block__name">Веб-аналитика</div>
				<div class="arrow-block__arrow"></div>
			</a>
		</div>
	</div>
	<div class="partners__block">
		<div class="partners__title">Вариант сотрудничества можете выбрать любой</div>
		<div class="partners__choose">
			<div class="partners__choose-item">Вы нас рекомендуете, мы выплачиваем вам вознаграждение и дальнейшие работы с заказчиком ведем мы</div>
			<div class="partners__choose-item">Мы работаем на основе субподряда и всю отчетность предоставляем вам, как заказчику</div>
		</div>
	</div>
	<div class="partners__block _callback">
		<div class="partners__title _callback">Мы также готовы рассмотреть любое встречное предложение от вас от аналогичном сотрудничестве</div>
		<div class="partners__callback">Если у вас остались вопросы или есть предложение - звоните по телефону <a class="partners__callback-phone" href="tel:+74872250149">+7 (4872) 250-149</a></div>
		<div class="partners__callback">или пишете нам на почту <a class="partners__callback-email" href="mailto:dir@dialweb.ru">dir@dialweb.ru</a></div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>