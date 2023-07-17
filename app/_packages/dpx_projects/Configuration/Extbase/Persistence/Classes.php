<?php

declare(strict_types=1);

return [
    \DpxProjects\Domain\Model\Project::class => [
        'tableName' => 'dpx_projects_domain_model_project',
        'subclasses' => [
            'categories' => \DpxProjects\Domain\Model\Category::class,
        ],
    ],
    \DpxProjects\Domain\Model\Category::class => [
        'tableName' => 'dpx_projects_domain_model_category',
    ],
];