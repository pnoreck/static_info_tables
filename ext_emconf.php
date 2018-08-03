<?php
/**
 * Extension Manager configuration file for ext "static_info_tables".
 */

$EM_CONF[$_EXTKEY] = [
    'title'            => 'Static Info Tables',
    'description'      => 'Data and API for countries, languages and currencies.',
    'category'         => 'misc',
    'version'          => '6.5.1',
    'state'            => 'stable',
    'uploadfolder'     => 0,
    'createDirs'       => '',
    'clearCacheOnLoad' => 0,
    'author'           => 'Stanislas Rolland/René Fritz',
    'author_email'     => 'typo3@sjbr.ca',
    'author_company'   => 'SJBR',
    'constraints'      => [
        'depends'   => [
            'typo3' => '7.6.0-9.7.99',
        ],
        'conflicts' => [
            'sr_static_info'   => '0.0.0-99.99.99',
            'cc_infotablesmgm' => '0.0.0-99.99.99',
            'uncache'          => '0.0.0-99.99.99',
        ],
        'suggests'  => [],
    ],
    'autoload'         =>
        [
            'psr-4' =>
                [
                    'SJBR\\StaticInfoTables\\' => 'Classes',
                ],
        ],
];