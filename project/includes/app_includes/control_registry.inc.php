<?php

/**
 * Called by the ModelConnector Designer to create a list of controls appropriate for the given database field type.
 * If you would like your own custom controls to be available to include in tModelConnectorrol designer,
 * uncomment the appropriate line for the type of data your control edits, and put the name of your control in
 * the quotes to add it to the appropriate array.
 */

use QCubed\ModelConnector\ControlType;

$controls = [];

//$controls[ControlType::VAR_CHAR][] = 'QCubed\\Project\\MyTextBox';
//$controls[ControlType::BLOB][] = '';
//$controls[ControlType::CHAR][] = '';
//$controls[ControlType::INTEGER][] = '';
//$controls[ControlType::FLOAT][] = '';
//$controls[ControlType::BIT][] = '';
//$controls[ControlType::DATE_TIME][] = '';
//$controls[ControlType::DATE][] = '';
//$controls[ControlType::TIME][] = '';
//$controls[ControlType::SINGLE_SELECT][] = ''; // Many-to-one. Includes forward and unique reverse references.
//$controls[ControlType::MULTI_SELECT][] = ''; // Many-to-many.
//$controls[ControlType::TABLE][] = ''; // Select from a list.

return $controls;