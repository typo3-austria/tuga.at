<?php
namespace SUP7\Theme\Hooks;

use Tx\Realurl\Configuration\ConfigurationGenerator;

/**
 * Class RealUrlAutoConfiguration
 */
class RealUrlAutoConfiguration
{
    /**
     * Generates additional RealURL configuration and replace it with provided configuration recursively
     * - Add basic/often used/common RealUrl configuration
     *
     * @param array $params Default configuration
     * @param ConfigurationGenerator $pObj Parent object
     * @return array Updated configuration
     */
    public function addThmConfig($params, ConfigurationGenerator &$pObj)
    {

        return array_replace_recursive($params['config'], [
            'init' => [
                'enableCHashCache' => 1,
                'enableUrlDecodeCache' => 1,
                'enableUrlEncodeCache' => 1
            ],
            'pagePath' => [
                'disablePathCache' => false,
            ],
            'fileName' => [
                'defaultToHTMLsuffixOnPrev' => 0,
                'acceptHTMLsuffix' => 0,
                'index' => [
                    'robots.txt' => [
                        'keyValues' => [
                            'type' => 9201,
                        ]
                    ],
                ]
            ],
            'preVars' => [
                [
                    'GETvar' => 'L',
                    'valueMap' => [
                        'en' => '1'
                    ],
                    'noMatch' => 'bypass',
                ]
            ],
            'fixedPostVars' => [

            ],
            'postVarSets' => [
                '_DEFAULT' => [

                ],
            ],
        ]);
    }

    /**
     * Generates additional RealURL configuration and replace it with provided configuration recursively
     * - Disable RealUrl Cache
     *
     * @param $params
     * @param ConfigurationGenerator $pObj
     * @return array
     */
    public function disableRealUrlCache($params, ConfigurationGenerator &$pObj)
    {
        return array_replace_recursive($params['config'], [
            'init' => [
                'enableCHashCache' => false,
                'enableUrlDecodeCache' => false,
                'enableUrlEncodeCache' => false
            ],
            'pagePath' => [
                'disablePathCache' => true,
            ],
        ]);
    }
}
