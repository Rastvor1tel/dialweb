<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

CModule::IncludeModule("iblock");

$arCity[''] = 'Текущий город';

$res = CIblockElement::GetList(
    [],
    [
        'IBLOCK_ID' => 14,
        'ACTIVE' => 'Y'
    ],
    false,
    false,
    [
        'ID', 'NAME', 'CODE'
    ]);

while($el = $res->getNext()){
    $arCity[$el['CODE']] = $el['NAME'];
}

$arComponentParameters = [
    'GROUPS' => [
        "BASE" => [
            "NAME" => 'Основные настройки'
        ],
    ],
    'PARAMETERS' => [
        'FIELD' => [
            'PARENT' => 'BASE',
            'NAME' => 'Поле для вывода',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'DEFAULT' => '',
            'REFRESH' => 'N',
        ],
        'CLASS' => [
            'PARENT' => 'BASE',
            'NAME' => 'Класс для элемента при выводе',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'N',
            'DEFAULT' => '',
            'REFRESH' => 'N',
        ],
        'CITY_CODE' => [
            'PARENT' => 'BASE',
            'NAME' => 'Город вывода (если не задано, используется текущий город)',
            'TYPE' => 'LIST',
            'VALUES' => $arCity,
            'SIZE' => 5,
            'DEFAULT' => ''
        ]
    ]
];
