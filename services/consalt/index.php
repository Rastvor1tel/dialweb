<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Правильный интернет консалтинг");
?>
<p>Вы уверены в эффективности работы вашего digital-подрядчика? Или может быть хотите разобраться в
    окупаемости рекламы? Эти и многие другие вопросы, часто беспокоят клиентов интернет-маркетинговых
    агентств. И мы поможем вам разобраться.</p>
<p>DIAL оказывает услугу интернет-консалтинга по всем digital-направлениям. В рамках консультации мы
    найдем типичные ошибки и поможем их избежать. Подскажем, как выжать максимум из того направления
    интернет-маркетинга, которое вас беспокоит.
</p>
<div class="feature-list">
    <div class="feature-list__title">Когда интернет-консалтинг вам необходим?</div>
    <div class="feature-list__list">
        <div class="feature-list__item">Есть пробелы в интернет-маркетинге</div>
        <div class="feature-list__item">Digital-инструменты не приносят результата</div>
        <div class="feature-list__item">Вы хотите проверить компетенцию текущего подрядчика</div>
    </div>
</div>
<div class="info">
    <div class="info__wrap-big">
        <div class="info__list info__list_column">
            <div class="info__list-item">
                <div class="info__list-name">Анализ вашего подрядчика</div>
                <div class="info__list-text">Проверим качество услуг и сервиса которые вы получаете, а
                    также адекватность цены за его услуги
                </div>
            </div>
            <div class="info__list-item">
                <div class="info__list-name">Анализ настройки Контекстной Рекламы</div>
                <div class="info__list-text">Вам говорят про рост CTR но заказов на сайте больше не
                    становится? Проверим каждое объявление - настройки, посадочные страницы и рекламные
                    креативы
                </div>
            </div>
            <div class="info__list-item">
                <div class="info__list-name">Консалтинг для интернет магазинов</div>
                <div class="info__list-text">Анализ всех конверсионных элементов вашего магазина -
                    карточек товаров, корзины, контента и т.д. А также проанализируем ваших конкурентов
                </div>
            </div>
            <div class="info__list-item">
                <div class="info__list-name">Анализ лидов и конверсии</div>
                <div class="info__list-text">Вас устраивает количество заявок с вашего сайта?
                    Проанализируем все точки контактов, лидформы и другие конверсионные элементы сайта
                </div>
            </div>
            <div class="info__list-item">
                <div class="info__list-name">Анализ работы отдела продаж</div>
                <div class="info__list-text">Хорошо ли работают ваши сотрудники? Насколько эффективно
                    они тратят рабочее время? Правильно ли отстроены бизнес процессы взаимодействия с
                    потенциальными клиентами? Разберем и покажем пути улучшения
                </div>
            </div>
            <div class="info__list-item">
                <div class="info__list-name">Консалтинг для нестандартных задач</div>
                <div class="info__list-text"> Нет невыполнимых задач, есть неправильные подходы к
                    решению. Разберем любую вашу проблему и разработаем правильное решение!
                </div>
            </div>
        </div>
    </div>
    <div class="info__wrap-small">
        <div class="feedback-form _consult" >
            <div class="feedback-form__title">Получить консультацию</div>
            <div class="feedback-form__text _white">Результат зависит от каждого конкретного проекта.
                Но в любом случае вы получит глубокую аналитику текущих показателей и возможных
                проблем. Получите консультацию и стратегию для улучшения ситуации. И, как следствие,
                сэкономите десятки, а возможно, и сотни тысяч рублей, получив при этом большие
                результаты.
            </div>
            <?
            $APPLICATION->IncludeComponent("bitrix:form.result.new", "phone", array(
                "WEB_FORM_ID" => "4",
                "LIST_URL" => "",
                "AJAX_MODE" => "Y",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_HISTORY" => "N",
            )); ?>
        </div>
    </div>
</div>
<div class="tariff">
    <?
    $APPLICATION->IncludeComponent("bitrix:news.list", "tariff", array(
        "IBLOCK_ID" => "7",
        "PARENT_SECTION" => "65",
        "NEWS_COUNT" => "10",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "PROPERTY_CODE" => array("PRICE")
    )); ?>
</div>
<div class="site-case__head _about">
    <div class="site-case__name">
        <h1 class="site-case__title page-title _no-transform">Специальное предложение</h1>
        <div class="site-case__slogan slogan angle">
            Персональная консультация от основателя и директора Dial Digital Аллы Штауб – предпринимателя, спикера,
            победителя различных конкурсов и бизнес-форумов, участника конференций и коуча по развитию бизнеса, по цене
            от 10000 рублей / час.
        </div>
    </div>
    <div class="site-case__head-image">
        <img src="/local/templates/dial/template/img/alla.jpg" alt="Aumera">
        <a class="button button_oragne about__button js-popup-button" data-popup="js-popup-service">Получить
            консультацию</a>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
