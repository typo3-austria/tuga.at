<?php
defined('TYPO3_MODE') || die('Access denied.');

// Override configuration of LocalConfiguration
$customChanges = [
    'DB' => [
        'database' => getenv('MYSQL_DATABASE'),
        'host' => 'mysql',
        'password' => getenv('MYSQL_PASSWORD'),
        'port' => 3306,
        'socket' => '',
        'username' => getenv('MYSQL_USER'),
    ]
];

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $customChanges);
