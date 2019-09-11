<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);

use Bitrix\Main\Localization\Loc;

$elementFour = count($arResult['ITEMS']) > 3 ? ' tariff-wrap4' : '';
?>

<div class="tariff__wrap<?= $elementFour ?>">
    <?
    if($USER->IsAdmin()){
        /*echo "<pre>";
        print_r($arResult['ITEMS']);
        echo "</pre>";*/
    }
    ?>
    <? foreach ($arResult['ITEMS'] as $key => $arItem):
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"));
        ?>
        <div class="tariff__item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <div class="tariff__number" data-number="0<?= $key + 1 ?>"><?= Loc::getMessage("TARIFF_TEXT") ?></div>

            <div class="tariff__info">

                <?
                if ($arItem['PROPERTIES']['LINK']['VALUE']) {
                    ?>
                    <a href="<?= $arItem['PROPERTIES']['LINK']['VALUE']; ?>" class="tariff__name">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["NAME"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID) . '_NAME']['VALUE'];
                        }
                        ?>
                    </a>
                    <?
                } else {
                    ?>
                    <div class="tariff__name">
                        <?
                        if (LANGUAGE_ID == 'ru') {
                            echo $arItem["NAME"];
                        } else {
                            echo $arItem['PROPERTIES'][strtoupper(LANGUAGE_ID) . '_NAME']['VALUE'];
                        }
                        ?>
                    </div>
                    <?
                }
                ?>
                <div class="tariff__desc">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        ?>
                        <?= $arItem["PREVIEW_TEXT"] ?>
                        <?
                    } else {
                        ?>
                        <?= $arItem["PROPERTIES"][strtoupper(LANGUAGE_ID) . '_PREVIEWTEXT']["~VALUE"]['TEXT'] ?>
                        <?
                    }
                    ?>
                </div>
                <div class="tariff__price">
                    <?
                    if (LANGUAGE_ID == 'ru') {
                        ?>
                        <?
                        if (isset($arItem["PROPERTIES"]["PRICE"]["VALUE"]) && $arItem["PROPERTIES"]["PRICE"]["VALUE"] != 0): ?>
                            <div class="tariff__price-text"><?= Loc::getMessage("FROM_TEXT") ?></div>
                            <div class="tariff__price-wrap">
                                <div class="tariff__price-count"><?= $arItem["PROPERTIES"]["PRICE"]["VALUE"] ?></div>
                                <div class="tariff__price-text"><?= Loc::getMessage("CURRENCY") ?></div>
                            </div>
                        <?endif; ?>
                        <?
                        if ($arItem["PROPERTIES"]["ADD_PRICE"]["VALUE"]): ?>
                            <?
                            foreach ($arItem["PROPERTIES"]["ADD_PRICE"]["VALUE"] as $k => $val): ?>
                                <div class="tariff__price-text"><?= $arItem["PROPERTIES"]["ADD_PRICE"]["DESCRIPTION"][$k] ?></div>
                                <div class="tariff__price-wrap">
                                    <div class="tariff__price-count"><?= $val ?></div>
                                    <div class="tariff__price-text"><?= Loc::getMessage("CURRENCY") ?></div>
                                </div>
                            <?endforeach; ?>
                        <?endif; ?>
                        <?
                    } else {
                        ?>
                        <?
                        if (isset($arItem["PROPERTIES"]["PRICE"]["VALUE"]) && $arItem["PROPERTIES"]["PRICE"]["VALUE"] != 0):?>
                            <div class="tariff__price-text"><?= Loc::getMessage("FROM_TEXT") ?></div>
                            <div class="tariff__price-wrap">
                                <div class="tariff__price-count"><?= $arItem["PROPERTIES"]["PRICE"]["VALUE"] ?></div>
                                <div class="tariff__price-text"><?= Loc::getMessage("CURRENCY") ?></div>
                            </div>
                        <?endif; ?>
                        <?
                        if ($arItem["PROPERTIES"][strtoupper(LANGUAGE_ID) . '_ADD_PRICE']["VALUE"]):?>
                            <?
                            foreach ($arItem["PROPERTIES"][strtoupper(LANGUAGE_ID) . '_ADD_PRICE']["VALUE"] as $k => $val):?>
                                <div class="tariff__price-text"><?= $arItem["PROPERTIES"][strtoupper(LANGUAGE_ID) . '_ADD_PRICE']["DESCRIPTION"][$k] ?></div>
                                <div class="tariff__price-wrap">
                                    <div class="tariff__price-count"><?= $val ?></div>
                                    <div class="tariff__price-text"><?= Loc::getMessage("CURRENCY") ?></div>
                                </div>
                            <?endforeach; ?>
                        <?endif; ?>
                        <?
                    }
                    ?>
                    <? /*if($arItem['IBLOCK_SECTION_ID'] == 9){?>
						<div class="black-friday__price">от<span><?=$arItem["PROPERTIES"]["BLACKFRIDAY_PRICE"]["VALUE"]?></span>рублей</div>
					<?};*/
                    ?>
                </div>
                <button class="tariff__order button button_oragne" type="button"
                        data-popup="js-popup-service"><?= Loc::getMessage("REQUEST_SERVICE") ?></button>
            </div>
        </div>
    <? endforeach ?>
</div>
<?if($arResult['SECTION']['PATH'][0]['DESCRIPTION']):?>
    <div class="tariff__subtitle"><?=$arResult['SECTION']['PATH'][0]['DESCRIPTION']?></div>
<?endif;?>
<?
/*global $USER;
if ($USER->IsAdmin()) {
    echo '<pre>';
    print_r($arItem["PROPERTIES"]);
    echo '</pre>';
}*/
?>
