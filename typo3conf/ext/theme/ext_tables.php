<?php

defined('TYPO3_MODE') || die('Access denied.');

if (TYPO3_MODE === 'BE') {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_theme_session');
}
