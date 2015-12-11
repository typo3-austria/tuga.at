<?php
defined('TYPO3_MODE') || die('Access denied.');

// Override configuration of LocalConfiguration
$customChanges = [
    'DB' => [
        'database' => getenv('TYPO3_DARABASE'),
        'host' => getenv('TYPO3_HOST'),
        'password' => getenv('TYPO3_PASSWORD'),
        'port' => 3306,
        'socket' => '',
        'username' => getenv('TYPO3_USER'),
    ],
];

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $customChanges);
