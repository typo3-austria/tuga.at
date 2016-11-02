<?php

defined('TYPO3_MODE') || die('Access denied.');


// Add fields to rootLineFields
$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= '';

// Hook for adding realurl custom configuration
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration'][$extKey] =
    'SUP7\\Theme\\Hooks\\RealUrlAutoConfiguration->addThmConfig';

// Disable ext:news realurl hook
unset($GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['news']);

// Hook into the page module
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/db_layout.php']['drawFooterHook'][$_EXTKEY] = 'SUP7\\Theme\\Hooks\\PageHook->render';
