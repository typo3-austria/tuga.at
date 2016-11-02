<?php
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3_MODE') || die('Access denied.');

// get complete context
$context = GeneralUtility::getApplicationContext()->__toString();

// alternative: set $context (please keep in mind that you also have to set the correct context for cli tasks)
//$context = 'Development/Production';

// check for "Production/Live/Server123" etc
if ($context) {
    list($contextMainPart, $contextSubPart1, $contextSubPart2) = explode('/', $context);
}

    // project specific configuration
$customChanges = [
    'BE' => [
        'sessionTimeout' => 3600*2,
        'versionNumberInFilename' => 1,
        'compressionLevel' => 9,
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'de',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => serialize([
                'loginLogo' => 'EXT:theme/Resources/Public/Images/tuga.svg',
                'loginHighlightColor' => '#000000',
                'loginBackgroundImage' => 'EXT:theme/Resources/Public/Images/BackendLogin.png',
            ]),
            'ccontent' => serialize([
                'setPageTSconfig' => 1,
            ]),
            'fluid_styled_content' => serialize([
                'loadContentElementWizardTsConfig' => 1,
            ]),
            'lfeditor' => serialize([
                'viewLanguages' => 'de',
                'defaultLanguage' => '',
                'extIgnore' => '/^(CVS|.svn|.git|csh_)/',
                'changeXlfDate' => 1,
            ]),
            'realurl' => serialize([
                'configFile' => 'typo3conf/ext/theme/Resources/Private/Extension/Realurl/ManualConfiguration.php',
                'enableAutoConf' => 1,
                'enableDevLog' => 0,
                'enableChashUrlDebug' => 0,
            ]),
            'rtehtmlarea' => serialize([
                'defaultConfiguration' => 'Typical (Most commonly used features are enabled. Select this option if you are unsure which one to use.)',
                'enableImages' => 0,
                'enableInlineElements' => 0,
                'allowStyleAttribute' => 0,
                'enableAccessibilityIcons' => 0,
                'forceCommandMode' => 0,
                'noSpellCheckLanguages' => 'ja,km,ko,lo,th,zh,b5,gb',
                'AspellDirectory' => '/usr/bin/aspell',
            ]),
            'scheduler' => serialize([
                'maxLifetime' => 1440,
                'enableBELog' => 1,
                'showSampleTasks' => 1,
                'useAtDaemon' => 0,
            ]),
            'static_info_tables' => serialize([
                'enableManager' => 0
            ]),
            't3monitoring_client' => serialize([
                'secret' => 'lKACblGIFho13XnqVDYa270BmrknleCSOKcLrY2',
                'allowedIps' => '2a03:2a00:1100:2::ac10:29bc,172.17.0.1,188.94.251.75',
                'enableDebugForErrors' => 0,
            ]),
        ]
    ],
    'FE' => [
        'disableNoCacheParameter' => true,
        'hidePagesIfNotTranslatedByDefault' => true,
        'pageNotFound_handling' => '/404/',
        'compressionLevel' => 9,
    ],
    'GFX' => [
        'jpg_quality' => 80,
    ],
    'SYS' => [
        'sitename' => 'TYPO3 Usergroup Austria' . ' [' . $context . ']',
        'curlUse' => true,
        'devIPmask' => '',
        'textfile_ext' => $GLOBALS['TYPO3_CONF_VARS']['SYS']['textfile_ext'] . ',setupts,constantsts,ts1,tsc',
        'UTF8filesystem' => true,
        'systemLocale' => 'de_DE.utf8',
        'defaultCategorizedTables' => '',
        'clearCacheSystem' => true,
        't3lib_cs_convMethod' => 'mbstring',
        't3lib_cs_utils' => 'mbstring',
    ],
    'MAIL' => [
        'defaultMailFromAddress' => '',
        'defaultMailFromName' => '',
    ],
];

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], (array)$customChanges);

/*
 * include the most general file e.g. "AdditionalConfiguration_Staging.php
 */
$file = realpath(__DIR__) . '/AdditionalConfiguration_' . $contextMainPart . '.php';
if (is_file($file)) {
    include_once($file);
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], (array)$customChanges);
}

/*
 * check for a more specific configuration as well e.g. "AdditionalConfiguration_Development_Profiling.php"
 */
$file = realpath(__DIR__) . '/AdditionalConfiguration_' . $contextMainPart . '_' . $contextSubPart1 . '.php';
if (is_file($file)) {
    include_once($file);
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], (array)$customChanges);
}

/*
 * check for a more specific configuration as well, e.g. "AdditionalConfiguration_Production_Live_Server4.php"
 */
$file = realpath(__DIR__) . '/AdditionalConfiguration_' . $contextMainPart . '_' . $contextSubPart1
    . '_' . $contextSubPart2 . '.php';
if (is_file($file)) {
    include_once($file);
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], (array)$customChanges);
}

/*
 * load custom configuration, that is not placed in git, e.g. for local development only changes
 */
if ($contextMainPart === 'Development') {
    $file = realpath(__DIR__) . '/AdditionalConfiguration_custom.php';
    if (is_file($file)) {
        include_once($file);
        $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], (array)$customChanges);
    }
}

/*
 * add composer autoloader
 */
$composerAutoloader = realpath(__DIR__ . '/../vendor/autoload.php');

if (!empty($composerAutoloader) && is_file($composerAutoloader)) {
    include_once($composerAutoloader);
}
