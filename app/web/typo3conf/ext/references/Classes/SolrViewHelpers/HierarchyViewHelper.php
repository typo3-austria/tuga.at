<?php

namespace GeorgRinger\References\SolrViewHelpers;

use ApacheSolrForTypo3\Solr\ViewHelper\ViewHelper;

class HierarchyViewHelper implements ViewHelper
{
    public function __construct(array $arguments = array())
    {
    }

    public function execute(array $arguments = array())
    {
        return $this->run($arguments[0]);
    }

    public function run($field)
    {
        $out = '';
        $field = unserialize($field);
        $data = $field['category_stringM'];
        if (empty($data)) {
            return $out;
        }
        if (is_string($data)) {
            $data = [$data];
        }
        $temporaryContent = [];
        $count = 0;
        foreach ($data as $item) {
            $pos = strpos($item, '-');
            if ((int)substr($item, 0, $pos) === 0) {
                $count++;
            }
            $item = substr($item, 2);
            $temporaryContent[$count] = $item;
        }

        $out = $this->modifyResult($temporaryContent);

        return $out;
    }

    protected function modifyResult(array $result)
    {
        $final = [];
        foreach ($result as $item) {
            $pieces = explode('/', $item);
            $tmp = [];
            foreach ($pieces as $k => $piece) {
                $tmp[] = '<li>' . htmlspecialchars($piece) . '</li>';
            }
            $final[] = '<ol class="breadcrumb">' . implode(LF, $tmp) . '</ol>';
        }

        $out = implode(LF, $final);
        return $out;
    }

}