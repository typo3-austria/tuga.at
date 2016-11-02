<?php
defined('TYPO3_MODE') || die('Access denied.');

// Override configuration of LocalConfiguration
$customChanges = [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$P$C8R5CmXAuzvklF.d5eGuTS7eQquuQN1',
        'sessionTimeout' => 3600*24*7,
    ],
    'FE' => [
        'debug' => true,
    ],
    'SYS' => [
        'curlUse' => true,
        'devIPmask' => '*',
        'displayErrors' => true,
        'enableDeprecationLog' => 'file',
        'sqlDebug' => 1,
        'systemLogLevel' => 0,
    ],
];

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $customChanges);

//if (extension_loaded('apc')) {
//	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_rootline']['backend'] =
//	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_datamapfactory_datamap']['backend'] =
//	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_object']['backend'] =
//	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_tablecolumns']['backend'] =
//	$GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n']['backend'] =
//		'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcBackend';
//}

// Automatic NullBackend for all caches in Development applicationContext
// see https://docs.typo3.org/typo3cms/CoreApiReference/CachingFramework/Configuration/Index.html?highlight=redisbackend#how-to-disable-specific-caches for more details
foreach ($GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'] as $cacheName => $cacheConfiguration) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations'][$cacheName]['backend'] = \TYPO3\CMS\Core\Cache\Backend\NullBackend::class;
}
