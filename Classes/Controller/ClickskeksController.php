<?php

namespace Contemas\Clickskeks\Controller;

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;

class ClickskeksController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    public function dataprotectionAction(): void
    {
		$extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(ExtensionConfiguration::class)
			->get('clickskeks');
		$this->view->assign('clickskeks-key', $extensionConfiguration['API-KEY']);
    }
}
