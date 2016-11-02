<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'GeorgRinger.' . $_EXTKEY,
    'Reference',
    array(
        'Reference' => 'show',

    ),
    // non-cacheable actions
    array(
        'Reference' => '',

    )
);


$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['solr']['IndexQueueIndexer']['preAddModifyDocuments'][]
    = \GeorgRinger\References\Hooks\Solr\ReferenceIndexModifier::class;

$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['solr']['PiResults']['addViewHelpers'][] =
    \GeorgRinger\References\SolrViewHelpers\Provider::class;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][\ApacheSolrForTypo3\Solr\Facet\Facet::class] = array(
    'className' => \GeorgRinger\References\Xclass\Facet::class,
);
