<?php

declare(strict_types=1);

namespace DpxProjects\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractValueObject;

final class Status extends AbstractValueObject
{
    private string $status;
}