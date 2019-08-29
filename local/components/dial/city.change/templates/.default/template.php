<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?global $USER;
if($USER->isAdmin()):?>
<div class="city-select">
    <div class="container-outer">
        <div class="city-select-wrapper">
            <div class="city-select__close"></div>
            <div class="city-select-top">
                <div class="city-select-top__title">Выберите город</div>
                <div class="city-select-top__list">
                    <a href="#" class="city-select-top__item">Тула</a>
                    <a href="#" class="city-select-top__item">Москва</a>
                    <a href="#" class="city-select-top__item">Калуга</a>
                </div>

            </div>
            <div class="city-select-bottom">
                <ul class="city-select-bottom__list">
                    <li class="city-select-block">
                        <span class="city-select-block__letter">А</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Адлер</a></li>
                            <li><a href="#">Архангельск</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">Б</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Белгород</a></li>
                            <li><a href="#">Брянск</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">В</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Владикавказ</a></li>
                            <li><a href="#">Волгоград</a></li>
                            <li><a href="#">Воронеж</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">И</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Иваново</a></li>
                            <li><a href="#">Иркутск</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">К</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Казань</a></li>
                            <li><a href="#">Калининград</a></li>
                            <li><a href="#">Калуга</a></li>
                            <li><a href="#">Краснодар</a></li>
                            <li><a href="#">Красноярск</a></li>
                            <li><a href="#">Курск</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">Л</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Липецк</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">М</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Москва</a></li>
                            <li><a href="#">Мурманск</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">Н</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Нижний Новгород</a></li>
                            <li><a href="#">Новороссийск</a></li>
                            <li><a href="#">Новосибирск</a></li>
                            <li><a href="#">Ногинск</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">О</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Орел</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">П</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Пермь</a></li>
                            <li><a href="#">Пятигорск</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">Р</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Ростов-на-Дону</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">С</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Санкт-Петербург</a></li>
                            <li><a href="#">Сочи</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">Т</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Тамбов</a></li>
                            <li><a href="#">Тверь</a></li>
                            <li><a href="#">Тула</a></li>
                        </ul>
                    </li>
                    <li class="city-select-block">
                        <span class="city-select-block__letter">Х</span>
                        <ul class="city-select-block__list">
                            <li><a href="#">Хабаровск</a></li>
                            <li><a href="#">Химки</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?else:?>
<? if ($arResult['ITEMS']) :?>
<div class="city-select">

    <div class="container-outer">
        <div class="city-select__wrapper">
            <div class="city-select__title">Выберите город</div>
            <div class="city-select__items">
                <? foreach ($arResult['ITEMS'] as $arItem) {?>
                    <div class="city-select__item<?=$arItem['ACTIVE']=='Y'?' active':'';?>">
                        <a href="<?=$arItem['SITE_URL']?>"><span></span><div><?=$arItem['NAME']?></div></a>
                    </div>
                <?}?>
            </div>
            <div class="city-select__close"></div>
        </div>
        <div class="lattice lattice_city">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<?endif?>
<?endif;?>
