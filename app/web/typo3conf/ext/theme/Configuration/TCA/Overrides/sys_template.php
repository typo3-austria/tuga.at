<?php
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3_MODE') || die ('Access denied.');

/*
Remove this file if you include the TypoScript in the template fields manually.
Use this syntax for inclusion:

<INCLUDE_TYPOSCRIPT: source="DIR:EXT:theme/Configuration/TypoScript/Constants/" extensions="ts">
<INCLUDE_TYPOSCRIPT: source="DIR:EXT:theme/Configuration/TypoScript/Setup/" extensions="ts">

*/

// Embed static TypoScript template(s)
$websites = array('Base', 'Tree01');
foreach($websites as $website) {
    ExtensionManagementUtility::addStaticFile(
        // @TODO make theme available via call_user_function
        'theme',
        'Configuration/TypoScript/Tree/' . $website,
        'Thm TS:' . $website
    );
}
