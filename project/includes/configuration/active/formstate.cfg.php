<?php
/* Form State Handler. Determines which class is used to serialize the form in-between Ajax callbacks.
 *
 * Possible values are:
 * "QFormStateHandler": This is the "standard" FormState handler, storing the base64 encoded session data
 *	(and if requested by QForm, encrypted) as a hidden form variable on the page, itself.
 *
 * "QSessionFormStateHandler": Simple Session-based FormState handler.  Uses PHP Sessions so it's very straightforward
 *	and simple, utilizing the session handling and cleanup functionality in PHP, itself.
 *	The downside is that for long running sessions, each individual session file can get
 *	very, very large, storing all hte various formstate data.  Eventually (if individual
 *	session files are larger than 10MB), you can theoretically observe a geometrical
 *	degradation of performance.
 *
 * "QFileFormStateHandler": This will store the formstate in a pre-specified directory (__FILE_FORM_STATE_HANDLER_PATH__)
 *	on the file system. This offers significant speed advantage over PHP SESSION because EACH
 *	form state is saved in its own file, and only the form state that is needed for loading will
 *	be accessed (as opposed to with session, ALL the form states are loaded into memory
 *	every time).
 *	The downside is that because it doesn't utilize PHP's session management subsystem,
 *	this class must take care of its own garbage collection/deleting of old/outdated
 *	formstate files.
 *
 * "QDbBackedFormStateHandler": This will store the formstate in a predefined table in one of the DBs in the array above.
 *    It provides a way to maintain the FormStates without creating too many files on the server.
 *    It also makes sure that the application remains fast and provides all the features of QFileFormStateHandler.
 *    The algorithm to periodically clean up the DB is also provided (just like QFileFormStateHandler) .
 *
 *    To use the QDbBackedFormStateHandler, the following two constants must be defined:
 *       1. __DB_BACKED_FORM_STATE_HANDLER_DB_INDEX__ : It is the numerical index of the DB from the list of DBs defined
 *             above where the table to store the FormStates is present. Note, it is the numerical Index, not the DB name.
 *             e.g. If it is present in the DB_CONNECTION_1, then the value must be defined as '1'.
 *       2. __DB_BACKED_FORM_STATE_HANDLER_TABLE_NAME__ : It is the name of the table where the FormStates must be stored
 *              It must have following 4 columns:
 *                  i) page_id: varchar(80) - It must be the primary key.
 *                 ii) save_time: integer - This column should be indexed for performance reasons
 *                iii) session_id: varchar(32) - This column should be indexed for performance reasons
 *                 iv) state_data: text - This column must NOT be indexed otherwise it will degrade the performance.
 *
 * NOTE: Formstates can be large, depending on the complexity of your forms.
 *       For MySQL, you might have to increase the max_allowed_packet variable in your my.cnf file to the maximum size of a formstate.
 *       Also for MySQL, you should choose a MEDIUMTEXT type of column, rather than TEXT. TEXT is limited to 64KB,
 *       which will not be big enough for moderately complex forms, and will result in data errors.
 */
define('__FORM_STATE_HANDLER__', '\\QCubed\\FormState\\SessionHandler');

// If using the QFileFormStateHandler, specify the path where QCubed will save the session state files (has to be writeable!)
define('__FILE_FORM_STATE_HANDLER_PATH__', QCUBED_PROJECT_DIR . '/tmp');

// If using the QDbBackedSessionHandler, define the DB index where the table to store the formstates is present
define('__DB_BACKED_FORM_STATE_HANDLER_DB_INDEX__', 1);
// If using QDbBackedSessionHandler, specify the table name which would hold the formstates (must meet the requirements laid out above)
define('__DB_BACKED_FORM_STATE_HANDLER_TABLE_NAME__', 'qc_formstate');


