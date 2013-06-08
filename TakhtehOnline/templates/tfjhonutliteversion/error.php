<?php
/*******************************************************************************************/
/*
/*	    TFJ HONUT FREE LITE VERSION Joomla! 2.5 Template - May 2013
/*      Package tpl-tfj-honut-free-lite-j25.zip
/*	    Version 1.0
/*
/*	    This template/design is released under the Creative Commons Attribution 3.0 license.
/*
/*      This means that it can be used for private and commercial purposes, edited freely 
/*	    or redistributed as long as you keep the link back to template sponsors.
/*
/*      You CAN NOT remove (or unreadable) these links without our permission. 
/*	    When you don't want to have link back on the template footer,
/*	    you have to pay 9 euro via PayPal: contact@templatesforjoomla.eu 
/*
/*      BUY LICENSE PREMIUM VERSION!
/*      Only in Premium Version Full Quickstart Instalation Package and footer link remove option.
/*      What is quickstart package? - "Quickstart Package" is a TFJ HONUT PRO Template + Joomla 2.5 + all content, all modules, all components and settings used in demo site.
/*
/*      How to install Quickstart package?
/*      Quickstart Package install exactly the same as a normal Joomla! installation package. (To get know more about technical requirements to run Joomla! please visit: Joomla technical requirements).
/*
/*      Quickstart Package Extra Extensions (Components, Modules, Plugin) Included:
/*      Automatic Slideshow Module on frontpage. Nivo Slider is a lightweight Joomla jQuery slideshow module for creating good-looking image sliders. It simply converts an element that wraps images into a slider.
/*      Gallery plugin & module - Sigplus Gallery (Sigplus Image Gallery Plus is a straightforward way to add image or photo galleries to a Joomla article with a simple syntax. It takes a matter of minutes to set up a gallery but those who are looking for a powerful gallery solution will not be disappointed either: sigplus is suitable for both beginner and advanced users.
/*      Xmap - the best sitemap component.
/*      JCE editor - the bes WYSiWYG editor.
/*      Extra SEO SEF plugin automatically generates description meta tags by pulling text from the content to help with SEO. It also gives you the ability to set different title configurations.
/*      Extra Cache plugin.
/*      Multilevel drop-down menu.
/*      Social Media Icons Module.
/*      Footer links remove options.
/*      Support.
/*      And more...
/*      
/*      More information on http://templatesforjoomle.eu
/*
/*******************************************************************************************/

defined('_JEXEC') or die;
if (!isset($this->error)) {
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false; 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<title><?php echo $this->error->getCode(); ?> - <?php echo $this->title; ?></title>
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/error.css" type="text/css" />
<script type="text/javascript">
function timering(seconds){
   if(seconds > 0){
    seconds--;
    document.getElementById('timing').innerHTML = seconds;
    setTimeout('timering( '+ seconds +' )',1000);
   }
}
e = 0;
function go(seconds, url){
setTimeout('timering( '+ seconds +' )',1000);
setTimeout('self.location="'+url+'"',seconds*1000);
}
</script> 
</head>
<body>
<body onload="go(20, '<?php echo $this->baseurl; ?>')">
<div id="top_wrapper">
   	<div id="box"><div class="outline">
	    <h1><?php echo $this->error->getCode(); ?></h1>
        <h2><?php echo $this->error->getMessage(); ?></h2>
	    <p class="info">You are being redirected to homepage</p>
     </div>
	 </div>
</div>
<div id="timing">20</div>
<div id="bottom_wrapper">
		<div id="box2">	
			<div id="error-box">
			<p class="info"><strong><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></strong></p>
				<ol>
					<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_REQUESTED_RESOURCE_WAS_NOT_FOUND'); ?></li>
					<li><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></li>
				</ol>
			<p class="info"><strong><?php echo JText::_('JERROR_LAYOUT_PLEASE_TRY_ONE_OF_THE_FOLLOWING_PAGES'); ?></strong></p>

				<ul>
					<li><a href="<?php echo $this->baseurl; ?>/index.php" title="<?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></li>
					<li><a href="<?php echo $this->baseurl; ?>/index.php?option=com_search" title="<?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?>"><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></a></li>

				</ul>

			<p class="info"><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
			<div id="techinfo">
			
				<?php if ($this->debug) :
					echo $this->renderBacktrace();
				endif; ?>
		
			</div>
			</div>
		</div>
</div>
</body>
</html>
