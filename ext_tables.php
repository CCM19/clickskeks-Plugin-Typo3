<?php

defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
    'Clickskeks Plugin',
    'clickskeks_clickskeks',
    'EXT:clickskeks/Resources/Public/Icons/Extension.svg'
    ],
    'CType',
    'clickskeks'
);
