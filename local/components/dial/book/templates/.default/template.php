<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;

Asset::getInstance()->addJs($templateFolder."/book.js");
Asset::getInstance()->addCss($templateFolder."/book.css");
?>
<div class="book">
    <div class="container-outer">
        <div class="container-inner">
            <div class="top-menu">
                <a href="#book-main" class="top-menu__item">Руководство</a>
                <a href="#book-advantages" class="top-menu__item">Преимущества</a>
                <a href="#book-advice" class="top-menu__item">Содержание</a>
                <a href="#book-feedback" class="top-menu__item">Скачать</a>
                <a href="#footer" class="top-menu__item">Контакты</a>
            </div>
            <div class="book-main" id="book-main">
                <div class="book-main__photo">
                    <img src="/book/book-main.png" alt="">
                </div>
                <div class="book-main__info">
                    <div class="book-subtitle book-main__subtitle">
                        01. ПЕРВЫЙ DIGITAL-ПУТЕВОДИТЕЛЬ В РУНЕТЕ копия
                    </div>
                    <div class="book-main__title">ГИД ПО ПОДРЯДЧИКАМ</div>
                    <div class="book-main__slogan slogan angle">
                        Пошаговая инструкция для выбора исполнителей, которые лучше всего реализуют вашу задачу с учетом требований и возможностей. Кратко. Объективно. По делу.

                    </div>
                    <div class="book-features">
                        <div class="book-features__item book-features__item_atom">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="50 50 300 300">
                                <defs>
                                    <symbol id="e">
                                        <ellipse cx="200" cy="200" rx="33" ry="88" fill="none" stroke="inherit" stroke-color="black" />
                                    </symbol>
                                </defs>

                                <use id="orbit-1" xlink:href="#e" />
                                <use id="orbit-2" xlink:href="#e" transform="rotate(60 200 200)" />
                                <use id="orbit-3" xlink:href="#e" transform="rotate(120 200 200)" />

                                <use id="electron-1" xlink:href="#e" />
                                <use id="electron-2" xlink:href="#e" transform="rotate(60 200 200)" />
                                <use id="electron-3" xlink:href="#e" transform="rotate(120 200 200)" />

                                <circle id="nucleus" fill="#000" cx="200" cy="200" r="8" />
                            </svg>
                            <div class="book-features__title">ОСНОВЫ ТЕОРИИ</div>
                            <div class="book-features__text">Объяснит, как должно быть «по науке»</div>
                        </div>
                        <div class="book-features__item book-features__item_kompas">
                            <svg height="480pt" viewBox="0 0 480 480" xmlns="http://www.w3.org/2000/svg">
                                <path d="m240 0c-132.546875 0-240 107.453125-240 240s107.453125 240 240 240 240-107.453125 240-240c-.148438-132.484375-107.515625-239.851562-240-240zm0 464c-123.710938 0-224-100.289062-224-224s100.289062-224 224-224 224 100.289062 224 224c-.140625 123.652344-100.347656 223.859375-224 224zm0 0"
                                />
                                <path d="m240 40c-110.457031 0-200 89.542969-200 200s89.542969 200 200 200 200-89.542969 200-200c-.125-110.40625-89.59375-199.875-200-200zm0 384c-101.621094 0-184-82.378906-184-184s82.378906-184 184-184 184 82.378906 184 184c-.113281 101.574219-82.425781 183.886719-184 184zm0 0"
                                />
                                <path class="rotated-path" d="m357.824219 122.175781c-2.546875-2.539062-6.472657-3.066406-9.601563-1.289062l-142.824218 81.511719c-.085938.058593-.125.152343-.214844.203124-.914063.785157-1.769532 1.640626-2.558594 2.558594-.050781.085938-.144531.128906-.199219.214844l-81.539062 142.824219c-1.785157 3.132812-1.253907 7.070312 1.292969 9.621093 2.550781 2.546876 6.488281 3.078126 9.621093 1.292969l142.800781-81.511719c.085938-.058593.125-.152343.214844-.203124.914063-.785157 1.769532-1.640626 2.558594-2.558594.050781-.085938.144531-.128906.199219-.214844l81.539062-142.800781c1.800781-3.136719 1.273438-7.09375-1.289062-9.648438zm-208.511719 208.511719 61.808594-108.246094 46.480468 46.4375zm119.566406-73.085938-46.398437-46.402343 108.246093-61.808594zm0 0"
                                />
                                <path d="m112 232h-32c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h32c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0" />
                                <path d="m400 232h-32c-4.417969 0-8 3.582031-8 8s3.582031 8 8 8h32c4.417969 0 8-3.582031 8-8s-3.582031-8-8-8zm0 0" />
                                <path d="m240 120c4.417969 0 8-3.582031 8-8v-32c0-4.417969-3.582031-8-8-8s-8 3.582031-8 8v32c0 4.417969 3.582031 8 8 8zm0 0" />
                                <path d="m240 360c-4.417969 0-8 3.582031-8 8v32c0 4.417969 3.582031 8 8 8s8-3.582031 8-8v-32c0-4.417969-3.582031-8-8-8zm0 0" />
                            </svg>
                            <div class="book-features__title">Научит практике</div>
                            <div class="book-features__text">Покажет, как применять знания</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book-subtitle">главный вопрос</div>
            <div class="page-title">Что даст прочтение?</div>
            <div class="book-benefit" id="book-advantages">
                <div class="book-benefit__item angle">
                    <div class="book-benefit__subtitle">польза №1</div>
                    <div class="book-benefit__title">СНИЖЕНИЕ РИСКОВ</div>
                    <div class="book-benefit__text">
                        Увеличиваются шансы на успешный результат. Будете уверены, что ваш проект находится в надежных руках, и задача реализуется с учетом всех требований и предпочтений.
                    </div>
                </div>
                <div class="book-benefit__item angle">
                    <div class="book-benefit__subtitle">польза №2</div>
                    <div class="book-benefit__title">ЭКОНОМИЯ ВРЕМЕНИ</div>
                    <div class="book-benefit__text">
                        Не нужно постоянно менять подрядчиков. Выбрать одну команду по принципу «раз и навсегда» — сэкономит кучу времени. Меряйте 7 раз, чтобы резать не больше 1
                    </div>
                </div>
                <div class="book-benefit__item angle">
                    <div class="book-benefit__subtitle">польза №3</div>
                    <div class="book-benefit__title">ЭКОНОМИЯ ФИНАНСОВ</div>
                    <div class="book-benefit__text">
                        Оптимизируется бюджет. Снижение расходов на «неудачные эксперименты». Появится понимание, за что не нужно «переплачивать», а где стоит вложиться, чтобы в перспективе получить больше
                    </div>
                </div>
            </div>
            <div id="book-advice"  class="page-title book-advice__title">43 страницы отборных советов</div>
            <div class="book-advice" style="background-image: url(<?=$templateFolder?>/img/book-advice.png)">
                <div class="book-advice__subtitle">В содержании:</div>
                <div class="feature-list book-advice__list">
                    <div class="feature-list__list">
                        <div class="feature-list__item">Об агентствах, продакшнах и других участниках рынка. Можно ли обращаться к фрилансерам?</div>
                        <div class="feature-list__item">Формулировка вашей задачи / условий. Как заполнять бриф?</div>
                        <div class="feature-list__item">Специфика услуг. В чем отличие подходов к заказу SEO и контекстной рекламы?</div>
                        <div class="feature-list__item">Первая коммуникация. Где искать кандидатов?


                        </div>
                        <div class="feature-list__item">Как правильно оценивать предложения?


                        </div>
                    </div>
                </div>
            </div>
            <div class="feedback book-feedback" id="book-feedback">
                <div class="feedback__wrap-outer angle angle_reverse angle-white" style="background-image: url('/local/templates/dial/template/img/feedback1.jpg')">
                    <div class="container-inner">
                        <div class="feedback__wrap-inner">
                            <div class="feedback__head">
                                <div class="feedback__title">Заказать бесплатную отправку на почту</div>
                                <div class="feedback__subtitle">Отправьте нам заявку</div>
                            </div>
                            <?$APPLICATION->IncludeComponent("bitrix:form.result.new", "book", array(
                                "WEB_FORM_ID" => "6",
                                "LIST_URL" => "",
                                "AJAX_MODE" => "Y",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_HISTORY" => "N",
                            ));?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
