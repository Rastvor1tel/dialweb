<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$main = ($APPLICATION->getCurPage(false) == '/') ? true : false;
?>
<? if (!$main): ?>
    </main>
<? endif; ?>
<footer class="footer" id="footer">
    <div class="container-outer">
        <div class="footer__wrap-outer">
            <? include($_SERVER["DOCUMENT_ROOT"] . '/local/templates/dial/includes/_footer-top.php'); ?>
            <div class="lattice lattice_footer">
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
        <div class="footer__wrap-bottom">
            <? include($_SERVER["DOCUMENT_ROOT"] . '/local/templates/dial/includes/_footer-bottom.php'); ?>
            <div class="lattice lattice_footer">
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
</footer>
<? include($_SERVER["DOCUMENT_ROOT"] . '/local/templates/dial/includes/_popups.php'); ?>
<? include($_SERVER["DOCUMENT_ROOT"] . '/local/templates/dial/includes/_counters.php'); ?>
<?
if (SITE_ID != 's1')
    $APPLICATION->IncludeComponent("dial:meta.edit", "", Array());
?>
</body>
</html>
