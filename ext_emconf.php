<?php

/**
 * Extension Manager/Repository config file for ext "typo3_demo3".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Typo3 Demo 3',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '13.0.0-14.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'DamirCompany\\Typo3Demo3\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Damir Pavlik',
    'author_email' => 'damir.pavlik@gmail.com',
    'author_company' => 'Damir Company',
    'version' => '1.0.0',
];
