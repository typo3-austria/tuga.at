<?php

namespace GeorgRinger\References\Xclass;

class Facet extends \ApacheSolrForTypo3\Solr\Facet\Facet {

    /**
     * Determines if a facet has any options.
     *
     * @return boolean TRUE if no facet options are given, FALSE if facet options are given
     */
    public function isEmpty()
    {
        $isEmpty = false;
        $options = $this->getOptionsRaw();
        $optionsCount = count($options);

        // facet options include '_empty_', if no options are given
        if ($optionsCount == 0
            || ($optionsCount == 1 && array_key_exists('_empty_', $options))
            // XCLASS BEGIN
            || $optionsCount === 1
            // XCLASS END
        ) {
            $isEmpty = true;
        }

        return $isEmpty;
    }
}