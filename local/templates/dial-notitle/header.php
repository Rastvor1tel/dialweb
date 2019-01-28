<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
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
			<?$APPLICATION->IncludeComponent("bitrix:breadcrumb","")?>
			<div class="container-inner">
