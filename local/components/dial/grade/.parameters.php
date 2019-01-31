<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arCurrentValues */
use Bitrix\Main\Loader;
use Bitrix\Iblock;
use Bitrix\Currency;

if (!Loader::includeModule('iblock'))
	return;
$catalogIncluded = Loader::includeModule('catalog');

$arIBlockType = CIBlockParameters::GetIBlockTypes();
$arIBlockType2 = CIBlockParameters::GetIBlockTypes();

$arIBlock = array();
$iblockFilter = (
	!empty($arCurrentValues['PERSONS_IBLOCK_TYPE'])
	? array('TYPE' => $arCurrentValues['PERSONS_IBLOCK_TYPE'], 'ACTIVE' => 'Y')
	: array('ACTIVE' => 'Y')
);
$rsIBlock = CIBlock::GetList(array('SORT' => 'ASC'), $iblockFilter);
while ($arr = $rsIBlock->Fetch()) {
	$arIBlock[$arr['ID']] = '[' . $arr['ID'] . '] ' . $arr['NAME'];
}
unset($arr, $rsIBlock, $iblockFilter);

$iblockFilter2 = (
!empty($arCurrentValues['GRADES_IBLOCK_TYPE'])
	? array('TYPE' => $arCurrentValues['GRADES_IBLOCK_TYPE'], 'ACTIVE' => 'Y')
	: array('ACTIVE' => 'Y')
);
$rsIBlock2 = CIBlock::GetList(array('SORT' => 'ASC'), $iblockFilter2);
while ($arr = $rsIBlock2->Fetch()) {
	$arIBlock2[$arr['ID']] = '[' . $arr['ID'] . '] ' . $arr['NAME'];
}
unset($arr, $rsIBlock2, $iblockFilter2);


$arComponentParameters = array(
	"GROUPS" => array(
		"PERSONS" => array(
			"NAME" => 'Выберите инфоблок с сотрудниками'
		),
		"GRADES" => array(
			"NAME" => 'Выберите инфоблок с оценками'
		),
	),
	"PARAMETERS" => array(
		"PERSONS_IBLOCK_TYPE" => array(
			"PARENT" => "PERSONS",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType,
			"REFRESH" => "Y",
		),
		"PERSONS_IBLOCK_ID" => array(
			"PARENT" => "PERSONS",
			"NAME" => GetMessage("IBLOCK_IBLOCK"),
			"TYPE" => "LIST",
			"ADDITIONAL_VALUES" => "Y",
			"VALUES" => $arIBlock,
			"REFRESH" => "Y",
		),
		"GRADES_IBLOCK_TYPE" => array(
			"PARENT" => "GRADES",
			"NAME" => GetMessage("IBLOCK_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlockType2,
			"REFRESH" => "Y",
		),
		"GRADES_IBLOCK_ID" => array(
			"PARENT" => "GRADES",
			"NAME" => GetMessage("IBLOCK_IBLOCK"),
			"TYPE" => "LIST",
			"ADDITIONAL_VALUES" => "Y",
			"VALUES" => $arIBlock2,
			"REFRESH" => "Y",
		),
	),
);

