<?php
defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TCA']['fe_users']['ctrl']['label'] = 'last_name';
$GLOBALS['TCA']['fe_users']['ctrl']['label_alt'] = 'first_name';
$GLOBALS['TCA']['fe_users']['ctrl']['label_alt_force'] = true;