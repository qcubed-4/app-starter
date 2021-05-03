# The `active` directory

This directory contains configuration files that are automatically included every
time QCubed starts up. These files are designed to be altered and customized by you.

Our composer installer will add and remove files from this directory when a package
is installed or uninstalled.

New file names here should generally match the package name they came from, to avoid
name collisions.

Files are loaded in ASCII alphabetical order. QCubed framework config files are
began either with a number to force a certain order, or
upper case letter. 3rd party config files should start with a lower case
letter so they install after these.