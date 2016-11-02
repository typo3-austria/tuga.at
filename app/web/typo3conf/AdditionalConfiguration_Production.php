<?php
defined('TYPO3_MODE') || die('Access denied.');

// Override configuration of LocalConfiguration
$customChanges = [
    'BE' => [
        'debug' => false,
        'warning_email_addr' => '',
        'installToolPassword' => '$P$C5oh.h4l5.qXSmhU7zxmO.z.f8OulK0',
        'warning_mode' => '',
        'adminOnly' => 0,
        'versionNumberInFilename' => 0,
        'compressionLevel' => 0,
    ],
    'DB' => [
        'database' => getenv('TYPO3_DARABASE'),
        'host' => getenv('TYPO3_HOST'),
        'password' => getenv('TYPO3_PASSWORD'),
        'port' => 3306,
        'socket' => '',
        'username' => getenv('TYPO3_USER'),
    ],
    'FE' => [
        'debug' => false,
        'compressionLevel' => 0,
    ],
    'GFX' => [
        'colorspace' => 'sRGB',
        'im' => 1,
        'im_mask_temp_ext_gif' => 1,
        'im_path' => '/usr/bin/',
        'im_path_lzw' => '/usr/bin/',
        'im_v5effects' => 1,
        'im_version_5' => 'im6',
        'image_processing' => 1,
    ],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
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
