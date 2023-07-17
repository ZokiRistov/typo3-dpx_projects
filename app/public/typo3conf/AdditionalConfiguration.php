<?php

$changedSettings['SYS'] = array(
    'displayErrors' => '0',
    'devIPmask' => '*',
    'errorHandler' => 'TYPO3\\CMS\\Core\\Error\\ErrorHandler',
    'errorHandlerErrors' => E_ALL ^ E_NOTICE,
    'exceptionalErrors' => E_ALL ^ E_NOTICE ^ E_WARNING ^ E_USER_ERROR ^ E_USER_NOTICE ^ E_USER_WARNING,
    'debugExceptionHandler' => 'TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler',
    'productionExceptionHandler' => 'TYPO3\\CMS\\Core\\Error\\DebugExceptionHandler',
);
$changedSettings['BE']['installToolPassword'] = '$argon2i$v=19$m=65536,t=16,p=1$c0pvUS90ZHpyTjRrbnUzcQ$uxmf/E5SPHoT+Q5CggA61t9GEN2499WpUJy0bQe/LAE';

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive($GLOBALS['TYPO3_CONF_VARS'], $changedSettings);