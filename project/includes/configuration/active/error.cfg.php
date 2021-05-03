<?php

//ini_set("log_errors", 1);
//ini_set("error_log", "/tmp/php-error.log");

// Define the Filepath for the error page
define('QCUBED_ERROR_PAGE_PHP', QCUBED_BASE_DIR . '/common/src/Error/error_page.php');

// Define the Filepath for any logged errors
//define('ERROR_LOG_PATH', QCUBED_TMP_DIR . '/error_log');

// To Log ALL errors that have occurred, set flag to true
//define('ERROR_LOG_FLAG', true);

// To enable the display of "Friendly" error pages and messages, define them here (path MUST be relative from the DOCROOT)
//			define('ERROR_FRIENDLY_PAGE_PATH', QCUBED_BASE_DIR . '/application/src/Error/friendly_error_page.php');
//			define('ERROR_FRIENDLY_AJAX_MESSAGE', 'Oops!  An error has occurred.\r\n\r\nThe error was logged, and we will take a look into this right away.');
