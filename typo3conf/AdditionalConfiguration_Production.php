<?php
defined('TYPO3_MODE') || die('Access denied.');

// Override configuration of LocalConfiguration
$customChanges = [
    'BE' => [
        'debug' => false,
        'warning_email_addr' => '',
        'installToolPassword' => '$P$CfbWYC131wKhZW8xrdAM.uzHVA8CBt',
        'warning_mode' => '',
        'adminOnly' => 0,
    ],
    'FE' => [
        'debug' => false,
    ],
    'SYS' => [
        'displayErrors' => false,
        'enableDeprecationLog' => '',
        'sqlDebug' => 0,
        'systemLogLevel' => 0,
        'clearCacheSystem' => true,
    ],
    'LOG' => [
        'writerConfiguration' => [
            \TYPO3\CMS\Core\Log\LogLevel::DEBUG => [
                'TYPO3\\CMS\\Core\\Log\\Writer\\NullWriter' => []
            ]
        ],
        'deprecated' => [
            'writerConfiguration' => [
                \TYPO3\CMS\Core\Log\LogLevel::WARNING => [
                    'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => [
                        'logFile' => 'typo3conf/deprecation.log'
                    ]
                ]
            ]
        ]
    ]
];

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $customChanges);

if (extension_loaded('apc')) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_rootline']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_datamapfactory_datamap']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_object']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_tablecolumns']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n']['backend'] =
        'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcBackend';
}
