<?php 
defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
'Contemas.clickskeks',
'Clickskeks',
[
Contemas\Clickskeks\Controller\ClickskeksController::class => 'dataprotection'
],
[],
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT
);

$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)
->get('clickskeks');

if (isset($extensionConfiguration['API-KEY'])) {
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
'clickskeks',
'constants',
'clickskeks-key = ' . $extensionConfiguration['API-KEY']
);
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:clickskeks/Configuration/TypoScript/setup.typoscript">'
);


    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

    $iconRegistry->registerIcon(
    'tx-clickskeks-icon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    [
    'source' => 'EXT:clickskeks/Resources/Public/Icons/Extension.svg'
    ]
    );
