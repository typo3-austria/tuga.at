<?php

defined('TYPO3_MODE') || die('Access denied.');

// Add/register icons
if (TYPO3_MODE === 'BE')
{
    /** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'apps-pagetree-page-supseven',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:theme/Resources/Public/Images/Icons/sup7even.svg']
    );
}
