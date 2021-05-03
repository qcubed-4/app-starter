<?php
/*
 * QCubed allows you to save / read / write your user PHP sessions in a database.
 * This is immensely helpful when you want to develop your QCubed based application
 * to support running on two different web servers with same data backends or with load balancing.
 * If you are using QSessionFormStateHandler, it also automatically centralizes your formstates.
 *
 * To avail this feature, you must have a dedicated table in one of your databases above.
 * The table must have 3 columns with follwing names and datatypes (note that column names should match exactly):
 *
 * [Column 1]
 *      Name = id
 *      Data Type = varchar / character varying with length of 32 characters (varchar(32))
 *
 * [Column 2]
 *      Name = last_access_time
 *      Data type = integer
 *
 * [Column 3]
 *      Name = data
 *      Data type = text
 *
 * For this to work, we need to know two things:
 * 1. The DB_CONNECTION index (repeat: the numerical index) of the database from the list of databases above
 *          where this table is located.
 * 2. The name of the table in  the database.
 *
 * Notes:
 * 1. if you do not want to use this feature, set the value of DB_BACKED_SESSION_HANDLER_DB_INDEX to 0.
 * 2. It is recommended that you create a primary key on the 'id' field and an index on the 'last_access_time' field
 *      to speed up the database queries.
 * 3. This feature does not make use of the codegen feature. So you may exclude this table from being codegened.
 */
// The database index where the Session storage tables are present. Remember, define it as an integer.
define("DB_BACKED_SESSION_HANDLER_DB_INDEX", 0);

// The table name to be used for session data storage (must meet the requirements laid out above)
define("DB_BACKED_SESSION_HANDLER_TABLE_NAME", "qc_session");

// The session variable that saves the state of every control you mark as SavedState=true
define('__SESSION_SAVED_STATE__', 'QSavedState');

// TODO: Move this to an application service?
// TODO: Use an APC cache or Redis server?