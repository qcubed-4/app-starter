# About `control` directory

The classes here inherit from base control classes in the qcubed framework.
Whenever the framework refers to a class, it refers to the classes here.
THe base classes are not editable, but the classes in this directory are. The end
result of this is that these classes allow you to easily inject code into the control famework
allowing you to change pretty much any aspect of the control process.

For example, it allows you to define global settings for your controls (e.g. all TextBox
instances should by default be rendered with the CSS class "textbox").  And
specifically in the ControlBase.php file, you will be able to define any global
renderers (e.g. `RenderWithName`).

Feel free to make any changes to these customizations as you wish.

##Control Class Hierarchy
Typical control structure looks like this:

IntegerTextBox->
TextBox->
TextBoxBase->
ControlBase->
AbstractControlBase