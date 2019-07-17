<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Книга");
?>
<?php
$APPLICATION->includeComponent("dial:book", "");
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
