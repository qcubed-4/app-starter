<?php
/* Database Connection SerialArrays
 *
 * Note that all Database Connections are defined as constant serialized arrays.  QCubed supports
 * connections to an unlimited number of different database sources.  Each database source, referenced by
 * a numeric index, will have its DB Connection SerialArray stored in a DB_CONNECTION_# constant
 * (where # is the numeric index).
 *
 * The SerialArray can have the following keys:
 * "adapter" (Required), options are:
 *		MySql (MySQL v4.x, using the old mysql extension)
 *		MySqli (MySQL v4.x, using the new mysqli extension)
 *		MySqli5 (MySQL v5.x, using the new mysqli extension)
 *		SqlServer (Microsoft SQL Server)
 *		SqlServer2005 (Microsoft SQL Server 2005/2008 using new sqlsrv extension, Windows only)
 *		PostgreSql (PostgreSQL)
 * "server" (Required) is the db server's name or IP address, e.g. localhost, 10.1.1.5, etc.
 * "port" is the port number - default is the server-specified default
 * "database", "username", "password" should be self explanatory
 * "dateformat" is an optional value for the desired db date format, the default value is
 *		'YYYY-MM-DD hhhh:mm:ss' if not defined or null
 * "profiling" is true or false, defining whether or not you want to enable DB profiling - default is false
 *		NOTE: Profiling should only be enabled when you are actively wanting to profile a
 *		specific PHP script or scripts.  Because of SIGNIFICANT performance degradation,
 *		it should otherwise always be OFF.
 * "ScriptPath": you can have CodeGen virtually add additional FKs, even though they are
 * 		not defined as a DB constraint in the database, by using a script to define what
 * 		those constraints are.  The path of the script can be defined here. - default is blank or none
 * Note: any option not used or set to blank will result in using the default value for that option
 */
 switch (SERVER_INSTANCE) {
	case 'dev':
		// change the info below for your database

		define('DB_CONNECTION_1', serialize(array(
			'adapter' => 'Mysqli5',
			'server' => 'localhost',
			'port' => 3306,
			'database' => 'qcubed-4',
			'username' => 'root',
			//	'profiling' => true,
			'profiling' => false,
			'password' => 'kukrik58'
		)));
/*
		define('DB_CONNECTION_1', serialize(array(
			'adapter' => 'PostgreSql',
			'server' => 'localhost',
			'port' => null,
			'database' => 'qcubed',
			'username' => 'root',
			//	'profiling' => true,
			'profiling' => false,
			'password' => '12345'
		)));*/

		break;

	case 'test':
	case 'stage':
	case 'prod':
	break;
}

// Additional Database Connection Strings can be defined here (e.g. for connection #2, #3, #4, #5, etc.)
//			define('DB_CONNECTION_2', serialize(array('adapter'=>'SqlServer', 'server'=>'localhost', 'port'=>null, 'database'=>'qcubed', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_3', serialize(array('adapter'=>'MySqli', 'server'=>'localhost', 'port'=>null, 'database'=>'qcubed', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_4', serialize(array('adapter'=>'MySql', 'server'=>'localhost', 'port'=>null, 'database'=>'qcubed', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_5', serialize(array('adapter'=>'PostgreSql', 'server'=>'localhost', 'port'=>null, 'database'=>'qcubed', 'username'=>'root', 'password'=>'', 'profiling'=>false)));
//			define('DB_CONNECTION_6', serialize(array('adapter' => 'InformixPdo', 'host' => 'maxdata', 'server' => 'maxdata', 'service' => 9088, 'protocol' => 'onsoctcp', 'database' => 'qcubed', 'username' => 'root', 'password' => '', 'profiling' => false)));

// Maximum index of the DB connections defined by DB_CONNECTION_# constants above
// When reading the DB_CONNECTION_# constants, it will only go up to (and including) the index defined here
// See ApplicationBase::InitializeDatabaseConnections()
define ('MAX_DB_CONNECTION_INDEX', 1);
