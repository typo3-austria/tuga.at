<?php

namespace GeorgRinger\References\SolrViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;

class Provider implements \ApacheSolrForTypo3\Solr\ViewHelper\ViewHelperProvider
{

    public function getViewHelpers()
    {
        return array(
            'HIERARCHY' => GeneralUtility::makeInstance(HierarchyViewHelper::class),
        );
    }
}