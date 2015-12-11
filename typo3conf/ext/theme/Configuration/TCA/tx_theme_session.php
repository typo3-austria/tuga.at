<?php
return [
    'ctrl' => [
        'label' => 'title',
        'label_alt' => 'speaker',
        'label_alt_force' => true,
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:tx_theme_session',
        'delete' => 'deleted',
        'hideAtCopy' => true,
        'hideTable' => false,
        'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => 'EXT:theme/ext_icon.svg'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,reference,title,speaker
        ',
    ],
    'types' => [
        '1' => [
            'showitem' => 'hidden,reference,title,description,speaker,link,'
        ],
    ],
    'columns' => [
        'reference' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:theme/Resources/Private/Language/Backend.xlf:tab_item.tt_content',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tt_content',
                'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.CType="theme_tab"',
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0'
                    ]
                ]
            ]
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:tx_theme_session.title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim,required'
            ],
        ],
        'speaker' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:tx_theme_session.speaker',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'fe_users',
                'foreign_table_where' => '',
            ],
        ],
        'link' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:tx_theme_session.link',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim'
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:tx_theme_session.description',
            'config' => [
                'type' => 'text',
            ],
        ],
    ],
];
