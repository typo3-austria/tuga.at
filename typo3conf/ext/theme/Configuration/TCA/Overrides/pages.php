<?php

defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'theme',
    'Configuration/TSConfig/PageGeneral.tsc',
    'EXT:theme :: General PageTSConfig'
);
