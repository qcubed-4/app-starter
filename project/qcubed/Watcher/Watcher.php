<?php
namespace QCubed\Project\Watcher;

use QCubed\Project\Application;

/**
 * Watcher is a controller for allowing controls to watch a database table to detect changes
 * and automatically update when changes are detected.
 *
 * To select the type of cache used, change the class that Watcher extends from.
 * Watcher\Database is based on a standard SQL database. See Watcher\Database.php for details on setup.
 * Watcher\Cache uses PSR-16 SimpleCache compatible caches. See the QCubed\Cache library for examples of these.
 *
 * Once you configure the Watcher subclass, to use the Watcher system, do the following:
 * During the creation of a control that needs to watch a database table, call $ctl->Watch($dbNode), where
 *    $dbNode is the node that represents the table you want to watch. For example, to have a datagrid watch the
 *    people table, call:
 *   $dtg->watch (QQN::People());
 *
 * That's it. From then on, when the system detects a change in the watched tables, the watching controls will automatically
 * redraw. Even controls in other windows will automatically redraw.
 *
 * Note that a control can watch multiple tables by calling Watch multiple times, and if given a node chain
 * (like QQN::Project()->ProjectAsManager->etc.), it will watch all the tables in the chain.
 *
 * Detection currently happens on any ajax call. You can use QJsTimer to force periodic ajax calls if needed, or
 * just let the user's activity generate periodic ajax calls. A more advanced system would be to use a WebSocket server,
 * Socket.IO, PubNub or something similar, but these things require server configurations that are currently beyond the scope
 * of QCubed.
 *
 * @was QWatcher
 */

class Watcher extends \QCubed\Watcher\None {
    
}


/* Example using an APC Cache
class Watcher extends \QCubed\Watcher\Cache
{
    //Initialize global watcher settings and services. This happens at application creation time.
    public static function initialize() {
        static::$objCache = new \QCubed\Cache\ApcCache();
    }

    // this is an example override of how you might use what you know from the user to restrict changes to that user's sphere of influence
    // this will prevent a busy system from causing everyone to redraw on every change, but rather only draw when specific users are affected
    protected static function getKey($strDbName, $strTableName)
    {
        $companyId = Application::instance()->authService()->currentCompanyId();
        return $strDbName . '.' . $strTableName . '.' . $companyId;
    }
}
*/

/* Example using a Database table. See Watcher\Database for setup details.
class Watcher extends \QCubed\Watcher\Database
{
    //Initialize global watcher settings. This happens at application creation time.
    public static function initialize() {
        static::$intDbIndex = 1;
        static::$strTableName = 'qc_watchers';
    }
}
*/
