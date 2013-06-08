<?php
# HD-Background Selector          	          	          	              
# Copyright (C) 2012 by Hyde-Design  	   	   	   	   
# Homepage   : www.hyde-design.co.uk		   	   	   
# Author     : Hyde-Design    		   	   	   	   
# Email      : rich@hyde-design.co.uk 	   	   	   
# Version    : 1.3                        	   	    	
# License    : http://www.gnu.org/copyleft/gpl.html GNU/GPL    

// no direct access
defined('_JEXEC') or die('Restricted access');

//get the params

$hdbg_id    	   = $params->get("bgid", "body");
$hdbg_image    	   = $params->get("imagebg", "");
$hdbg_image_two    = $params->get("imagebgtwo", "");
$hdbg_image_three  = $params->get("imagebgthree", "");
$hdbg_image_four   = $params->get("imagebgfour", "");
$hdbg_image_five   = $params->get("imagebgfive", "");
$hdbg_image_six    = $params->get("imagebgsix", "");
$hdbg_image_seven  = $params->get("imagebgseven", "");
$hdbg_gradtop      = $params->get("gradtop", "");
$hdbg_gradbottom   = $params->get("gradbottom", "");
$hdbg_position 	   = $params->get("imageposition", "");
$hdbg_attachment   = $params->get("imageattachment", "");
$hdbg_repeat       = $params->get("imagerepeat", "");
$hdbg_color        = $params->get("bgcolor", "");
$hdbg_customcss    = $params->get("customcss", "");
$hdbg_importance   = $params->get("importance", "");
$hdbg_type         = $params->get("bgtype", "");
$spitout           = "";

$urlsniffer     = $params->get("urlsniffer", "");
$browsersniffer = $params->get("browsersniffer", "all");
$browser        = strtolower($_SERVER['HTTP_USER_AGENT']);
$current_domain = JURI::base();
$current_url    = $_SERVER['REQUEST_URI'];
$this_url       = $current_domain.$current_url;

// Change this value if you do not wish to use 'images/' as the root image folder.
$root_image        = "";

global $mainframe;

