<?php

namespace QCubed\Project\Control;

use QCubed as Q;

/**
 * Button class - You may modify it to contain your own modifications to the
 * Button throughout the framework.
 * @was QCheckbox
 */
class Checkbox extends \QCubed\Control\CheckboxBase
{
    ///////////////////////////
    // Button Preferences
    ///////////////////////////

    protected $strCssClass = 'checkbox';

    /**
     * Returns the generator corresponding to this control.
     *
     * @return Q\Codegen\Generator\GeneratorBase
     */
    public static function getCodeGenerator() {
        return new Q\Codegen\Generator\Checkbox(__CLASS__);
    }

}
