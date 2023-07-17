<?php

defined('TYPO3') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'dpx_projects',
    'Configuration/TypoScript',
    'Project'
);
