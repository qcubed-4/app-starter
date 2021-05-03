<?php
namespace QCubed\Project\Control;

use QCubed\Control\DataGridBase;
use QCubed\Exception\Caller;
use QCubed as Q;

/**
 * DataGrid can help generate tables automatically with pagination. It can also be used to
 * render data directly from database by using a 'DataSource'. The code-generated search pages you get for
 * every table in your database are all QDataGrids
 *
 * @was QDataGrid
 * @package QCubed\Project\Control
 */
class DataGrid extends DataGridBase
{
    // Feel free to specify global display preferences/defaults for all DataGrid controls

    /**
     * DataGrid constructor.
     * @param ControlBase|FormBase $objParentObject
     * @param null $strControlId
     * @throws Caller
     */
    public function __construct($objParentObject, $strControlId = null)
    {
        try {
            parent::__construct($objParentObject, $strControlId);
        } catch (Caller  $objExc) {
            $objExc->incrementOffset();
            throw $objExc;
        }

        $this->CssClass = 'datagrid';
    }

    /**
     * Returns the generator corresponding to this control.
     *
     * @return Q\Codegen\Generator\GeneratorBase
     */
    public static function getCodeGenerator() {
        return new Q\Codegen\Generator\Table(__CLASS__); // reuse the Table generator
    }

}
