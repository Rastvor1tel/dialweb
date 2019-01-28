<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if ($this->StartResultCache(86400))
{
	if (defined('BX_COMP_MANAGED_CACHE') && is_object($GLOBALS['CACHE_MANAGER']))
		$GLOBALS['CACHE_MANAGER']->RegisterTag('iblock_id_5');

	CModule::IncludeModule("iblock");
	$props = CIBlockElement::GetProperty(5, $arParams["ELEMENT_ID"]);
	while ($prop = $props->GetNext()) {
		$arResult["ITEMS"][] = CFile::GetFileArray($prop["VALUE"]);
	}

	$this->IncludeComponentTemplate();
}