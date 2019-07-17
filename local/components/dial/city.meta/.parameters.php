<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();


$arComponentParameters = [
    'GROUPS' => [
        "BASE" => [
            "NAME" => 'Основные настройки'
        ],
    ],
    'PARAMETERS' => [
        'ADDITIONAL_CITY' => [
            'PARENT' => 'BASE',
            'NAME' => 'Доп города для вывода (для которых нет сайта)',
            'TYPE' => 'STRING',
            'MULTIPLE' => 'Y',
            'DEFAULT' => '',
            'REFRESH' => 'N',
        ]
    ]
];