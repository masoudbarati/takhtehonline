<?php 

/*******************************************************************************************/
/*
/*		Designed by 'AS Designing'
/*		Web: http://www.asdesigning.com
/*		Web: http://www.astemplates.com
/*		License: Creative Commons
/*
/*******************************************************************************************/


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// General Parameters


$page_width 				= 960;
$content_width 				= 960;
$padding 					= 30;
$sidebar_modulepadding		= 25;
$main_sepwidth 				= 25;
$main_modulepadding			= 25;
$footer_sidepadding		 	= 30;
$footer_modulepadding 		= 25;

$content_width = $page_width	= $this->params->get('page_width'); 
$sidebar_width 					= $this->params->get('sidebar_width');


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Template styles


$tmpl_style		= $this->params->get('tmpl_style'); 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Body patterns and colors


$body_bgpattern			= '';
if($this->params->get('body_bgpattern'))
	$body_bgpattern		= 'background-image: url("' . $this->baseurl . '/' . $this->params->get('body_bgpattern') . '");';

$body_bgcolor			= '';
if($this->params->get('body_bgcolor'))
	$body_bgcolor 		= 'background-color: #' . $this->params->get('body_bgcolor') . ';';
	

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Body font family


$body_fontfamily 		= $this->params->get('body_fontfamily');

$google_fontlink	= '';
$google_font		= '';

switch($body_fontfamily)
{
	case 'Acme':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Acme&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Acme', Arial, serif;";
		break;	
	case 'Advent Pro:100':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:100&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Advent Pro', Arial, serif; font-weight: 100;";
		break;	
	case 'Advent Pro:200':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:200&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Advent Pro', Arial, serif; font-weight: 200;";		
		break;	
	case 'Advent Pro:300':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Advent Pro', Arial, serif; font-weight: 300;";		
		break;	
	case 'Advent Pro:400':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Advent Pro', Arial, serif; font-weight: 400;";		
		break;	
	case 'Advent Pro:500':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Advent Pro', Arial, serif; font-weight: 500;";		
		break;	
	case 'Advent Pro:600':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Advent Pro', Arial, serif; font-weight: 600;";		
		break;	
	case 'Advent Pro:700':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Advent Pro', Arial, serif; font-weight: 700;";		
		break;	
	case 'Arimo:400':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Arimo', Arial, serif; font-weight: 400;";		
		break;	
	case 'Arimo:400italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Arimo', Arial, serif; font-weight: 400; font-style: italic;";				
		break;	
	case 'Arimo:700':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Arimo', Arial, serif; font-weight: 700;";						
		break;	
	case 'Arimo:700italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Arimo', Arial, serif; font-weight: 700; font-style: italic;";						
		break;	
	case 'Average':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Average&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Average', Arial, serif;";
		break;	
	case 'Convergence':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Convergence&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Convergence', Arial, serif;";
		break;	
	case 'Cuprum:400':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Cuprum', Arial, serif; font-weight: 400;";
		break;	
	case 'Cuprum:400italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Cuprum', Arial, serif; font-weight: 400; font-style: italic;";
		break;	
	case 'Cuprum:700':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Cuprum', Arial, serif; font-weight: 700;";
		break;	
	case 'Cuprum:700italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Cuprum', Arial, serif; font-weight: 700; font-style: italic;";
		break;	
	case 'Exo:100':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:100&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 100;";
		break;	
	case 'Exo:100italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:100italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 100; font-style: italic;";
		break;	
	case 'Exo:200':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:200&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 200;";
		break;	
	case 'Exo:200italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:200italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 200; font-style: italic;";
		break;	
	case 'Exo:300':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 300;";
		break;	
	case 'Exo:300italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:300italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 300; font-style: italic;";
		break;	
	case 'Exo:400':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 400;";
		break;	
	case 'Exo:400italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 400; font-style: italic;";
		break;	
	case 'Exo:500':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 500;";
		break;	
	case 'Exo:500italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:500italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 500; font-style: italic;";
		break;	
	case 'Exo:600':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 600;";
		break;	
	case 'Exo:600italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:600italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 600; font-style: italic;";
		break;	
	case 'Exo:700':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 700;";
		break;	
	case 'Exo:700italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 700; font-style: italic;";
		break;	
	case 'Exo:800':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:800&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 800;";
		break;																																																															
	case 'Exo:800italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:800italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 800; font-style: italic;";
		break;	
	case 'Exo:900':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:900&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 900;";
		break;	
	case 'Exo:900italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:900italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Exo', Arial, serif; font-weight: 900; font-style: italic;";
		break;	
	case 'Fredoka One':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Fredoka+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Fredoka One', Arial, serif;";
		break;	
	case 'Hammersmith One':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Hammersmith+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Hammersmith One', Arial, serif;";
		break;	
	case 'Homenaje':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Homenaje&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Homenaje', Arial, serif;";
		break;	
	case 'Jockey One':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Jockey+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Jockey One', Arial, serif;";
		break;	
	case 'Jura:300':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Jura', Arial, serif; font-weight: 300;";
		break;	
	case 'Jura:400':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Jura', Arial, serif; font-weight: 400;";
		break;	
	case 'Jura:500':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Jura', Arial, serif; font-weight: 500;";
		break;	
	case 'Jura:600':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Jura', Arial, serif; font-weight: 600;";
		break;	
	case 'Macondo':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Macondo&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Macondo', Arial, serif;";
		break;	
	case 'Marmelad':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Marmelad&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: ' font-weight: 700; font-style: italic;', Arial, serif;";
		break;	
	case 'Montserrat':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Montserrat&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: ' font-weight: 700; font-style: italic;', Arial, serif;";
		break;	
	case 'Muli:300':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Muli', Arial, serif; font-weight: 300;";
		break;	
	case 'Muli:300italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:300italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Muli', Arial, serif; font-weight: 300; font-style: italic;";
		break;	
	case 'Muli:400':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Muli', Arial, serif; font-weight: 400;";
		break;	
	case 'Muli:400italic':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Muli', Arial, serif; font-weight: 400; font-style: italic;";
		break;	
	case 'Numans':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Numans&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Numans', Arial, serif;";
		break;	
	case 'Oxygen':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Oxygen&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Oxygen', Arial, serif;";
		break;	
	case 'Pontano Sans':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Pontano Sans', Arial, serif;";
		break;	
	case 'Prosto One':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Prosto+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Prosto One', Arial, serif;";
		break;	
	case 'Russo One':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Russo+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Russo One', Arial, serif;";
		break;	
	case 'Salsa':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Salsa&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Salsa', Arial, serif;";
		break;	
	case 'Signika:300':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Signika', Arial, serif; font-weight: 300;";
		break;	
	case 'Signika:400':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Signika', Arial, serif; font-weight: 400;";
		break;	
	case 'Signika:600':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Signika', Arial, serif; font-weight: 600;";
		break;	
	case 'Signika:700':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Signika', Arial, serif; font-weight: 700;";
		break;	
	case 'Six Caps':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Six+Caps&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Six Caps', Arial, serif;";

		break;	
	case 'Tulpen One':
		$google_fontlink = "<link href='http://fonts.googleapis.com/css?family=Tulpen+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_font = "font-family: 'Tulpen One', Arial, serif;";
		break;	
} 

