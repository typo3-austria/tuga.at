<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die('Access denied.');

// @todo localize regiserPageTSConfigFile 3rd parameter (when core feature is available)
call_user_func(
    function ($extKey) {
        $settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$extKey]);
        if (empty($settings['setPageTSconfig'])) {
            ExtensionManagementUtility::registerPageTSConfigFile(
                $extKey,
                'Configuration/TSConfig/Page/TSConfig.tsc',
                'Custom CE Provider'
            );
        }
    },
    'ccontent'
);
