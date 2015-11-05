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
