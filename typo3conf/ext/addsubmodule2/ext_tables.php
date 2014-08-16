<?php
/**
 * This file is part of the TYPO3 CMS Extension "Add Submodule 2"
 * Extension author: Michael Schams - http://schams.net
 *
 * For copyright and license information, please read the LICENSE.txt
 * file distributed with this source code.
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

$extPath    = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY);
$extRelPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY);

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {

	$registerMainModule = TRUE;
	$registeredModules = array_keys($TBE_MODULES);
	foreach($registeredModules as $moduleKey) {
		if(substr($moduleKey, -9) == 'Addmodule') {
			$registerMainModule = FALSE;
		}
	}

	if($registerMainModule == TRUE) {
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
			'addmodule',
			'addmodule',
			'',
			'',
			array(),
			array(
				'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.addmodule.xml',
			)
		);
	}

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'addmodule',
		'addmodule',					// main module name
		'addsubmodule2',				// sub module name
		'',								// position
        array(),
        array(
            'access' => 'user,group',
            'icon'   => 'EXT:' . $_EXTKEY . '/ext_icon.gif',
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.addsubmodule2.xlf',
        )
    );

}
