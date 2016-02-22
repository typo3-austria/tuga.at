<?php
namespace SUP7\Theme\Hooks;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use TYPO3\CMS\Backend\Controller\PageLayoutController;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Utility\DebugUtility;

/**
 * Hook for the page module
 *
 * @author GLATZ, Josef <jousch@gmail.com>
 */
class PageHook
{

    /**
     * Add additional content to the footer of the page module
     *
     * @param array $params
     * @param PageLayoutController $parentObject
     * @return string
     */
    public function render(array $params = array(), PageLayoutController $parentObject)
    {

        if ($parentObject->pageinfo['meetup_time'] || $parentObject->pageinfo['meetup_sponsor'] || $parentObject->pageinfo['meetup_link']) {
            $NecessaryFieldsFilled = 'f2dede';

            if ($parentObject->pageinfo['meetup_time'] && $parentObject->pageinfo['meetup_sponsor'] && $parentObject->pageinfo['meetup_link']) {
                $NecessaryFieldsFilled = 'dff0d8';
            }
            $footerContent = '<div class="panel panel-default" style="padding: 20px; background-color:#' . $NecessaryFieldsFilled . '">';
            $footerContent .= '    <h4>Page Infos</h4>';
            $footerContent .= '    <p><b>Meetup Date/Time:</b> ' . BackendUtility::datetime($parentObject->pageinfo['meetup_time']) . '</p>';
            $footerContent .= '    <p><b>Meetup Link:</b> ' . $parentObject->pageinfo['meetup_link'] . '</p>';
            $footerContent .= '    <p><b>Meetup Location Sponsor:</b> ' . $parentObject->pageinfo['meetup_sponsor'] . '</p>';

            return $footerContent .= '</div>';


        }
    }

}
