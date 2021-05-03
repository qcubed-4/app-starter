<?php

/* Relative File Paths for Web Accessible Directories
 *
 * Specify the path that someone was enter into a browser to refer to the files and directories listed.
 * Most commonly, this would be the path from the browser's document root directory, but various web server
 * configurations might make it so that server paths do not correspond to a browser URL path.
 *
 * For some directories (e.g. the Examples site), if you are no longer using it, you STILL need to
 * have the constant defined.  But feel free to define the directory constant as blank (e.g. '') or null.
 *
 * Note that paths must have a leading slash and no ending slash. All defines start with QCUBED_ as a way of
 * "namespacing" the defines. See the config.regex.php file for the transformations that are done to convert to these
 * new defines.
 *
 * For development purposes, you will not likely need to change any of these. Production needs may vary though.
 */

define ('QCUBED_JS_URL', QCUBED_BASE_URL . '/application/assets/js');
define ('QCUBED_CSS_URL', QCUBED_BASE_URL . '/application/assets/css');
define ('QCUBED_PHP_URL', QCUBED_BASE_URL . '/application/assets/php');
define ('QCUBED_IMAGE_URL', QCUBED_BASE_URL . '/application/assets/images');

// Location of the Examples site
define ('QCUBED_EXAMPLES_URL', QCUBED_PHP_URL . '/examples');
define ('QCUBED_EXAMPLES_DIR', QCUBED_BASE_DIR . '/application/assets/php/examples');   // corresponding physical dir

define ('QCUBED_VENDOR_URL', dirname(QCUBED_BASE_URL));

define ('QCUBED_ITEMS_PER_PAGE', 20);

// Location of asset files for your application
define ('QCUBED_PROJECT_JS_URL', QCUBED_PROJECT_ASSETS_URL . '/js');
define ('QCUBED_PROJECT_CSS_URL', QCUBED_PROJECT_ASSETS_URL . '/css');
define ('QCUBED_PROJECT_PHP_URL', QCUBED_PROJECT_ASSETS_URL . '/php');
define ('QCUBED_PROJECT_IMAGE_URL', QCUBED_PROJECT_ASSETS_URL . '/images');

// Location of base qcubed css file. Swap comments to use your own version.
define ('QCUBED_CSS', QCUBED_CSS_URL . '/qcubed.css');
//define ('QCUBED_CSS', QCUBED_PROJECT_CSS_URL . '/qcubed.css');

// There are multiple ways to add jQuery JS files to QCubed, all demonstrated below

// Minified versions
//define ('QCUBED_JQUERY_JS', 'https://code.jquery.com/jquery-1.12.4.min.js');
//define ('QCUBED_JQUERY_JS', 'https://code.jquery.com/jquery-3.2.1.min.js');
//define ('QCUBED_JQUI_JS', ' http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js');


// The original, non-minified jQuery for debugging purposes.
//define ('QCUBED_JQUERY_JS', 'https://code.jquery.com/jquery-1.12.4.js');
//define ('QCUBED_JQUERY_JS', 'https://code.jquery.com/jquery-3.2.1.js');
//define ('QCUBED_JQUI_JS', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js');

// The local versions. Useful for doing development when you don't have internet connectivity
//define ('QCUBED_JQUERY_JS', QCUBED_JS_URL . '/jquery.js');
define ('QCUBED_JQUERY_JS', QCUBED_JS_URL . '/jquery3.js');
define ('QCUBED_JQUI_JS', QCUBED_JS_URL . '/jquery-ui.js');



/** Specific files */

// The core qcubed javascript file to be used.
// In production or as a performance tweak, you may want to use the compressed "_qc_packed.js" library
define ('QCUBED_JS',  QCUBED_JS_URL . '/qcubed.js');
//define ('QCUBED_JS',  '_qc_packed.js');

// Point to your own version of the JQuery UI theme here
define ('QCUBED_JQUI_CSS', QCUBED_CSS_URL . '/jquery-ui.css');

// A wonderful, free, library of scalable icons as fonts. We use it in DataGrid. Point to a local copy for offline development if needed.
define('QCUBED_FONT_AWESOME_CSS', 'https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css');


// The following defines are deprecated for various reasons

// Plugins are going away. Everything is just a "qcubed-library" type.
//define ('__PLUGIN_ASSETS__',  __SUBDIRECTORY__ . '/vendor/qcubed/plugin');

// The following defines are for unsupported controls
/*
define ('__IMAGE_CACHE__', __APP_IMAGE_ASSETS__ . '/cache');

define ('__APP_CACHE_ASSETS__', __PROJECT_ASSETS__ . '/cache');
define ('__APP_CACHE__', __DOCROOT__ . __APP_CACHE_ASSETS__);

define ('__APP_IMAGE_CACHE_ASSETS__', __APP_CACHE_ASSETS__ . '/images');
define ('__APP_IMAGE_CACHE__', __DOCROOT__ . __APP_IMAGE_CACHE_ASSETS__);

define ('__APP_UPLOAD_ASSETS__', __PROJECT_ASSETS__ . '/upload');
define ('__APP_UPLOAD__', __DOCROOT__ . __APP_UPLOAD_ASSETS__);
*/


// Location of the QCubed-specific web-based development tools, like start_page.php
define ('QCUBED_APP_TOOLS_URL', QCUBED_BASE_URL . '/application/tools');



// Location of .po translation files
// this is now handled by the qcubed i18n library
// define ('__QI18N_PO_PATH__', QCUBED_PROJECT_INCLUDES_DIR . '/i18n');

