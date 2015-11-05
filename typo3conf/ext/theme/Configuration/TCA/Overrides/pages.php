<?php

defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'theme',
    'Configuration/TSConfig/PageGeneral.tsc',
    'EXT:theme :: General PageTSConfig'
);

// Adds ext:realurl tca palette to pagetype "Link to External URL"
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
