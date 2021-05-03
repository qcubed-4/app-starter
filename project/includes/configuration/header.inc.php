<?php
	// This example header.inc.php is intended to be modfied for your application.

use QCubed as Q;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php echo(QCUBED_ENCODING); ?>" />
<?php if (isset($strPageTitle)) { ?>
		<title><?php Q\QString::htmlEntities($strPageTitle); ?></title>
<?php } ?>
		<?php
        if (isset($this)) {
            $this->renderStyles();
        }  else { // for start page and other pages without form ?>
        <link href="<?= QCUBED_CSS_URL ?>/qcubed.css" rel="stylesheet">
<?php   } ?>
	</head>
	<body>
		<section id="content">