# The `control_registry` directory

This directory is managed by composer, and contains include files that are used
by the ModelConnectorEditor to match data column types with controls that can
edit that particular type of data. 

Generally, you should not need to edit or change files here. If you are doing a manual
install, or creating your own control type, simply drop in a new file here and its contents will
automatically get added to the list of controls.

If you uninstall a package, our composer installer will try to remove the matching file.

File names here should match the package names they came from to prevent name collissions.