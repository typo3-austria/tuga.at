<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function () {

    // Add theme's general PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'theme',
        'Configuration/TSConfig/PageGeneral.tsc',
        'EXT:theme :: General PageTSConfig'
    );

    // Add "Only X" PageTSConfig
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'theme',
        'Configuration/TSConfig/Single/OnlyFeUsers.tsc',
        'EXT:theme :: Restrict pages to FeUsers/FeGroups'
    );

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

});
