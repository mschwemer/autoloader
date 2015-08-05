<?php
/**
 * PHP Writer
 *
 * @author  Tim Lochmüller
 */

namespace HDNET\Autoloader\Localization\Writer;

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * PHP Writer
 *
 * @author Tim Lochmüller
 */
class PhpWriter extends AbstractLocalizationWriter {

	/**
	 * @return string
	 */
	public function getBaseFileContent() {
		// TODO: Implement addLabel() method.
	}

	/**
	 * @param string $extensionKey
	 *
	 * @return string
	 */
	public function getAbsoluteFilename($extensionKey) {
		return ExtensionManagementUtility::extPath($extensionKey, 'Resources/Private/Language/locallang.php');
	}

	/**
	 * Add the label
	 *
	 * @param string $extensionKey
	 * @param string $key
	 * @param string $default
	 *
	 * @return bool
	 */
	public function addLabel($extensionKey, $key, $default) {
		// TODO: Implement addLabel() method.
	}
}