<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Application;
use Bitrix\Main\Type\DateTime;
$request = Application::getInstance()->getContext()->getRequest();
$mode = trim($request->getPost("mode"));
$name = trim($request->getPost("person_name"));
$person_id = trim($request->getPost("person_id"));
$person_name = '';
$section_id = false;
$fio = $request->getPost("fio");
$rating = $request->getPost("rating");
$phone = $request->getPost("phone");
$comment = $request->getPost("comment");
$company = $request->getPost("company");
CModule::IncludeModule("iblock");

if ($mode == 'add') {
	if ($person_id > 0) {
		$bxPerson = \Bitrix\Iblock\ElementTable::getList(array(
			'select' => array("NAME", "PREVIEW_PICTURE"),
			'filter' => array(
				'ID' => $person_id,
				'IBLOCK_ID' => $arParams['PERSONS_IBLOCK_ID']
			)
		));

		if ($person = $bxPerson->fetch()) {
			$person_name = $person['NAME'];
			$person_image = CFile::MakeFileArray($person['PREVIEW_PICTURE']);

			$section_obj = new CIBlockSection();
			$arFilter = array(
				'IBLOCK_ID' => $arParams['GRADES_IBLOCK_ID'],				
				'XML_ID' => trim($person_id)
			);

			$bxSection = $section_obj->GetList(
				array('SORT'=>'ASC'),
				$arFilter,
				false,
				array('ID', 'NAME', 'XML_ID', 'UF_RATING', 'UF_TOTAL')
			);
			$arFilter["ACTIVE"] = 'N';
			$arFilter["PICTURE"] = $person_image;

			if ($section = $bxSection->GetNext()) {
				$cur_rait = $section['UF_RATING'];
				$cur_total = $section['UF_TOTAL'];
				$new_total = $cur_total + 1;
				$new_rating = (($cur_rait * $cur_total) + $rating) / $new_total;
				$new_rating = round($new_rating, 1);
				$arFilter['UF_RATING'] = $new_rating;
				$arFilter['UF_TOTAL'] = $new_total;
				$section_id = $section['ID'];

				$section_obj->Update($section_id, $arFilter);
			} else {
				$arFilter['NAME'] = $person_name.'-'.$person_id;
				$arFilter['UF_RATING'] = $rating;
				$arFilter['UF_TOTAL'] = 1;
				$arFilter['SORT'] = 500;
				$section_id = $section_obj->Add($arFilter);
			}
		}
	} else if ($name != '') {
		$person_name = $name;
	}



	$propsList = array(
		"0" => array(
			"NAME" => "Рейтинг",
			"CODE" => "RATING",
			"TYPE" => "N"
		),
		"1" => array(
			"NAME" => "Телефон",
			"CODE" => "PHONE",
			"TYPE" => "S"
		),
		"2" => array(
			"NAME" => "Компания",
			"CODE" => "COMPANY",
			"TYPE" => "S"
		),
	);
	
	foreach ($propsList as $prop) {
		$dbProperties = CIBlockProperty::GetList(
			array(),
			array(
				"IBLOCK_ID" => $arParams['GRADES_IBLOCK_ID'],
				"CODE" => $prop['CODE']
			)
		);
		if ($dbProperties->SelectedRowsCount() <= 0) {
			$arFields = Array(
				"NAME" => $prop['NAME'],
				"ACTIVE" => "Y",
				"SORT" => 100,
				"CODE" => $prop['CODE'],
				"FILTRABLE" => "Y",
				"IBLOCK_ID" => $arParams['GRADES_IBLOCK_ID'],
				"PROPERTY_TYPE" => $prop['TYPE'],
			);
			$ibp = new CIBlockProperty;
			if (!$ibp->Add($arFields)) {
				$result['errors'][] = 'Ошибка: '.$ibp->LAST_ERROR;
			}
		}
	}
	$PROP = array();
	$PROP['PHONE'] = $phone;
	$PROP['RATING'] = $rating;
	$PROP['COMPANY'] = $company;
	$PROP['NAME'] = $fio;

	$el = new CIBlockElement();
	$field = array(
		"MODIFIED_BY" => 1,
		"IBLOCK_SECTION" => $section_id,
		"IBLOCK_ID" => $arParams['GRADES_IBLOCK_ID'],
		"NAME" => $person_name . ' ' . date('d.m.Y H:i'),
		"ACTIVE" => "N",
		"PREVIEW_TEXT" => $comment,
		'PROPERTY_VALUES' => $PROP,
	);
	if(!$el->Add($field)) {
		$result['result'] = 'error';
		$result['message'] = 'Ошибка: '.$el->LAST_ERROR;
	} else {
		$result['result'] = 'success';
		$result['message'] = '';
	}

	$arFields = array(
		'NAME' => $person_name,
		'RATING' => $rating,
		'FIO' => $fio,
		'PHONE' => $phone,
		'COMPANY' => $company,
		'COMMENT' => $comment
	);

	CEvent::Send("NEW_GRADE", "s1", $arFields, "N");
	$APPLICATION->RestartBuffer();
	echo json_encode($result, JSON_UNESCAPED_UNICODE);
	die;
} else {
	$person_id = trim($request->getQuery("id"));
	if ($person_id > 0) {
		$bxPerson = \Bitrix\Iblock\ElementTable::getList(array(
			'select' => array("NAME"),
			'filter' => array(
				'ID' => $person_id,
				'IBLOCK_ID' => $arParams['PERSONS_IBLOCK_ID']
			)
		));

		if ($person = $bxPerson->fetch()) {
			$arResult['PERSON_NAME'] = $person['NAME'];
		} else {
			$arResult['PERSON_NAME'] = '';
		}
	}else {
		$arResult['PERSON_NAME'] = '';
	}
	$this->IncludeComponentTemplate();
}





