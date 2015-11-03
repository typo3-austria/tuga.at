<?php

defined('TYPO3_MODE') || die('Access denied.');

\HDNET\Autoloader\Loader::extLocalconf('SUP7', 'ccontent', array(
    'ContentObjects',
    'TcaFiles',
    'SmartObjects'
));
