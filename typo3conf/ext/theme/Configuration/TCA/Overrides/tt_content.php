<?php

$frontendLanguageFilePrefix = 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:';


$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:element.sectionHeader',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:element.session.title',
    'theme_sessions',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:element.location.title',
    'theme_location',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:element.contactperson.title',
    'theme_contact_person',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:element.alert.title',
    'theme_alert',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:element.sponsorlogos.title',
    'theme_sponsorlogos',
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
        'theme_sponsorlogos' => [
            'showitem' => '
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
				--palette--;' . $frontendLanguageFilePrefix . 'palette.header;header,
				assets;Sponsor Logos,rowDescription,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
			',
        ],
        'theme_contact_person' => [
            'showitem' => '
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
				header,
				subheader,
				bodytext,
				rowDescription,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
			',
        ],
        'theme_alert' => [
            'showitem' => '
				--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
				header,
				bodytext,
				rowDescription,
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
            'label' => 'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:element.session.title',
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
            'label' => 'LLL:EXT:theme/Resources/Private/Language/locallang_Elements.xlf:tt_content.location',
            'config' => [
                'type' => 'input',
            ],
        ],

    ]
];
$GLOBALS['TCA']['tt_content'] = array_replace_recursive($GLOBALS['TCA']['tt_content'], $tca);

// enable RTE for bodytext in CType `theme_location`
$GLOBALS['TCA']['tt_content']['types']['theme_location']['columnsOverrides'] = ['bodytext' => ['defaultExtras' => 'richtext:rte_transform[mode=ts_css]']];
$GLOBALS['TCA']['tt_content']['types']['theme_contact_person']['columnsOverrides'] = $GLOBALS['TCA']['tt_content']['types']['theme_location']['columnsOverrides'];
$GLOBALS['TCA']['tt_content']['types']['theme_alert']['columnsOverrides'] = $GLOBALS['TCA']['tt_content']['types']['theme_location']['columnsOverrides'];
