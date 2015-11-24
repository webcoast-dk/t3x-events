<?php

/*********************************************************************
 * Extension configuration file for ext 'gb_events'.
 *
 * Generated by ext 17-09-2014 07:49 UTC
 *
 * https://github.com/t3elmar/Ext
 *********************************************************************/

$EM_CONF['gb_events'] = [
    'title' => 'Event calendar',
    'description' => 'A simple calendar for upcoming events.',
    'category' => 'plugin',
    'author' => 'Morton Jonuschat',
    'author_email' => 'm.jonuschat@gute-botschafter.de',
    'author_company' => 'Gute Botschafter GmbH',
    'state' => 'stable',
    'uploadfolder' => '1',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'version' => '7.0.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '5.5.0-7.0.99',
            'typo3' => '6.2.0-7.6.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'GuteBotschafter\\GbEvents\\' => 'Classes',
        ],
    ],
    'autoload-dev' => [
        'psr-4' => [
            'GuteBotschafter\\GbEvents\\Tests\\' => 'Tests',
            'TYPO3\\CMS\\Core\\Tests\\' => '.Build/vendor/typo3/cms/typo3/sysext/core/Tests/',
            'TYPO3\\CMS\\Fluid\\Tests\\' => '.Build/vendor/typo3/cms/typo3/sysext/fluid/Tests/',
        ],
    ],
    'comment' => 'Make it possible to show events that have started but not yet finished.',
    'user' => 'gutebotschafter',
];
