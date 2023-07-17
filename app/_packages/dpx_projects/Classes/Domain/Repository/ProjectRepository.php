<?php

declare(strict_types=1);

namespace DpxProjects\Domain\Repository;

use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use TYPO3\CMS\Extbase\Persistence\QueryResultInterface;
use TYPO3\CMS\Extbase\Persistence\Repository;
use DpxProjects\Domain\Repository\Traits\StoragePageAgnosticTrait;


class ProjectRepository extends Repository
{
    use StoragePageAgnosticTrait;

    public function findByCategory(string $category): QueryResultInterface
    {
        $query = $this->createQuery();
        return $query
            ->matching(
                $query->logicalAnd(
                    $query->equals('categories.title', $category)
                )
            )
            ->execute();
    }

    public function findPaginated(int $limit, int $offset): QueryResultInterface
    {
        DebugUtility::debug($offset);

        $offset = ($offset > 1) ? ( ($offset - 1) * $limit ): 0;

        $query = $this->createQuery();
        $query->setLimit($limit);
        $query->setOffset($offset);

        return $query->execute();
    }
}