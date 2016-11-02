<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference',
        'label' => 'name',
        'label_alt' => 'finished',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'name,uri,teaser,description,media,county,staff_count,turnover,year,responsive,logo,multilingual,agency,special,finished',
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('references') . 'Resources/Public/Icons/tx_references_domain_model_reference.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden, name, uri, teaser, description, media, county, staff_count, turnover, year, responsive, logo, multilingual, agency',
    ],
    'types' => [
        '1' => ['showitem' => 'name, uri,--palette--;;paletteMain,teaser, --palette--;;paletteMaintance,description, media, hidden,staff_count, turnover, year, responsive, logo, multilingual, , '],
    ],
    'palettes' => [
        'paletteMain' => ['showitem' => 'agency,county'],
        'paletteMaintance' => ['showitem' => 'special,finished'],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
            ],
        ],

        'name' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'uri' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.uri',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'placeholder' => 'http://'
            ],
        ],
        'teaser' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.teaser',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 2,
                'eval' => 'trim'
            ]
        ],
        'description' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim'
            ]
        ],
        'media' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.media',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'media',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'county' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.county',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.1', 1],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.2', 2],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.3', 3],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.4', 4],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.5', 5],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.6', 6],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.7', 7],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.8', 8],
                    ['LLL:EXT:references/Resources/Private/Language/locallang.xlf:tx_references_domain_model_reference.county.9', 9]
                ],
                'size' => 1,
                'maxitems' => 1,
                'eval' => ''
            ],
        ],
        'staff_count' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.staff_count',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'turnover' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.turnover',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'year' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.year',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'responsive' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.responsive',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
        'logo' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.logo',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'logo',
                [
                    'appearance' => [
                        'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
                    ],
                    'foreign_types' => [
                        '0' => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_TEXT => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_AUDIO => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_VIDEO => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\File::FILETYPE_APPLICATION => [
                            'showitem' => '
							--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
							--palette--;;filePalette'
                        ]
                    ],
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
        'multilingual' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.multilingual',
            'config' => [
                'type' => 'check',
                'default' => 0
            ]
        ],
        'agency' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.agency',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'foreign_table' => 'tx_references_domain_model_agency',
                'minitems' => 0,
                'maxitems' => 1,
                'items' => [
                    ['-- Label --', 0],
                ],
            ],
        ],
        'special' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.special',
            'config' => [
                'type' => 'check',
            ],
        ],
        'finished' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:references/Resources/Private/Language/locallang_db.xlf:tx_references_domain_model_reference.finished',
            'config' => [
                'type' => 'check',
            ],
        ],

    ],
];