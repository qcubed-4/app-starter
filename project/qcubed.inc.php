<?php
/**
 * Search for and load the top level qcubed.inc.php file. That file should be installed by the installer,
 * and contains a user-editable pointer to the configuration file and configuration directory. The
 * default of that directory is /project/includes/configuration.
 */
$dirpath = dirname(__FILE__);
do {
	$dirpath = $dirpath . '/../';
	$dirpath = realpath($dirpath);
	if ($dirpath == '/') {
		$filepath = '/qcubed.inc.php';
	} else {
		$filepath = $dirpath . '/qcubed.inc.php';
	}
	$blnFound = file_exists($filepath);
} while (!$blnFound && $dirpath != '/');
if ($blnFound) {
	require_once($filepath);
} else {
	throw new Exception("Parent qcubed.inc.php file not found. Can't locate the confiugration directory.");
}