// Standard background image display
if ($hdbg_type=="standard") {$spitout = '<style type="text/css">
'.$hdbg_id.' {background-image: url("'.JURI::base().$root_image.$hdbg_image.'")'.$hdbg_importance.'; background-attachment:'.$hdbg_attachment.''.$hdbg_importance.'; background-position:'.$hdbg_position.''.$hdbg_importance.'; background-repeat:'.$hdbg_repeat.''.$hdbg_importance.'; background-color:'.$hdbg_color.''.$hdbg_importance.';}
'.$hdbg_customcss.'</style>'; }

// Multiple background image overlay display
 elseif ($hdbg_type=="overlay") {
$hdbg_one = ''; $hdbg_two = ''; $hdbg_three = ''; $hdbg_four = ''; $hdbg_five = ''; $hdbg_six = ''; $hdbg_seven = '';
$hdbg_one = 'url("'.JURI::base().$root_image.$hdbg_image.'") ';
if (!empty($hdbg_image_two)) {$hdbg_two = ', url("'.JURI::base().$root_image.$hdbg_image_two.'") ';};
if (!empty($hdbg_image_three)) {$hdbg_three = ', url("'.JURI::base().$root_image.$hdbg_image_three.'") ';};
if (!empty($hdbg_image_four)) {$hdbg_four = ', url("'.JURI::base().$root_image.$hdbg_image_four.'") ';};
if (!empty($hdbg_image_five)) {$hdbg_five = ', url("'.JURI::base().$root_image.$hdbg_image_five.'") ';};
if (!empty($hdbg_image_six)) {$hdbg_six = ', url("'.JURI::base().$root_image.$hdbg_image_six.'") ';}; 
if (!empty($hdbg_image_seven)) {$hdbg_seven = ', url("'.JURI::base().$root_image.$hdbg_image_seven.'")';};
$spitout = '<style type="text/css">'.$hdbg_id.' {background-image: '.$hdbg_one.$hdbg_two.$hdbg_three.$hdbg_four.$hdbg_five.$hdbg_six.$hdbg_seven.'; background-attachment: '.$hdbg_attachment.''.$hdbg_importance.'; background-position:'.$hdbg_position.''.$hdbg_importance.'; background-repeat:'.$hdbg_repeat.''.$hdbg_importance.'; background-color:'.$hdbg_color.''.$hdbg_importance.';}
'.$hdbg_customcss.'
</style>';}

// Random background image display
 elseif ($hdbg_type=="random") {
$randimage = '';
$randfigure = '7';
if ($hdbg_image_seven == '') {$randfigure = '6';}
if ($hdbg_image_six == '') {$randfigure = '5';}
if ($hdbg_image_five == '') {$randfigure = '4';}
if ($hdbg_image_four == '') {$randfigure = '3';}
if ($hdbg_image_three == '') {$randfigure = '2';}
if ($hdbg_image_two == '') {$randfigure = '1';}
$randbg = rand(1, $randfigure);
if ($randbg == 1) {$randimage = JURI::base().$root_image.$hdbg_image;};
if ($randbg == 2) {$randimage = JURI::base().$root_image.$hdbg_image_two;};
if ($randbg == 3) {$randimage = JURI::base().$root_image.$hdbg_image_three;};
if ($randbg == 4) {$randimage = JURI::base().$root_image.$hdbg_image_four;};
if ($randbg == 5) {$randimage = JURI::base().$root_image.$hdbg_image_five;};
if ($randbg == 6) {$randimage = JURI::base().$root_image.$hdbg_image_six;};
if ($randbg == 7) {$randimage = JURI::base().$root_image.$hdbg_image_seven;};
$spitout = '<style type="text/css">'.$hdbg_id.' {background-image: url("'.$randimage.'") '.$hdbg_importance.'; background-attachment: '.$hdbg_attachment.''.$hdbg_importance.'; background-position:'.$hdbg_position.''.$hdbg_importance.'; background-repeat:'.$hdbg_repeat.''.$hdbg_importance.'; background-color:'.$hdbg_color.''.$hdbg_importance.';}
'.$hdbg_customcss.'
</style>';
}

// Daily background image display
 elseif ($hdbg_type=="daily") {
 $todayimage = ''; $todaybg = date("w");
if ($todaybg == 0) {$todayimage = JURI::base().$root_image.$hdbg_image;};
if ($todaybg == 1) {$todayimage = JURI::base().$root_image.$hdbg_image_two;};
if ($todaybg == 2) {$todayimage = JURI::base().$root_image.$hdbg_image_three;};
if ($todaybg == 3) {$todayimage = JURI::base().$root_image.$hdbg_image_four;};
if ($todaybg == 4) {$todayimage = JURI::base().$root_image.$hdbg_image_five;};
if ($todaybg == 5) {$todayimage = JURI::base().$root_image.$hdbg_image_six;};
if ($todaybg == 6) {$todayimage = JURI::base().$root_image.$hdbg_image_seven;};
$spitout = '<style type="text/css">'.$hdbg_id.' {background-image: url("'.$todayimage.'") '.$hdbg_importance.'; background-attachment: '.$hdbg_attachment.''.$hdbg_importance.'; background-position:'.$hdbg_position.''.$hdbg_importance.'; background-repeat:'.$hdbg_repeat.''.$hdbg_importance.'; background-color:'.$hdbg_color.''.$hdbg_importance.';}
'.$hdbg_customcss.'
</style>';
}

// Gradient
 elseif ($hdbg_type=="gradient") {
$spitout = '<style type="text/css">'.$hdbg_id.' { background-color: #'.$hdbg_gradtop.'; background-color: #'.$hdbg_gradbottom.'; background-image: -moz-linear-gradient(top, #'.$hdbg_gradtop.', #'.$hdbg_gradbottom.'); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#'.$hdbg_gradtop.'), to(#'.$hdbg_gradbottom.')); background-image: -webkit-linear-gradient(top, #'.$hdbg_gradtop.', #'.$hdbg_gradbottom.');  background-image: -o-linear-gradient(top, #'.$hdbg_gradtop.', #'.$hdbg_gradbottom.'); background-image: linear-gradient(to bottom, #'.$hdbg_gradtop.', #'.$hdbg_gradbottom.');  background-repeat: repeat-x;   filter: progid:dximagetransform.microsoft.gradient(startColorstr=\'#ff'.$hdbg_gradtop.'\', endColorstr=\'#ff'.$hdbg_gradbottom.'\', GradientType=0);} </style>';
}

else {;};
 
// Render to screen

if ($urlsniffer=="")             
   { if ($browsersniffer=="all") { echo $spitout; } 
                                       elseif (ereg($browsersniffer, $browser)) { echo $spitout; };}
elseif (strstr($this_url, $urlsniffer)) 
   { if ($browsersniffer=="all") { echo $spitout; } 
                                       elseif (ereg($browsersniffer, $browser)) { echo $spitout; }; }; 
                                      