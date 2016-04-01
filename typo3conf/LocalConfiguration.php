<?php
return [
    'BE' => [
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$P$Cyfkwcbi1BL/RxNwJK7ZJVCD9vQQLZ.',
        'loginSecurityLevel' => 'rsa',
    ],
    'EXT' => [
        'extConf' => [
            'autoloader' => 'a:0:{}',
            'ccontent' => 'a:1:{s:15:"setPageTSconfig";i:1;}',
            'filemetadata' => 'a:0:{}',
            'linkvalidator' => 'a:0:{}',
            'realurl' => 'a:4:{s:10:"configFile";s:79:"typo3conf/ext/theme/Resources/Private/Extension/Realurl/ManualConfiguration.php";s:14:"enableAutoConf";i:1;s:12:"enableDevLog";i:0;s:19:"enableChashUrlDebug";i:0;}',
            'recycler' => 'a:0:{}',
            'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
            'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
            'scheduler' => 'a:5:{s:11:"maxLifetime";i:1440;s:11:"enableBELog";i:1;s:15:"showSampleTasks";i:1;s:11:"useAtdaemon";s:1:"0";s:11:"useAtDaemon";i:0;}',
            'sourceopt' => 'a:0:{}',
            'static_info_tables' => 'a:1:{s:13:"enableManager";i:0;}',
            't3monitoring_client' => 'a:3:{s:6:"secret";s:39:"lKACblGIFho13XnqVDYa270BmrknleCSOKcLrY2";s:10:"allowedIps";s:52:"2a03:2a00:1100:2::ac10:29bc,172.17.0.1,188.94.251.75";s:20:"enableDebugForErrors";s:1:"0";}',
            'theme' => 'a:0:{}',
            'typo3_console' => 'a:0:{}',
            'vhs' => 'a:0:{}',
        ],
    ],
    'FE' => [
        'loginSecurityLevel' => 'rsa',
    ],
    'GFX' => [
        'jpg_quality' => '86',
    ],
    'INSTALL' => [
        'wizardDone' => [
            'TYPO3\CMS\Install\Updates\AccessRightParametersUpdate' => 1,
            'TYPO3\CMS\Install\Updates\BackendUserStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\Compatibility6ExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ContentTypesToTextMediaUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FileListIsStartModuleUpdate' => 1,
            'TYPO3\CMS\Install\Updates\FilesReplacePermissionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\LanguageIsoCodeUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MediaceExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\MigrateMediaToAssetsForTextMediaCe' => 1,
            'TYPO3\CMS\Install\Updates\MigrateShortcutUrlsAgainUpdate' => 1,
            'TYPO3\CMS\Install\Updates\OpenidExtractionUpdate' => 1,
            'TYPO3\CMS\Install\Updates\PageShortcutParentUpdate' => 1,
            'TYPO3\CMS\Install\Updates\ProcessedFileChecksumUpdate' => 1,
            'TYPO3\CMS\Install\Updates\TableFlexFormToTtContentFieldsUpdate' => 1,
            'TYPO3\CMS\Install\Updates\WorkspacesNotificationSettingsUpdate' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\DeprecatedRteProperties' => 1,
            'TYPO3\CMS\Rtehtmlarea\Hook\Install\RteAcronymButtonRenamedToAbbreviation' => 1,
        ],
    ],
    'MAIL' => [
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i ',
    ],
    'SYS' => [
        'caching' => [
            'cacheConfigurations' => [
                'autoloader' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\SimpleFileBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\PhpFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
                'extbase_object' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'frontend' => 'TYPO3\\CMS\\Core\\Cache\\Frontend\\VariableFrontend',
                    'groups' => [
                        'system',
                    ],
                    'options' => [
                        'defaultLifetime' => 0,
                    ],
                ],
            ],
        ],
        'clearCacheSystem' => true,
        'encryptionKey' => '8489b02673b2169d517485cf1538668e0ea7d1ecafec0fdcf4eb925a9f33f807c9c36f1f7fb988aee8ea41d4612f9d4b',
        'exceptionalErrors' => 28674,
        'isInitialDatabaseImportDone' => true,
        'isInitialInstallationInProgress' => false,
        'systemLogLevel' => 0,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
];
