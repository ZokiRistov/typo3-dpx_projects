<?php

$tca = [
    'ctrl' => [
        'title' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'iconfile' => 'EXT:dpx_projects/Resources/Public/Icons/Record.svg',
        'searchFields' => 'title, description, status',
    ],
    'types' => [
        '1' => ['showitem' => 'title, description, status, image, categories'],
    ],
    'columns' => [
        'title' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project.title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'description' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'rows' => 8,
                'cols' => 40,
                'max' => 2000,
                'eval' => 'trim',
            ],
        ],
        'status' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project.status',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'image' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project.image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => true,
                    'useSortable' => false,
                    'enabledControls' => [
                        'hide' => false,
                    ],
                ],
                'allowed' => 'common-image-types',
            ],
        ],
        'categories' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project.categories',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'MM' => 'dpx_projects_domain_model_project_category',
                //'foreign_table_where' => ' AND dpx_projects_domain_model_category.pid=###CURRENT_PID### ORDER BY dpx_projects_domain_model_category.title ',
                'foreign_table' => 'dpx_projects_domain_model_category',
                'minitems' => 0,
                'maxitems' => 99,
            ]
        ]
    ],
];


/*
$typo3Version = new \TYPO3\CMS\Core\Information\Typo3Version();
if ($typo3Version->getMajorVersion() < 12) {
    $tca = array_replace_recursive(
        $tca,
        [
            'ctrl' => [
                'cruser_id' => 'cruser_id',
            ],
            'columns' => [
                'title' => [
                    'config' => [
                        'eval' => 'trim,required',
                    ],
                ],
            ],
        ]
    );
    unset($tca['columns']['title']['required']);
    $tca['columns']['image'] = [
        'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project.image',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'image',
            [
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => true,
                    'useSortable' => false,
                    'enabledControls' => [
                        'hide' => false,
                    ],
                ],
            ]
        ),
    ];
}
*/

$tca['columns']['image'] = [
    'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_project.image',
    'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
        'image',
        [
            'maxitems' => 1,
            'appearance' => [
                'collapseAll' => true,
                'useSortable' => false,
                'enabledControls' => [
                    'hide' => false,
                ],
            ],
        ]
    ),
];

return $tca;
