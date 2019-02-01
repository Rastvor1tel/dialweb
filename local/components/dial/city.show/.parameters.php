<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

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
        ]
    ]
];