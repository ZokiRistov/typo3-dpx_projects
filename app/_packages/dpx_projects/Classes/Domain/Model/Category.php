<?php

declare(strict_types=1);

namespace DpxProjects\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3\CMS\Extbase\Annotation\ORM\Lazy;

class Category extends AbstractEntity
{
    protected string $title = '';

    /**
     * Categories
     *
     * @var ObjectStorage<Project>
     * @Lazy
     */
    protected ObjectStorage $projects;

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param Project $project
     */
    public function addProject(Project $project): void
    {
        $this->project->attach($project);
    }

    public function removeProject(Project $project): void
    {
        $this->projects->detach($project);
    }

    public function setProjects(ObjectStorage $projects): void
    {
        $this->projects = $projects;
    }
}
