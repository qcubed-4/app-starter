<?php
/**
 * config.inc.php
 *
 * This is the first file loaded in this config directory, among all the other files. These are the base configuration
 * settings which all other configuration files depend on. This file is loaded by the configuration.inc.php file
 * in the directory above.
 *
 * Feel free to make changes as needed.
 */


/**
 * The SERVER_INSTANCE define. This define can be used to change key settings based on whether you
 * are running a development server, staging server, or deployment server. It defaults to dev, but
 * you should run some kind of detection logic to change it depending on your installation.
 *
 * For example, this code changes the setting based on an environment variable:
   if (!defined('SERVER_INSTANCE')) {
	if (isset($_ENV['APP_ENV'])) {
		define('SERVER_INSTANCE', $_ENV['APP_ENV']);
	} elseif (php_sapi_name() === 'cli') {
		define('SERVER_INSTANCE', 'dev');
	} else {
		define('SERVER_INSTANCE', 'prod');
	}

 */

define('SERVER_INSTANCE', 'dev');

switch (SERVER_INSTANCE) {
    case 'dev':
        /** The following are absolute server paths that help PHP require and include files **/

        // The installation base path of the project directory. This directory is used by qcubed during installation
        // to place files that you can modify later. These files are part of the scaffolding that allow you to customize
        // the framework without touching the files in QCUBED_BASE_DIR. Also, in here will go files that are generated
        // by the code generator. Again, during development, it may be convenient to put this in docroot, but we recommend
        // NOT doing this for production.
        define ('QCUBED_PROJECT_DIR', dirname(dirname(dirname(__DIR__))));

        // The installation base path of the qcubed repositories. The application, orm, and other repos go in here.
        // Often during development, it is convenient to put this in your document root directory,
        // but we highly recommend for deployments that it NOT be in docroot. 3rd party libraries would be siblings
        // to this dir, and the default autoloader is a sibling too.
        define ('QCUBED_BASE_DIR',  dirname(QCUBED_PROJECT_DIR) . '/vendor/qcubed-4'); // default to having project dir be a sibling of vendor


        /** The following are paths relative to DOCROOT that are inserted in front of file names so the browser can get to them. **/

		// Before QCubed can do anything, it needs to know the URL to use for development purposes. This would be a local
		// url on your development computer. The prefix below is only used within this config file to help with the url
		// pointers below. It would be whatever needs to go after "http:/" and before the "/vendor" or "/project" directory
		define ('QCUBED_URL_PREFIX', '{ url_prefix }');

        // The files need to be in DOC_ROOT, or somehow (perhaps a rewrite rule), be browser accessible.
        // Default values point inside of the project and QCubed base directories. A production environment should
        // copy those out of those locations and put them in some web accessible location. Also, production environments
        // might want to combine the files into one file.

        // The base URL that points to the installed qcubed installation. In a development setting, we need to know this to get
        // to various development tools that are browser based. In a production environment, this would be the parent directory
        // of the various assets directories for files provided by framework.
        // @was __VIRTUAL_DIRECTORY__ . __SUBDIRECTORY __
        define ('QCUBED_BASE_URL', QCUBED_URL_PREFIX . '/vendor/qcubed-4');

        // This is the project assets directory where we put files that are designed to be altered by the developer.
        // js, css, etc. directories should be under this directory.
        define ('QCUBED_PROJECT_ASSETS_URL', QCUBED_URL_PREFIX . '/project/assets');

        // This is the forms directory where we put generated php form files that are entry points for the browser.
        // @was __FORMS__
        define ('QCUBED_FORMS_URL', QCUBED_URL_PREFIX . '/project/forms');
        // This is the corresponding absolute path so we know where to write the files AND how to access them from a browser.
        // Production environments should be able to remove this define
        define ('QCUBED_FORMS_DIR', QCUBED_PROJECT_DIR . '/forms');

        define ('ALLOW_REMOTE_ADMIN', true);
        define ('QCUBED_DESIGN_MODE', 1);
        break;

    case 'test':
    case 'stage':
    case 'prod':
        define('QCUBED_MINIMIZE', 1);
        break;
}

/*
 * If you are using Apache-based mod_rewrite to perform URL rewrites, please specify "apache" here.
 * Otherwise, specify as "none"
 */
define ('QCUBED_URL_REWRITE', 'none');

/**
 * The encoding type for the application (e.g. UTF-8, ISO-8859-1, etc.). This is the encoding that will be
 * used for internal variables, for web pages, and what will get stored in the database. This also affects
 * how code generation is done, so if you change this, be sure to code generate again.
 * was QApplication::$EncodingType
 */

define('QCUBED_ENCODING', 'UTF-8');

if ((function_exists('date_default_timezone_set')) && (!ini_get('date.timezone')))
    date_default_timezone_set('America/Los_Angeles');

// Directory where non-editable generated files go
define ('QCUBED_PROJECT_GEN_DIR', QCUBED_PROJECT_DIR . '/generated' );
// Directory where editable generated files go
define ('QCUBED_PROJECT_INCLUDES_DIR', QCUBED_PROJECT_DIR . '/includes');
