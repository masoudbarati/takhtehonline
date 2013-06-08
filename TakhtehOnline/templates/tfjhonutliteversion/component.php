<?php
/**
 * @version		$Id: component.php 16465 2010-04-26 01:46:24Z eddieajau $
 * @package		Joomla.Site
 * @subpackage	tpl_beez2
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

$color = $this->params->get('templatecolor');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
    <link href='http://fonts.googleapis.com/css?family=Exo:300,400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/tfjhonutliteversion/css/print.css" type="text/css" />
</head>
<body class="contentpane">
	<div id="all">
	<div id="main">
		<jdoc:include type="message" />
		<jdoc:include type="component" />
		</div>
	</div>
</body>
</html>