if(!$google_font)
{
	$body_fontfamily = "font-family: " . $body_fontfamily;
}
else
{
	$body_fontfamily = $google_font;	
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Body heading font family
 
 
$body_hfontfamily 		= $this->params->get('body_hfontfamily');

$google_hfontlink	= '';
$google_hfont		= '';

switch($body_hfontfamily)
{
	case 'Acme':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Acme&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Acme', Arial, serif;";
		break;	
	case 'Advent Pro:100':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:100&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Advent Pro', Arial, serif; font-weight: 100;";
		break;	
	case 'Advent Pro:200':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:200&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Advent Pro', Arial, serif; font-weight: 200;";		
		break;	
	case 'Advent Pro:300':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Advent Pro', Arial, serif; font-weight: 300;";		
		break;	
	case 'Advent Pro:400':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Advent Pro', Arial, serif; font-weight: 400;";		
		break;	
	case 'Advent Pro:500':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Advent Pro', Arial, serif; font-weight: 500;";		
		break;	
	case 'Advent Pro:600':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Advent Pro', Arial, serif; font-weight: 600;";		
		break;	
	case 'Advent Pro:700':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Advent+Pro:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Advent Pro', Arial, serif; font-weight: 700;";		
		break;	
	case 'Arimo:400':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Arimo', Arial, serif; font-weight: 400;";
		break;	
	case 'Arimo:400italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Arimo', Arial, serif; font-weight: 400; font-style: italic;";				
		break;	
	case 'Arimo:700':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Arimo', Arial, serif; font-weight: 700;";						
		break;	
	case 'Arimo:700italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Arimo:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Arimo', Arial, serif; font-weight: 700; font-style: italic;";						
		break;	
	case 'Average':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Average&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Average', Arial, serif;";
		break;	
	case 'Convergence':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Convergence&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Convergence', Arial, serif;";
		break;	
	case 'Cuprum:400':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Cuprum', Arial, serif; font-weight: 400;";
		break;	
	case 'Cuprum:400italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Cuprum', Arial, serif; font-weight: 400; font-style: italic;";
		break;	
	case 'Cuprum:700':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Cuprum', Arial, serif; font-weight: 700;";
		break;	
	case 'Cuprum:700italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Cuprum:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Cuprum', Arial, serif; font-weight: 700; font-style: italic;";
		break;	
	case 'Exo:100':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:100&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 100;";
		break;	
	case 'Exo:100italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:100italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 100; font-style: italic;";
		break;	
	case 'Exo:200':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:200&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 200;";
		break;	
	case 'Exo:200italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:200italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 200; font-style: italic;";
		break;	
	case 'Exo:300':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 300;";
		break;	
	case 'Exo:300italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:300italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 300; font-style: italic;";
		break;	
	case 'Exo:400':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 400;";
		break;	
	case 'Exo:400italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 400; font-style: italic;";
		break;	
	case 'Exo:500':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 500;";
		break;	
	case 'Exo:500italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:500italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 500; font-style: italic;";
		break;	
	case 'Exo:600':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 600;";
		break;	
	case 'Exo:600italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:600italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 600; font-style: italic;";
		break;	
	case 'Exo:700':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 700;";
		break;	
	case 'Exo:700italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:700italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 700; font-style: italic;";
		break;	
	case 'Exo:800':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:800&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 800;";
		break;																																																															
	case 'Exo:800italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:800italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 800; font-style: italic;";
		break;	
	case 'Exo:900':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:900&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 900;";
		break;	
	case 'Exo:900italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Exo:900italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Exo', Arial, serif; font-weight: 900; font-style: italic;";
		break;	
	case 'Fredoka One':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Fredoka+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Fredoka One', Arial, serif;";
		break;	
	case 'Hammersmith One':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Hammersmith+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Hammersmith One', Arial, serif;";
		break;	
	case 'Homenaje':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Homenaje&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Homenaje', Arial, serif;";
		break;	
	case 'Jockey One':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Jockey+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Jockey One', Arial, serif;";
		break;	
	case 'Jura:300':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Jura', Arial, serif; font-weight: 300;";
		break;	
	case 'Jura:400':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Jura', Arial, serif; font-weight: 400;";
		break;	
	case 'Jura:500':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:500&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Jura', Arial, serif; font-weight: 500;";
		break;	
	case 'Jura:600':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Jura:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Jura', Arial, serif; font-weight: 600;";
		break;	
	case 'Macondo':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Macondo&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Macondo', Arial, serif;";
		break;	
	case 'Marmelad':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Marmelad&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: ' font-weight: 700; font-style: italic;', Arial, serif;";
		break;	
	case 'Montserrat':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Montserrat&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: ' font-weight: 700; font-style: italic;', Arial, serif;";
		break;	
	case 'Muli:300':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Muli', Arial, serif; font-weight: 300;";
		break;	
	case 'Muli:300italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:300italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Muli', Arial, serif; font-weight: 300; font-style: italic;";
		break;	
	case 'Muli:400':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Muli', Arial, serif; font-weight: 400;";
		break;	
	case 'Muli:400italic':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Muli:400italic&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Muli', Arial, serif; font-weight: 400; font-style: italic;";
		break;	
	case 'Numans':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Numans&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Numans', Arial, serif;";
		break;	
	case 'Oxygen':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Oxygen&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Oxygen', Arial, serif;";
		break;	
	case 'Pontano Sans':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Pontano Sans', Arial, serif;";
		break;	
	case 'Prosto One':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Prosto+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Prosto One', Arial, serif;";
		break;	
	case 'Russo One':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Russo+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Russo One', Arial, serif;";
		break;	
	case 'Salsa':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Salsa&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Salsa', Arial, serif;";
		break;	
	case 'Signika:300':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:300&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Signika', Arial, serif; font-weight: 300;";
		break;	
	case 'Signika:400':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:400&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Signika', Arial, serif; font-weight: 400;";
		break;	
	case 'Signika:600':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:600&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Signika', Arial, serif; font-weight: 600;";
		break;	
	case 'Signika:700':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Signika:700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Signika', Arial, serif; font-weight: 700;";
		break;	
	case 'Six Caps':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Six+Caps&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Six Caps', Arial, serif;";
		break;	
	case 'Tulpen One':
		$google_hfontlink = "<link href='http://fonts.googleapis.com/css?family=Tulpen+One&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>";
		$google_hfont = "font-family: 'Tulpen One', Arial, serif;";
		break;	
} 

if(!$google_hfont)
{
	$body_hfontfamily = "font-family: " . $body_hfontfamily;
}
else
{
	$body_hfontfamily = $google_hfont;	
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$body_fontsize 			= $this->params->get('body_fontsize'); 
$body_fontweight 		= $this->params->get('body_fontweight'); 
$body_fontstyle 		= $this->params->get('body_fontstyle'); 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$bgreadmore_ico 		= $this->baseurl . '/templates/' . $this->template . '/images/bg.readmore.ico.png';
$listimg_footer			= $this->baseurl . '/templates/' . $this->template . '/images/listimg.grey.png';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$custom_css 			= htmlspecialchars($this->params->get('custom_css')); 


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Breadcrumbs


$breadrow_texttransform 	= $this->params->get('breadrow_texttransform');
$breadrow_textalign		 	= $this->params->get('breadrow_textalign');
$breadrow_fontsize 			= $this->params->get('breadrow_fontsize');
$breadrow_fontweight		= $this->params->get('breadrow_fontweight');

$breadrow_fontcolor 		= '';
if($this->params->get('breadrow_fontcolor'))
	$breadrow_fontcolor 		= 'color: #' . $this->params->get('breadrow_fontcolor') . ';';

$breadrow_hoverfontcolor 	= '';
if($this->params->get('breadrow_hoverfontcolor'))
	$breadrow_hoverfontcolor 	= 'color: #' . $this->params->get('breadrow_hoverfontcolor') . ';';
			
			
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header parameters
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 1 
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 1 (Logo)


$logo_type 			= $this->params->get('logo_type',0); 
$logo_img 			= $this->baseurl . '/templates/' . $this->template . '/images/companylogo.png';

if ($this->params->get('logo_img')) 
{ 
	$logo_img = $this->params->get('logo_img');

	if($logo_img == 'companylogo.png') 
	{
		$logo_img = $this->baseurl . '/templates/' . $this->template . '/images/companylogo.png';
	}
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$logo_txt 					= htmlspecialchars($this->params->get('logo_txt')); 
$logo_txtfontsize 			= $this->params->get('logo_txtfontsize'); 
$logo_txtfontstyle 			= $this->params->get('logo_txtfontstyle'); 
$logo_txtfontweight 		= $this->params->get('logo_txtfontweight'); 
$logo_txtcolor 				= '';
if($this->params->get('logo_txtcolor'))
	$logo_txtcolor 				= 'color: #' . $this->params->get('logo_txtcolor') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 1 (Slogan)


$slogan_txt 				= htmlspecialchars($this->params->get('slogan_txt')); 
$slogan_txtfontsize 		= $this->params->get('slogan_txtfontsize'); 
$slogan_txtfontstyle 		= $this->params->get('slogan_txtfontstyle'); 
$slogan_txtfontweight 		= $this->params->get('slogan_txtfontweight'); 
$slogan_txtcolor 			= '';
if($this->params->get('slogan_txtcolor'))
	$slogan_txtcolor 			= 'color: #' . $this->params->get('slogan_txtcolor') . ';';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Header - Row 3
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$header_row3 = 0;
$header_row3 += (bool) $this->countModules('slider');

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$row3col2_width = 'auto';


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Left Column Parameters
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

$sidecolumn123_inputwidth = $sidebar_width - 44;

$leftcolumn = 0;
$leftcolumn += (bool) $this->countModules('position-0');
$leftcolumn += (bool) $this->countModules('position-40');
$leftcolumn += (bool) $this->countModules('position-41');
$leftcolumn += (bool) $this->countModules('position-42');


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main column parameters
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$main_location 	= 'left';	


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Main Column - Dimensions


$main_width = $content_width;

if ($leftcolumn)
{
	$main_width = $content_width - $sidebar_width - $padding;
}


// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


$main_blogcols2width = 0;
$main_blogcols3width = 0;
$main_blogcols4width = 0;

$main_componentwidth = $main_width;

$main_blogcols2width = ($main_componentwidth - $padding) / 2;
$main_blogcols3width = ($main_componentwidth - $padding * 2) / 3;
$main_blogcols4width = ($main_componentwidth - $padding * 3) / 4;


if(JRequest::getVar('tmpl') != 'component')
{
	if($featured_view)
	{
		$featured_rows = ceil($menu_params->get('num_intro_articles') / $menu_params->get('num_columns') - 1);
	}
}


?>

