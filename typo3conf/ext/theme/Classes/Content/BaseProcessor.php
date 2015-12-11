<?php

namespace SUP7\Theme\Content;

use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class BaseProcessor
{

    /**
     * @param array $array
     * @param string $field
     * @param string $sheet
     * @return mixed
     */
    protected function getXmlValue(array $array, $field, $sheet = 'sDEF')
    {
        return $array['data'][$sheet]['lDEF'][$field]['vDEF'];
    }

    /**
     * @param string $table
     * @param string $field
     * @param int $id
     * @return array
     */
    protected function getMedia($table, $field, $id)
    {
        /** @var FileRepository $fileRepository */
        $fileRepository = GeneralUtility::makeInstance(FileRepository::class);
        return $fileRepository->findByRelation($table, $field, $id);
    }

    /**
     * @return \TYPO3\CMS\Core\Database\DatabaseConnection
     */
    protected function getDatabaseConnection()
    {
        return $GLOBALS['TYPO3_DB'];
    }
}