<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'DpxProjects',
        'ProjectIndex',
        [
            \DpxProjects\Controller\ProjectController::class => 'index',
        ],
        [
            \DpxProjects\Controller\ProjectController::class => 'index',
        ]
    );
})();

(static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'DpxProjects',
        'ProjectShow',
        [
            \DpxProjects\Controller\ProjectController::class => 'show',
        ],
        [
            \DpxProjects\Controller\ProjectController::class => 'show',
        ]
    );
})();

(static function (): void {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'DpxProjects',
        'ProjectSearch',
        [
            \DpxProjects\Controller\ProjectController::class => 'search',
        ],
        [
            \DpxProjects\Controller\ProjectController::class => 'search',
        ]
    );
})();

ExtensionManagementUtility::addPageTSConfig('
    @import "EXT:dpx_projects/Configuration/page.tsconfig"
');


