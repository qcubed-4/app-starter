<?php

// Called by the ModelConnector Designer to create a list of controls appropriate for the given database field type

// You can put one in your __App_Includes__ directory and add to the given type to add your custom controls to the list
// The PLUGINS directories will also be searched

use QCubed\ModelConnector\ControlType;

$controls[ControlType::TEXT] 			= ['\\QCubed\\Project\\Control\\TextBox', '\\QCubed\\Control\\EmailTextBox', '\\QCubed\\Control\\UrlTextBox'];
$controls[ControlType::BLOB] 			= ['\\QCubed\\Project\\Control\\TextBox'];
$controls[ControlType::CHAR] 			= ['\\QCubed\\Project\\Control\\TextBox'];
$controls[ControlType::INTEGER] 		= ['\\QCubed\\Control\\IntegerTextBox', '\\QCubed\\Project\\Jqui\\Spinner', '\\QCubed\\Project\\Jqui\\Slider'];
$controls[ControlType::FLOAT] 			= ['\\QCubed\\Control\\FloatTextBox'];
$controls[ControlType::BOOLEAN] 		= ['\\QCubed\\Project\\Control\\Checkbox', '\\QCubed\\Project\\Jqui\\Checkbox', '\\QCubed\\Project\\Control\\RadioButton', '\\QCubed\\Project\\Jqui\\RadioButton'];
$controls[ControlType::DATE_TIME] 		= ['\\QCubed\\Project\\Jqui\\Datepicker', '\\QCubed\\Project\\Jqui\\DatepickerBox', '\\QCubed\\Control\\DateTimePicker', '\\QCubed\\Control\\DateTimeTextBox'];
$controls[ControlType::DATE] 			= ['\\QCubed\\Project\\Jqui\\Datepicker', '\\QCubed\\Project\\Jqui\\DatepickerBox', '\\QCubed\\Control\\DateTimePicker', '\\QCubed\\Control\\DateTimeTextBox'];
$controls[ControlType::TIME] 			= ['\\QCubed\\Control\\DateTimePicker', '\\QCubed\\Control\\DateTimeTextBox'];
$controls[ControlType::SINGLE_SELECT] 	= ['\\QCubed\\Project\\Control\\ListBox', '\\QCubed\\Control\\RadioButtonList', '\\QCubed\\Project\\Jqui\\Autocomplete']; // Select one item from a list of items
$controls[ControlType::MULTI_SELECT] 	= ['\\QCubed\\Control\\CheckboxList', '\\QCubed\\Project\\Control\\ListBox']; // Many-to-many. \\QCubed\\Project\\Control\\ListBox works when in Multiselect mode
$controls[ControlType::TABLE] 			= ['\\QCubed\\Project\\Control\\DataGrid'];

return $controls;