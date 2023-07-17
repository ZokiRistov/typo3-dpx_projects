<?php

declare(strict_types=1);

namespace DpxProjects\Controller;

use Throwable;
use TYPO3\CMS\Core\Pagination\SimplePagination;
use TYPO3\CMS\Core\Utility\DebugUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;
use DpxProjects\Domain\Model\Project;
use DpxProjects\Domain\Repository\CategoryRepository;
use DpxProjects\Domain\Repository\ProjectRepository;

class ProjectController extends ActionController
{
    private ProjectRepository $projects;

    private CategoryRepository $categories;

    public function injectProjectRepository(ProjectRepository $projects): void
    {
        $this->projects = $projects;
    }

    public function injectCategoryRepository(CategoryRepository $categories): void
    {
        $this->categories = $categories;
    }


    public function indexAction(): ResponseInterface
    {

        $itemsPerPage = 5;

        $currentPageNumber = $this->request->hasArgument('page')
            ? (int) $this->request->getArgument('page')
            : 1;

        $selectedCategory = $this->request->hasArgument('category')
            ? $this->request->getArgument('category')
            : '';


        $all = $this->projects->findAll();
        $paginator = new QueryResultPaginator($all, $currentPageNumber, $itemsPerPage);
        $pagination = new SimplePagination($paginator);

        $args = $this->request->getArguments();

        if (isset($args['category'])) {
            $projects = $this->projects->findByCategory($args['category']);
        } else {
            $projects = $this->projects->findAll();
        }

        $this->view->assign('selectedCategory', $args['category']);
        $this->view->assign('projects', $projects);
        $this->view->assign('categories', $this->categories->findAll());
        $this->view->assign('settings', $this->settings);

        return $this->htmlResponse();
    }

    public function showAction(Project $project): ResponseInterface
    {
        $this->view->assign('project', $project);
        $this->view->assign('categories', $project->getCategories());

        return $this->htmlResponse();
    }

    public function searchAction(): ResponseInterface
    {
        $this->redirect('index');
    }
}
