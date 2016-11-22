<?php
defined('TYPO3_MODE') || die('Access denied.');

// Override configuration of LocalConfiguration
$customChanges = [
    'DB' => [
        'database' => getenv('TYPO3_LIVE_DB'),
        'password' => getenv('TYPO3_LIVE_PW'),
        'username' => getenv('TYPO3_LIVE_USR'),
    ],
];

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $customChanges);
