<?php

$domainToRootIdMapping = array(
    'www.example.com' => 1,
);

$domainAliases = array(
    'alias.example.com' => 'www.example.com'
);

$languageIdMapping = array(
    'de' => 1,
);

$rssFeedPageType = 9818;

$pids = array(
    'newsDetailPage' => 123,
    'loginPage' => 123,
);

$config = array(
    'init' => array(
        'enableCHashCache' => true,
        'appendMissingSlash' => 'ifNotFile,redirect',
        'adminJumpToBackend' => true,
        'enableUrlDecodeCache' => true,
        'enableUrlEncodeCache' => true,
        'emptyUrlReturnValue' => '/',
    ),
    'pagePath' => array(
        'type' => 'user',
        'userFunc' => 'Tx\\Realurl\\UriGeneratorAndResolver->main',
        'spaceCharacter' => '-',
        'languageGetVar' => 'L',
        'rootpage_id' => 0, // will be defined per domain
        'expireDays' => 3,
    ),
    'fileName' => array(
        'defaultToHTMLsuffixOnPrev' => 0,
        'acceptHTMLsuffix' => 1,
        'index' => array(
            'feed.rss' => array(
                'keyValues' => array(
                    'type' => $rssFeedPageType,
                )
            )
        )
    ),
    'preVars' => array(
        array(
            'GETvar' => 'no_cache',
            'valueMap' => array(
                'no_cache' => 1
            ),
            'noMatch' => 'bypass',
        ),
        array(
            'GETvar' => 'L',
            'valueMap' => $languageIdMapping,
            'noMatch' => 'bypass',
        ),
    ),
    'fixedPostVars' => array(
        'newsDetailConfiguration' => array(
            array(
                'GETvar' => 'tx_news_pi1[action]',
                'valueMap' => array(
                    'detail' => '',
                ),
                'noMatch' => 'bypass'
            ),
            array(
                'GETvar' => 'tx_news_pi1[controller]',
                'valueMap' => array(
                    'News' => '',
                ),
                'noMatch' => 'bypass'
            ),
            array(
                'GETvar' => 'tx_news_pi1[news]',
                'lookUpTable' => array(
                    'table' => 'tx_news_domain_model_news',
                    'id_field' => 'uid',
                    'alias_field' => 'title',
                    'addWhereClause' => ' AND NOT deleted',
                    'useUniqueCache' => 1,
                    'useUniqueCache_conf' => array(
                        'strtolower' => 1,
                        'spaceCharacter' => '-'
                    ),
                    'languageGetVar' => 'L',
                    'languageExceptionUids' => '',
                    'languageField' => 'sys_language_uid',
                    'transOrigPointerField' => 'l10n_parent',
                    'autoUpdate' => 1,
                    'expireDays' => 180,
                )
            )
        ),
        $pids['loginPage'] => array(
            array(
                'GETvar' => 'tx_felogin_pi1[forgot]',
                'valueMap' => array(
                    'forgot' => 1
                ),
                'noMatch' => 'bypass'
            ),
            array(
                'GETvar' => 'tx_felogin_pi1[redirectReferrer]',
                'valueMap' => array(
                    'noRedirect' => 'off'
                ),
                'noMatch' => 'bypass'
            ),
            array(
                'GETvar' => 'tx_felogin_pi1[user]'
            ),
            array(
                'GETvar' => 'tx_felogin_pi1[forgothash]'
            ),
        ),
        $pids['newsDetailPage'] => 'newsDetailConfiguration',
    ),
    'postVarSets' => array(
        '_DEFAULT' => array(
            'news' => array(
                array(
                    'GETvar' => 'tx_news_pi1[action]',
                    'noMatch' => 'bypass'
                ),
                array(
                    'GETvar' => 'tx_news_pi1[controller]',
                    'noMatch' => 'bypass'
                ),
            ),
            'datefilter' => array(
                array(
                    'GETvar' => 'tx_news_pi1[overwriteDemand][year]',
                ),
                array(
                    'GETvar' => 'tx_news_pi1[overwriteDemand][month]',
                ),
            ),
            'page' => array(
                array(
                    'GETvar' => 'tx_news_pi1[@widget_0][currentPage]',
                ),
            ),
        ),
    ),
);

// YAG configuration
// $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['encodeSpURL_postProc']['yag'] = 'user_Tx_Yag_Hooks_RealUrl->encodeSpURL_postProc';
// $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']['decodeSpURL_preProc']['yag'] = 'user_Tx_Yag_Hooks_RealUrl->decodeSpURL_preProc';

// Apply config to all domains
foreach ($domainToRootIdMapping as $domain => $uid) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'][$domain] = $config;
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'][$domain]['pagePath']['rootpage_id'] = $uid;
}

// Apply aliases
foreach ($domainAliases as $alias => $domain) {
    $GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl'][$alias] = $domain;
}
