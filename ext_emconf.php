<?php

/*********************************************************************
 * Extension configuration file for ext "gb_events".
 *
 * Generated by ext 13-05-2014 13:36 UTC
 *
 * https://github.com/t3elmar/Ext
 *********************************************************************/

$EM_CONF[$_EXTKEY] = array(
  'title' => 'Event calendar',
  'description' => 'A simple calendar for upcoming events.',
  'category' => 'plugin',
  'author' => 'Morton Jonuschat',
  'author_email' => 'm.jonuschat@gute-botschafter.de',
  'author_company' => 'Gute Botschafter GmbH',
  'shy' => '',
  'dependencies' => 'cms,extbase,fluid',
  'conflicts' => '',
  'priority' => '',
  'module' => '',
  'state' => 'stable',
  'internal' => '',
  'uploadfolder' => '1',
  'createDirs' => '',
  'modify_tables' => '',
  'clearCacheOnLoad' => 0,
  'lockType' => '',
  'version' => '6.1.2',
  'constraints' => array(
    'depends' => array(
      'typo3' => '6.2.0-6.2.99',
    ) ,
    'conflicts' => array() ,
    'suggests' => array() ,
  ) ,
  'comment' => 'Fix error with TYPO3 6.2 and ke_search',
  'user' => 'gutebotschafter',
);
?>