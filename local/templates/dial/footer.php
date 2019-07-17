<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</div>
</div>
<?
// для реальных страниц подключаю файл origfile_inc.php
// для виртуальных страниц подключаю файл origfile_virtual.php
if (!empty($_SERVER['REAL_FILE_PATH'])) {
    $includePath = $_SERVER['DOCUMENT_ROOT'] . str_replace('.php', '_virtual.php', $_SERVER['REAL_FILE_PATH']);
} else {
    $includePath = str_replace('.php', '_inc.php', $_SERVER['SCRIPT_FILENAME']);
}
if (is_file($includePath)) {
    include($includePath);
}
?>
</main>
<footer class="footer">
    <div class="container-outer">
        <div class="footer__wrap-outer">
            <?include($_SERVER["DOCUMENT_ROOT"].'/local/templates/dial/includes/_footer-top.php');?>
        </div>
        <div class="footer__wrap-bottom">
            <?include($_SERVER["DOCUMENT_ROOT"].'/local/templates/dial/includes/_footer-bottom.php');?>
        </div>
    </div>
</footer>
<?include($_SERVER["DOCUMENT_ROOT"].'/local/templates/dial/includes/_popups.php');?>
<?include($_SERVER["DOCUMENT_ROOT"].'/local/templates/dial/includes/_counters.php');?>
<?if (SITE_ID != 's1') $APPLICATION->IncludeComponent("dial:meta.edit", "", Array());?>
<?$APPLICATION->IncludeComponent("dial:city.meta", "", []);?>
</body>
</html>
