<?php

namespace GeorgRinger\References\Hooks\Solr;

use Apache_Solr_Document;
use ApacheSolrForTypo3\Solr\IndexQueue\Item;
use ApacheSolrForTypo3\Solr\IndexQueue\PageIndexerDocumentsModifier;
use TYPO3\CMS\Core\Database\DatabaseConnection;

class ReferenceIndexModifier implements PageIndexerDocumentsModifier
{
    /**
     * @param Item $item
     * @param int $language
     * @param Apache_Solr_Document[] $documents
     * @return Apache_Solr_Document[]|array
     */
    public function modifyDocuments(Item $item, $language, array $documents)
    {
        if ($item->getType() === 'tx_references_domain_model_reference') {
            $record = $item->getRecord();
            foreach ($documents as $k => $document) {
                $documents[$k]->__set('category_stringM', $this->getRootline($record['uid']));
            }
        }
        return $documents;
    }

    protected function getRootline($id)
    {
        $tree = [];
        $rows = $this->getDb()->exec_SELECTgetRows('uid_local', 'sys_category_record_mm', 'tablenames="tx_references_domain_model_reference" AND uid_foreign=' . (int)$id);
        foreach ($rows as $row) {
            $piece = $this->buildCategoryIdRootline($row['uid_local'], 'sys_category', true);
            $piece = $this->modifyTree($piece);
            $tree = array_merge($tree, $piece);
        }
        return $tree;
    }

    protected function modifyTree($rootline)
    {
        $hierarchy = $currentTreeParts = array();

        foreach ($rootline as $i => $part) {
            $currentTreeParts[] = $part;

            $hierarchy[] = $i . '-' . implode('/', $currentTreeParts);
        }

        return $hierarchy;
    }


    /**
     * @param int $uid
     * @param string $table
     * @param bool $includeLastCategory
     * @return array
     */
    protected function buildCategoryIdRootline($uid, $table, $includeLastCategory = false)
    {
        $rootline = array();
        $parentCategory = intval($uid);

        while ($parentCategory !== 0) {

            $row = $this->getDb()->exec_SELECTgetSingleRow(
                'uid,parent,title',
                $table,
                'deleted=0 AND hidden=0 AND uid = ' . intval($parentCategory)
            );
            if ($row === null) {
                $parentCategory = 0;
            } else {
                if ($includeLastCategory || (int)$uid !== (int)$row['uid']) {
                    $rootline[] = $row['title'];
                }
                $parentCategory = intval($row['parent']);
            }
        }
        krsort($rootline);

        return array_values($rootline);
    }

    /**
     * @return DatabaseConnection
     */
    protected function getDb()
    {
        return $GLOBALS['TYPO3_DB'];
    }

}