<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}
// Override configuration of LocalConfiguration
$customChanges = array(
    'BE' => array(
        'debug' => FALSE,
        'warning_email_addr' => '',
        'warning_mode' => '',
        'adminOnly' => 0,                                // <p>Integer (-1, 0, 1, 2)</p><dl><dt>-1</dt><dd>total shutdown for maintenance purposes</dd><dt>0</dt><dd>normal operation, everyone can login (default)</dd><dt>1</dt><dd>only admins can login</dd><dt>2</dt><dd>only admins and regular CLI users can login</dd></dl>
    ),
    'FE' => array(
        'debug' => FALSE,
    ),
    'SYS' => array(
        'displayErrors' => FALSE,
        'enableDeprecationLog' => '',
        'sqlDebug' => 0,
        'systemLogLevel' => 0,
        'clearCacheSystem' => TRUE,
    ),
    'LOG' => array(
        'writerConfiguration' => array(
            \TYPO3\CMS\Core\Log\LogLevel::DEBUG => array(
                'TYPO3\\CMS\\Core\\Log\\Writer\\NullWriter' => array()
            )
        ),
        'deprecated' => array(
            'writerConfiguration' => array(
                \TYPO3\CMS\Core\Log\LogLevel::WARNING => array(
                    'TYPO3\\CMS\\Core\\Log\\Writer\\FileWriter' => array(
                        'logFile' => 'typo3conf/deprecation.log'
                    )
                )
            )
        )
    )
);

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $customChanges);

if (extension_loaded('apc')) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['cache_rootline']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_datamapfactory_datamap']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_object']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['extbase_typo3dbbackend_tablecolumns']['backend'] =
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['caching']['cacheConfigurations']['t3lib_l10n']['backend'] =
        'TYPO3\\CMS\\Core\\Cache\\Backend\\ApcBackend';
}
