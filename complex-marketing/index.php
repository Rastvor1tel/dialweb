<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Комплексный маркетинг для тематики Строительство");

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.js");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template/libs/swiper/swiper.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/template/css/tools.css");
?>
<!-- build:content -->
<p>Всегда, наиболее популярной тематикой после интернет-магазинов в интернете было все, что связано со строительством.
    Как следствие, привлечь клиентов в строительной отрасли — сложная и дорогостоящая задача. И если раньше достаточно
    было SEO или рекламной кампании, то сегодня для продвижения необходим комплексный маркетинг.
</p>
<p><b>Что такое комплексный интернет маркетинг:</b>
    Это комбинация наиболее эффективных инструментов интернет рекламы для достижения максимального результата и для
    снижения стоимости конечного клиента.
    Для каждого клиента разрабатывается индивидуальный набор решений для продвижения бизнеса в интернете
</p>
<div class="site-case__head _about">
    <div class="site-case__name">
        <h1 class="site-case__title page-title _no-transform">Несколько слов о Dial:</h1>
        <div class="site-case__slogan slogan angle">
            <p>DIAL - правильное интернет-агентство.</p>
            <p>Оказывая услуги интернет-маркетинга, мы всегда стремимся к идеалу. Это отражено во всем — от названия
                нашего агентства до строгих внутренних регламентов, позволяющих контролировать важные показатели
                проекта. </p>
            <p>Наша формула успеха:<br>Погружение в задачу + Правила + Рост = Dial</p>
        </div>
    </div>
    <div class="site-case__head-image">
        <img src="/local/templates/dial/template/img/aumera.jpg" alt="Aumera">
    </div>
</div>
<div class="about__info tools__info">
    <div class="about__statictic">
        <div class="about__statictic-top">
            <div class="about__statictic-text _large">с</div>
            <div class="about__statictic-number">2009</div>
        </div>
        <div class="about__statictic-bottom">
            <div class="about__statictic-text">Преданы своему делу и получаем удовольствие от работы</div>
        </div>
    </div>
    <div class="about__info-content tools__info-content">
        <div class="about__info-text">
            <ul>
                <li>9 лет на рынке</li>
                <li>850 кейсов</li>
                <li>Входим в ТОПы различных рейтингов</li>
            </ul>
        </div>
    </div>
</div>

<div class="tools">
    <div class="tools__title">Инструменты, которые работают в связке для лучшего результата!</div>
    <div class="tools__subtitle">Мы всегда подберем оптимальное сочетание каналов для задач клиента.</div>
    <div class="tools__container">
        <div class="tools__titles">
            <a class="tools__name tools__name_active">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>SEO</span>
            </a>
            <a class="tools__name ">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>Контекстная реклама</span>
            </a>
            <a class="tools__name">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>Таргетированная реклама</span>
            </a>
            <a class="tools__name">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>Ретаргетинг</span>
            </a>
            <a class="tools__name">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>SMM</span>
            </a>
            <a class="tools__name">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>Медийная реклама</span>
            </a>
            <a class="tools__name">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>Email-маркетинг</span>
            </a>
            <a class="tools__name">
                <svg class="tools__svg" xmlns="http://www.w3.org/2000/svg" width="46px" height="46px"
                     viewBox="2 -7 56 56">
                    <path class="path" d="M 3 21 A 27 27 0 1 1 3.00005 21.06"></path>
                </svg>
                <span>Аналитика</span>
            </a>
        </div>
        <div class="tools__items angle angle_reverse angle-white">
            <div class="tools__slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="tools__slide swiper-slide">
                        Всестороннее продвижение и развитие сайта, с целью выведения его на первые позиции в поисковых
                        системах.
                    </div>
                    <div class="tools__slide swiper-slide">
                        Тип интернет-рекламы, которая показывается заинтересованным пользователям. Настраивается по
                        целевым запросам.
                    </div>
                    <div class="tools__slide swiper-slide">
                        Реклама в социальных сетях — настраивается на интересы целевой аудитории в ВК, Instagram или
                        Facebook.
                    </div>
                    <div class="tools__slide swiper-slide">Инструмент таргетированной рекламы, который помогает
                        “догонять” заинтересованных пользователей и предлагать им товары/услуги на просторах социальных
                        сетей.
                    </div>
                    <div class="tools__slide swiper-slide">Комплексное ведение и продвижение компании в социальных
                        сетях.
                    </div>
                    <div class="tools__slide swiper-slide">Тип интернет-рекламы для привлечения внимания целевой
                        аудитории. Как правило, это яркий текст, картинка или графика.
                    </div>
                    <div class="tools__slide swiper-slide">Почтовая рассылка. Очень действенный и недооцененный
                        инструмент. Помогает повысить продажи и сформировать базу лояльных клиентов.
                    </div>
                    <div class="tools__slide swiper-slide">В разрезе комплексного интернет-маркетинга анализируются все
                        показатели: целевая аудитория, сайт, социальные сети, рекламные каналы и др., в зависимости от
                        поставленных задач.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="icons">
    <div class="icons__title">Как мы работаем:</div>
    <div class="icons__list">
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#a"></use>
            </svg>
            <div class="icons__text">Глубокое погружение в бизнес клиента: маржинальность, стоимость заявки,
                сезонность, планы по росту бизнеса и т.д.
            </div>
        </div>
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#b"></use>
            </svg>
            <div class="icons__text">Анализ ниши и конкурентов</div>
        </div>
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#c"></use>
            </svg>
            <div class="icons__text">Разработка персональной маркетинговой стратегии</div>
        </div>
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#d"></use>
            </svg>
            <div class="icons__text">Разработка лендингов под конкретные проекты</div>
        </div>
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#e"></use>
            </svg>
            <div class="icons__text">Запуск рекламной кампании</div>
        </div>
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#f"></use>
            </svg>
            <div class="icons__text">Привлечение заинтересованной аудитории</div>
        </div>
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#g"></use>
            </svg>
            <div class="icons__text">Анализ и оптимизация</div>
        </div>
        <div class="icons__item">
            <svg class="icons__svg">
                <use xlink:href="/local/templates/dial/template/img/tools-icons.svg#h"></use>
            </svg>
            <div class="icons__text">Результат!</div>
        </div>
    </div>
