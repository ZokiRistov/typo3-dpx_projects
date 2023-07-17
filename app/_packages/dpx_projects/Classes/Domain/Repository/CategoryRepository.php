<?php

declare(strict_types=1);

namespace DpxProjects\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\Repository;
use DpxProjects\Domain\Repository\Traits\StoragePageAgnosticTrait;

class CategoryRepository extends Repository
{
    use StoragePageAgnosticTrait;
}
