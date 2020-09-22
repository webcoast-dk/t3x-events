<?php

return [
    'ctrl' => [
        'title' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'origUid' => 'l10n_original',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'iconfile' => 'EXT:events/Resources/Public/Icons/tx_events_domain_model_event.gif',
        'searchFields' => 'title,teaser,description,location'
    ],
    'types' => [
        '1' => [
            'showitem' => 'title,teaser,description,location,event_date,event_time,event_stop_date,images,downloads,--div--;LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring,recurring_weeks,recurring_days,recurring_stop,recurring_exclude_holidays,recurring_exclude_dates,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,--palette--;;access',
        ],
    ],
    'palettes' => [
        'access' => [
            'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
            'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden, starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel'
        ],
        'language' => [
            'showitem' => 'sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent'
        ]
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ],
                ],
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_events_domain_model_event',
                'foreign_table_where' => 'AND tx_events_domain_model_event.pid=###CURRENT_PID### AND tx_events_domain_model_event.sys_language_uid IN (-1,0)',
                'default' => 0,
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    ['', '', 'invertStateDisplay' => true]
                ]
            ],
        ],
        'starttime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => '10',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0',
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'endtime' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'size' => '8',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0',
                'range' => [
                    'upper' => mktime(0, 0, 0, 12, 31, date('Y') + 10),
                    'lower' => mktime(0, 0, 0, date('m') - 1, date('d'), date('Y')),
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'title' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
            ],
        ],
        'teaser' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.teaser',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'description' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim,required',
                'enableRichtext' => true,
            ],
        ],
        'location' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.location',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'event_date' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.event_date',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'dbType' => 'date',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'date,required',
                'checkbox' => 1,
            ],
        ],
        'event_time' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.event_time',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'dbType' => 'time',
                'size' => 10,
                'eval' => 'time',
            ],
        ],
        'event_stop_date' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.event_stop_date',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'dbType' => 'date',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'date',
                'checkbox' => 1,
            ],
        ],
        'recurring_weeks' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_weeks',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_weeks.0',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_weeks.1',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_weeks.2',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_weeks.3',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_weeks.4',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_weeks.5',
                        '',
                    ],
                ],
                'suppress_icons' => 1,
            ],
        ],
        'recurring_days' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'check',
                'items' => [
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days.0',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days.1',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days.2',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days.3',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days.4',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days.5',
                        '',
                    ],
                    [
                        'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_days.6',
                        '',
                    ],
                ],
                'suppress_icons' => 1,
            ],
        ],
        'recurring_stop' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_stop',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'input',
                'dbType' => 'date',
                'renderType' => 'inputDateTime',
                'size' => 12,
                'eval' => 'date',
                'checkbox' => 1,
            ],
        ],
        'recurring_exclude_holidays' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_exclude_holidays',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 0,
            ],
        ],
        'recurring_exclude_dates' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.recurring_exclude_dates',
            'l10n_mode' => 'exclude',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'images' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.images',
            'config' => TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig("images"),
        ],
        'downloads' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:events/Resources/Private/Language/locallang_db.xlf:tx_events_domain_model_event.downloads',
            'config' => TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig("downloads"),
        ],
    ],
];