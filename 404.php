<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404. Страница не найдена");
?>
<div class="page404">
	<img src="<?=TEMPLATE_PATH?>/img/404.svg" class="page404__image">
	<div class="page404__text">
		<div class="page404__title">Уупс...<br>страница не найдена</div>
		<a href="/" class="page404__button button button_oragne">вернуться на главную</a>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>