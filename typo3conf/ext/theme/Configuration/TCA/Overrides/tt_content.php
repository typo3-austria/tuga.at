<?php


$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:element.sectionHeader',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:element.session.title',
    'theme_sessions',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:element.location.title',
    'theme_location',
];

$tca = [
    'types' => [
        'theme_sessions' => [
            'showitem' => '
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
				header,tx_theme_sessions,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
			',
        ],
        'theme_location' => [
            'showitem' => '
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
				bodytext,location,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
			',
        ],
    ],
    'columns' => [
        'tx_theme_sessions' => [
            'label' => 'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:element.session.title',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_theme_session',
                'foreign_field' => 'reference',
//                'foreign_match_fields' => [
//                    'parent_table' => 'tt_content',
//                ],
                'appearance' => [
                    'useSortable' => true,
                    'showSynchronizationLink' => true,
                    'showAllLocalizationLink' => true,
                    'showPossibleLocalizationRecords' => true,
                    'showRemovedLocalizationRecords' => false,
                    'expandSingle' => true,
                    'enabledControls' => [
                        'localize' => true,
                    ],
                ],
                'behaviour' => [
                    'localizationMode' => 'select',
                    'mode' => 'select',
                    'localizeChildrenAtParentLocalization' => true,
                ],
            ],
        ],
        'location' => [
            'label' => 'LLL:EXT:theme/Resources/Private/Language/Elements.xlf:tt_content.location',
            'config' => [
                'type' => 'input',
            ],
        ],

    ]
];
$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

