<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {
        $settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extKey]);
        if ($settings['setPageTSconfig']) {
            ExtensionManagementUtility::registerPageTSConfigFile(
                $extKey,
                'Configuration/TSConfig/Page/TSConfig.tsc',
                'EXT:ccontent :: Custom CE Provider'
            );
        }
    },
    'ccontent'
);
