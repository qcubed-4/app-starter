<?php

namespace QCubed\Project\Control;

use QCubed as Q;
use QCubed\Project\Application;

/**
 * Class ListBox
 *
 * The QListBox class is based upon QListBoxBase.
 *
 * The purpose of this class is entirely to provide a place for you to make modifications of the QListBox control.
 * All updates in QCubed releases will make changes to the QListBoxBase class.  By making your modifications here
 * instead of in the base class, you can ensure that your changes are not affected by core improvements.
 *
 * @was QListBox
 * @package QCubed\Project\Control
 */
class ListBox extends Q\Control\ListBoxBase
{
    ///////////////////////////
    // ListBox Preferences
    ///////////////////////////

    // Feel free to specify global display preferences/defaults for all QListBox controls
    /** @var string Default CSS class for the listbox */
    protected $strCssClass = 'listbox';
//		protected $strFontNames = QFontFamily::Verdana;
//		protected $strFontSize = '12px';
//		protected $strWidth = '250px';

    /**
     * Creates the reset button html for use with multiple select boxes.
     *
     */
    protected function getResetButtonHtml()
    {
        $strJavaScriptOnClick = sprintf('$j("#%s").val(null);$j("#%s").trigger("change"); return false;',
            $this->strControlId, $this->strControlId);

        $strToReturn = sprintf(' <a id="reset_ctl_%s" href="#" class="listboxReset">%s</a>',
            $this->strControlId,
            t('Reset')
        );

        Application::executeJavaScript(sprintf('$j("#reset_ctl_%s").on("%s", function(){ %s });', $this->strControlId,
            "click", $strJavaScriptOnClick));

        return $strToReturn;
    }

    /**
     * Returns the generator corresponding to this control.
     *
     * @return Q\Codegen\Generator\GeneratorBase
     */
    public static function getCodeGenerator() {
        return new Q\Codegen\Generator\ListBox(__CLASS__);
    }

}