</div>
<p>Мы ориентируемся на настоящие бизнес-показатели, влияющие на развитие вашей компании. В то время как агентства,
    живущие по стандартам 10-летней давности, считают только CTR объявлений — мы думаем о ваших оборотах. Другие
    смотрят на конверсию сайта, а “Диал” — заботится о среднем чеке и маржинальности. Мы говорим “нет” неактуальным
    стереотипам!</p>
<br><br>
<div class="about__why">
    <?$APPLICATION->IncludeComponent("dial:gallery", "awards", array("ELEMENT_ID" => "88"));?>
    <div class="about__why-info">
        <div class="about__why-title">Почему стоить работать с нами?</div>
        <ul class="about__why-features">
            <li>Сертифицированный партнер Яндекс</li>
            <li>Google Partner</li>
            <li>Топ 100 seo компаний рунета Ruward</li>
            <li>Золотой сертифицированный партнер 1С-Битрикс</li>
            <li>Входим в ТОП рейтингов CMSMagazine</li>
        </ul>
    </div>
</div>
<?php
global $caseFilter;
$caseFilter = ['ID' =>
    [716,710]
];
$APPLICATION->IncludeComponent("bitrix:news.list", "cases-slider", array(
    "IBLOCK_ID" => "11",
    "FILTER_NAME" => 'caseFilter',
    "NEWS_COUNT" => "10",
    "SET_TITLE" => "N",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "ADD_SECTIONS_CHAIN" => "N",
    "PROPERTY_CODE" => array("TYPE"),
    "SLOGAN" => "НАШИ КЛИЕНТЫ СТРОИТЕЛЬНОЙ ОТРАСЛИ И ИХ РЕЗУЛЬТАТЫ РАБОТЫ С НАМИ!"
));

?>
<!-- /build:content -->
<!-- build:script -->
<script>
    $(function () {
        var maxH = 0;
        $('.tools__slide').each(function () {
            maxH = ($(this).outerHeight() > maxH) ? $(this).outerHeight() : maxH;
        });
        $('.tools__slider').css('max-height', maxH);
        $('.tools__items').height(maxH);
        var toolSlider = new Swiper('.tools__slider', {
            direction: 'vertical',
            dots: false,
            arrows: false,
            speed: 1000,
            slidesPerView: 1,
            breakpoints: {
                1250: {
                    direction: 'horizontal',
                    effect: 'slide',
                    speed: 300,
                }
            }
        });
        $('.tools__name').click(function () {
            $('.tools__name').removeClass('tools__name_active');
            $(this).addClass('tools__name_active');
            toolSlider.slideTo($(this).index());
        })
        toolSlider.on('slideChange', function () {
            var index = toolSlider.realIndex;
            $('.tools__name').removeClass('tools__name_active').eq(index).addClass(
                'tools__name_active');
        });
    });
</script>
<!-- /build:script -->
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
