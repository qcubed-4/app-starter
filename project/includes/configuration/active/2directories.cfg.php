<?php

/**
 * Absolute File Paths for Internal Directories
 *
 * Please specify the absolute file path for all the following directories in your QCubed-based web
 * application.
 *
 * Note that all paths must start with a slash or 'x:\' (for windows users) and must have
 * no ending slashes.  (We take advantage of the QCUBED_PROJECT_INCLUDES_DIR to help simplify this section.
 * But note that this is NOT required.  These directories can also reside outside of the
 * Document Root altogether.  So feel free to use or not use the __DOCROOT__ and QCUBED_PROJECT_INCLUDES_DIR
 * constants as you wish/need in defining your other directory constants.)
 */

define ('QCUBED_APP_INCLUDES_DIR', QCUBED_PROJECT_INCLUDES_DIR . '/app_includes');

// Browser writable temporary directory for various framework generated files. Handle with care. Does not need to be in docroot.
define ('QCUBED_TMP_DIR', QCUBED_PROJECT_DIR  . '/tmp');
define ('QCUBED_CACHE_DIR', QCUBED_TMP_DIR . '/cache');
define ('QCUBED_FILE_CACHE_DIR', QCUBED_TMP_DIR . '/cache');
define ('QCUBED_PLUGIN_TMP_DIR', QCUBED_TMP_DIR . '/plugin');
define ('QCUBED_PURIFIER_CACHE_DIR', QCUBED_CACHE_DIR . '/purifier');

/*
define ('__PLUGINS__', __DOCROOT__ . __SUBDIRECTORY__ . '/vendor/qcubed/plugin');
define ('QCUBED_CACHE_DIR', QCUBED_TMP_DIR . '/cache');
define ('QCUBED_FILE_CACHE_DIR', QCUBED_TMP_DIR . '/cache');

define ('__PLUGIN_TMP__', QCUBED_TMP_DIR . '/plugin.tmp/');

define ('__PLUGINS__', __DOCROOT__ . __SUBDIRECTORY__ . '/vendor/qcubed/plugin');

// The QCubed Core
//define ('__QCUBED_CORE__', __DOCROOT__ . __SUBDIRECTORY__ . '/vendor/qcubed/qcubed/includes');
//define ('__QCUBED_CORE__', __DOCROOT__ . __SUBDIRECTORY__ . '/vendor/qcubed/qcubed/includes/qcubed/_core');


// If using HTML Purifier, the location of the writeable cache directory.
define ('__PURIFIER_CACHE__', QCUBED_CACHE_DIR . '/purifier');
*/