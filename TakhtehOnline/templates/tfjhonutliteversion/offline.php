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
/*
 *      License for offline.php file - GNU General Public License version 3 or later;
/*
/*******************************************************************************************/
 
// No direct access.
defined('_JEXEC') or die;

$app = JFactory::getApplication();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
    <link href='http://fonts.googleapis.com/css?family=Doppio+One&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/offline.css" type="text/css" />
</head>
<body>
<jdoc:include type="message" />
	 		<h1><?php echo $app->getCfg('sitename'); ?></h1>
			<div id="slide_wrapper"><?php echo $app->getCfg('offline_message'); ?></div>
<div id="box">
     <div class="outline">
			<form action="index.php" method="post" name="login" id="form-login">
				<fieldset class="input">
					<p class="username">
						<label for="username"><?php echo JText::_('JGLOBAL_USERNAME') ?></label>
						<br />
						<input name="username" id="username" type="text" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME') ?>" />
					</p>
					<p class="password">
						<label for="passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
						<br />
						<input type="password" name="password" class="inputbox" alt="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" id="passwd" />
					</p>
					<p class="remember">
						<label for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?></label>
						<input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" id="remember" />
					</p>
					<div class="buttons">
						<input type="submit" name="Submit" class="button" value="<?php echo JText::_('JLOGIN') ?>" />
					</div>
					<input type="hidden" name="option" value="com_users" />
					<input type="hidden" name="task" value="user.login" />
					<input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()) ?>" />
					<?php echo JHtml::_('form.token'); ?>
				</fieldset>
			</form>
		</div>
    </div>
</body>
</html>