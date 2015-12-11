<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {

        $pathSegment = 'Configuration/TSConfig/Page/'; // @TODO Fix tsc include in DB for PageGeneral after refactoring file/folder structure
        $fileExt = '.tsc';
        $labelPrefix = 'EXT:theme :: ';

        // register elements (filename without extension, label without prefix)
        $elements = [
            'PageGeneral' => 'General PageTSConfig',
            'Single/OnlyFeUsers' => 'Restrict page(s) to FeUsers/FeGroups',
            'Single/OnlyNews' => 'Restrict page(s) to News/SysCategories/SysNote',
            'Single/HideTableTtContent' => 'Hide table TtContent',
        ];

        // register all $elements as PageTSConfig file
        foreach ($elements as $fileName => $label) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
                $extKey,
                $pathSegment . $fileName . $fileExt,
                $labelPrefix . $label
            );
        }

        // Add ext:realurl tca palette to pagetype "Link to External URL"
        if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('realurl', true)) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
                'pages',
                'tx_realurl_pathsegment;;137;;,tx_realurl_exclude',
                '3',
                'after:nav_title'
            );
        }

        // Add pagetree icons
        // @TODO Isn't actually shown in backend pagetree (only in page properties)
        $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
            0 => 'LLL:EXT:theme/Resources/Private/Language/BackendGeneral.xlf:icon.pagetree.sup7even',
            1 => 'sup7even',
            2 => 'apps-pagetree-page-supseven'
        ];


        $additionalFields = [
            'meetup_time' => [
                'label' => 'LLL:EXT:theme/Resources/Private/Language/BackendGeneral.xlf:pages.meetup_time',
                'config' => [
                    'type' => 'input',
                    'eval' => 'datetime'
                ]
            ],
            'meetup_link' => [
                'label' => 'LLL:EXT:theme/Resources/Private/Language/BackendGeneral.xlf:pages.meetup_link',
                'config' => [
                    'type' => 'input',
                ]
            ],
        ];

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $additionalFields);
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', 'meetup_time,meetup_link');

    },
    'theme'
);
