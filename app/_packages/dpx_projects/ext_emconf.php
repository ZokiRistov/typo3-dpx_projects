<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 DPX Projects',
    'description' => 'TYPO3 DPX Projects',
    'category' => 'templates',
    #'author' => 'Vasil Dakov',
    #'author_email' => 'vasil.dakov@digitaspixelpark.com',
    'author_company' => 'DPX',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.27',
            'fluid_styled_content' => '11.5'
        ],
        'conflicts' => [],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'autoload' => [
        'psr-4' => [
            'DpxProjects\\' => 'Classes',
        ],
    ],

];