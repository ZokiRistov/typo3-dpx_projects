<?php
declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') or die();

// This makes the plugin selectable in the BE.
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
// extension name, matching the PHP namespaces (but without the vendor)
    'DpxProjects',
    'ProjectIndex',
    'LLL:EXT:dpx_projects/Resources/Private/Language/locallang.xlf:plugin.dpx_projects_project_index',
    'EXT:dpx_projects/Resources/Public/Icons/Extension.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'DpxProjects',
    'ProjectShow',
    'LLL:EXT:dpx_projects/Resources/Private/Language/locallang.xlf:plugin.dpx_projects_project_show',
    'EXT:dpx_projects/Resources/Public/Icons/Extension.svg'
);

// This removes the default controls from the plugin.
/* $controlsToRemove = 'recursive,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'] = [
    'dpx_projects_projectindex' => $controlsToRemove,
    'dpx_projects_projectshow' => $controlsToRemove,
]; */
