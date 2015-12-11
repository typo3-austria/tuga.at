<?php

namespace SUP7\Theme\Content;

use TYPO3\CMS\Core\Database\RelationHandler;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentDataProcessor;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

class SessionElementProcessor extends BaseProcessor implements DataProcessorInterface
{
    /**
     * @var ContentDataProcessor
     */
    protected $contentDataProcessor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contentDataProcessor = GeneralUtility::makeInstance(ContentDataProcessor::class);
    }

    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {

        $sessions = $this->getDatabaseConnection()->exec_SELECTgetRows(
            '*',
            'tx_theme_session',
            'deleted=0 AND hidden=0 AND reference=' . $processedData['data']['uid'],
            '',
            'sorting'
        );

        foreach ($sessions as &$session) {
            $session['speaker'] = $this->getDatabaseConnection()->exec_SELECTgetSingleRow('*', 'fe_users',
                'uid=' . $session['speaker']);
        }

        $processedData['sessions'] = $sessions;

        return $processedData;
    }
}