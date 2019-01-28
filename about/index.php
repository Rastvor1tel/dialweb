<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Digital Agency Dial, о нас");
$APPLICATION->SetTitle("О нас");
?>
<div class="site-case about">
	<div class="site-case__head _about">
		<div class="site-case__name">
			<h1 class="site-case__title page-title _no-transform">О нас</h1>
			<div class="site-case__slogan slogan angle">
				<p>DIAL - правильное интернет-агентство.</p>
				<p>Оказывая услуги интернет-маркетинга, мы всегда стремимся к идеалу. Это отражено во всем — от названия нашего агентства до строгих внутренних регламентов, позволяющих контролировать важные показатели проекта. </p>
				<p>Наша формула успеха:<br>Погружение в задачу + Правила + Рост = Dial</p></div>
		</div>
		<div class="site-case__head-image">
			<img src="<?=TEMPLATE_PATH?>/img/aumera.jpg" alt="Aumera">
			<a class="about__video" href="https://www.youtube.com/watch?v=7DllWvwUpQ0&autoplay=1&rel=0&&showinfo=0" data-fancybox>
				<div class="about__video-info">
					<div class="about__video-title">Давайте знакомиться!</div>
					<div class="about__video-text">Смотреть видео (2:34)</div>
				</div>
			</a>
		</div>
	</div>
	<div class="about__info">
		<div class="about__statictic">
			<div class="about__statictic-top">
				<div class="about__statictic-text _large">с</div>
				<div class="about__statictic-number">2009</div>
			</div>
			<div class="about__statictic-bottom">
				<div class="about__statictic-text">Преданы своему делу и получаем удовольствие от работы</div>
			</div>
		</div>
		<div class="about__info-content">
			<div class="about__info-name">О наших принципах</div>
			<div class="about__info-text">Мы ориентируемся на настоящие бизнес-показатели, влияющие на развитие вашей компании. В то время как агентства, живущие по стандартам 10-летней давности, считают только CTR объявлений, мы думаем о ваших оборотах. Другие смотрят на конверсию сайта, а “Диал” — заботится о среднем чеке и маржинальности. Мы говорим “нет” неактуальным стереотипам!</div>
		</div>
	</div>
	<div class="about__info _worth">
		<div class="about__info-content _no-margin _left">
			<div class="about__info-name">1. Развитие</div>
			<ul class="about__info-list">
				<li>Постоянное повышение качества услуг</li>
				<li>Обучение сотрудников. Собственная академия digital-наук</li>
				<li>Отслеживание тенденций в мире интернет-маркетинга, максимально быстрое изучение и внедрение нововведений</li>
			</ul>
			<div class="about__info-name">2. Стандартизация</div>
			<ul class="about__info-list">
				<li>Регламенты по всем основным процессам</li>
				<li>Описание нестандартных направлений деятельности</li>
				<li>Контроль качества и соблюдения стандартов</li>
			</ul>
			<div class="about__info-name">3. Масштабирование</div>
			<ul class="about__info-list">
				<li>Увеличение показателей — как наших собственных, так и клиентов</li>
				<li>Оцифровывание целей. Четкие и понятные критерии</li>
				<li>Комплексное развитие вашего бизнеса — рекомендации по построению отдела продаж, внедрение CRM, оффлайн-маркетинг</li>
			</ul>
		</div>
		<div class="about__statictic">
			<div class="about__statictic-top">
				<div class="about__statictic-number _first">80</div>
				<div class="about__statictic-text _large">сотрудников</div>
			</div>
			<div class="about__statictic-bottom">
				<div class="about__statictic-text">Развивают свое мастерство внутри и за пределами компании</div>
			</div>
		</div>
	</div>
	<?
	$APPLICATION->IncludeComponent("bitrix:news.list", "team_about", array(
		"IBLOCK_ID" => "4",
		"PARENT_SECTION" => "1",
		"NEWS_COUNT" => "20",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"PROPERTY_CODE" => array("SERTIFICATES"),
	));
	?>
	<div class="about__why">
		<?$APPLICATION->IncludeComponent("dial:gallery", "awards", array("ELEMENT_ID" => "88"));?>
		<div class="about__why-info">
			<div class="about__why-title">Почему мы</div>
			<ul class="about__why-features">
				<li>Мы видим решение проблем каждого клиента!</li>
				<li>Мы разрабатываем точную стратегию достижения конкретных целей!</li>
				<li>Мы анализируем полученный результат и ищем новые пути развития бизнеса клиента.</li>
			</ul>
		</div>
	</div>
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "reviews_about", array(
		"IBLOCK_ID" => "8",
		"NEWS_COUNT" => "1",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"PROPERTY_CODE" => array("REVIEW"),
	));?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>