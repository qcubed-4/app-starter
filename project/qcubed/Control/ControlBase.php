<?php
/**
 * Contains the QControl Class - one of the most important classes in the framework
 */

namespace QCubed\Project\Control;

/**
 * ProjectControl is the user overridable Base-Class for all Controls.
 *
 * This class is intended to be modified.
 * @was QControl
 */
abstract class ControlBase extends \QCubed\Control\ControlBase
{

    /**
     * By default, wrappers are turned on for all controls. Wrappers create an extra <div> tag around
     * QControls, and were historically used to help manipulate QControls, and to group a name and error
     * message with a control. However, they can at times get in the way. Now that we are using jQuery to
     * manipulate controls, they are not needed as much, but they are still needed if you are showing
     * and hiding items that are grouped with other items.
     */
    //protected $blnUseWrapper = false;
}
