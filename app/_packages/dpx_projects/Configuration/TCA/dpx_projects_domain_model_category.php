<?php

$tca = [
    'ctrl' => [
        'title' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_category',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'iconfile' => 'EXT:dpx_projects/Resources/Public/Icons/Record.svg',
        'searchFields' => 'name, description',
    ],
    'types' => [
        '1' => ['showitem' => 'title, description'],
    ],
    'columns' => [
        'title' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_category.title',
            'config' => [
                'type' => 'input',
                'size' => 40,
                'max' => 255,
                'eval' => 'trim',
                'required' => true,
            ],
        ],
        'description' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_category.description',
            'config' => [
                'type' => 'text',
                'enableRichtext' => true,
                'rows' => 8,
                'cols' => 40,
                'max' => 2000,
                'eval' => 'trim',
            ],
        ],
        'projects' => [
            'label' => 'LLL:EXT:dpx_projects/Resources/Private/Language/locallang_db.xlf:dpx_projects_domain_model_category.projects',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'dpx_projects_domain_model_project',
                'foreign_table_where' => ' AND dpx_projects_domain_model_project.pid=###CURRENT_PID### ORDER BY dpx_projects_domain_model_project.title ',
                'MM' => 'dpx_projects_domain_model_project_category',
                'MM_opposite_field' => 'projects',
                'minitems' => 0,
                'maxitems' => 99,
            ]
        ]
    ],
];

return $tca;