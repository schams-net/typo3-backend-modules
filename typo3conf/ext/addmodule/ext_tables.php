<?php
/**
 * This file is part of the TYPO3 CMS Extension "Add Module"
 * Extension author: Michael Schams - http://schams.net
 *
 * For copyright and license information, please read the LICENSE.txt
 * file distributed with this source code.
 */

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// Avoid that this block is loaded in frontend or within upgrade wizards
if (TYPO3_MODE === 'BE' && !(TYPO3_REQUESTTYPE & TYPO3_REQUESTTYPE_INSTALL)) {

/*
	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		$_EXTKEY,
		'addmodule',
		'',
		'',
		array(),
		array(
			'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang.addmodule.xml',
		)
	);
*/
}
