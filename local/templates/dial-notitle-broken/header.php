<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
/**
 * @var $APPLICATION CMain
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<?include($_SERVER["DOCUMENT_ROOT"].'/local/templates/dial/includes/_head.php');?>
</head>
<body>
	<?$APPLICATION->ShowPanel();?>
	<header class="header">
		<?include($_SERVER["DOCUMENT_ROOT"].'/local/templates/dial/includes/_header.php');?>
	</header>
	<main class="main _inner">
		<div class="container-outer">
            <?if($APPLICATION->GetDirProperty("HIDE_BREADCRUMB") !== "Y"):?>
			    <?$APPLICATION->IncludeComponent("bitrix:breadcrumb","")?>
            <?endif;?>
			<div class="container-inner">
