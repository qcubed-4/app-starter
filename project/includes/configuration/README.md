# About `configuration` directory

This is the central location for all included configuration files.  Feel free to include
any new classes or include files in this directory.

## Files and Folders in the configuration directory:

### configuration.inc.php

This reads configuration files out of the *active* directory. These files
are loaded near the beginning of the application startup process, and contain
important system-wide defines. However, they are also very flexible, and
you can change definitions in there to suit your needs.

### codegen_settings.xml

This file controls overall settings for parts of the code generation. Feel free
to change these as needed.

### *active* and *inactive*
The active directory holds currently active system definition files. The
inactive directory is just a placeholder to put any definition files that you
want to save, but are not currently active.

### *templates*
This directory contains pointers to various locations where codegen template
files can be found. This directory is populated by our composer installer, and
allows our own libraries and 3rd party libraries to easily inject template files
into the code generation process.


## Codegen Notes

QCubed is set up to generate a default set of objects and forms to get you started with your application.
This is called “codegen”. The notes below will help you understand the process and how to customize it to your needs.
Ideally, you should customize the codegen process first before starting to write you application code,
but we know that development does not go always as planned, and the whole QCubed system is set up so that you can
separate out your hand written code from the generated code, and continue to tweak the codegen process and re-generate code at any time.

The codegen process starts at the QCubed start screen by clicking on the codegen link.
PHP is executed to generate the files. Therefore, the target directories for codegen will need to be writable by the web server process.

The codegen process works by instantiating a CodeGen object. This object then looks in the template directories and begins
to include the php files there that start with an underscore (_). These templates then include other files, which in turn
may include other template files. This combination will eventually generate the forms, model connectors, and data table
interface classes that you will base your application on.


