<?php
/**
 * LibGroupTest file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <http://book.arachnid.org/view/1196/Testing>
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://book.arachnid.org/view/1196/Testing CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.4206
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */

/**
 * LibGroupTest class
 *
 * This test group will run all test in the cases/libs directory.
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class LibGroupTest extends TestSuite {

/**
 * label property
 *
 * @var string
 * @access public
 */
	var $label = 'All core, non MVC element libs';

/**
 * LibGroupTest method
 *
 * @access public
 * @return void
 */
	function LibGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'basics');
		// TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'inflector');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'cake_session');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'debugger');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'error');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'file');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'folder');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'cake_log');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'log' . DS . 'file_log');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'class_registry');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'overloadable');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'sanitize');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'security');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'set');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'string');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'validation');
	}
}
