<?php
require_once(JPATH_SITE.DS.'components'.DS.'com_content'.DS.'helpers'.DS.'route.php');

// get params
$logo               = $this->params->get('logo');
$backtotop          = $this->params->get('backtotop');
$app                = JFactory::getApplication();
$templateparams     = $app->getTemplate(true)->params;

//Modules handling
$user = 0;
if ($this->countModules('user1')) $user++;
if ($this->countModules('user2')) $user++;
if ($this->countModules('user5')) $user++;
if ($this->countModules('user6')) $user++;
if ( $user == 4 ) {
	$userwidth = '4';
} elseif ( $user == 3 ) {
	$userwidth = '3';
} elseif ( $user == 2 ) {
	$userwidth = '2';
} elseif ($user == 1) {
	$userwidth = '1';
}


?>