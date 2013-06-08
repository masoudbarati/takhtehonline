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

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

JHTML::_('behavior.framework', true);

// including base setup file
include_once(JPATH_ROOT . "/templates/" . $this->template . '/lib/php/tmptools.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/favicon.ico" />
<link href='http://fonts.googleapis.com/css?family=Exo:300,400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_css.css" type="text/css" />
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery-1.2.6.min.js" type="text/javascript"></script>

<script type="text/javascript">  $.noConflict(); // Code that uses other library's $ can follow here.
</script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/tools.js" type="text/javascript"></script>
</script>
</head>
<body>
<?php if ($_REQUEST[view] == 'featured') { ?>
<div id="top_wrapper">
<div id="top">
<!-- logo -->
<?php if ($logo): ?>
<a  title="<?php echo $app->getCfg('sitename'); ?>" href="index.php">
<img id="logo" src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" border="0" /></a>
<?php endif;?>
<?php if (!$logo ): ?>
	<h1 id="logo"><a href="index.php" title="<?php echo $app->getCfg('sitename'); ?>"><?php echo htmlspecialchars($templateparams->get('sitetitle'));?> <span><?php echo htmlspecialchars($templateparams->get('sitetitlespan'));?></span></a></h1>
   <span id="sitedesc"><?php echo htmlspecialchars($templateparams->get('sitedescription'));?></span>
<?php endif;?>
</div>
<div id="topmenu_wrapper">
<div id="topmenu"><jdoc:include type="modules" name="position-1" /></div>
</div>
</div>

<?php }else{ ?>

<div id="top_wrapper">
<div id="top">
<!-- logo -->
<?php if ($logo): ?>
<a  title="<?php echo $app->getCfg('sitename'); ?>" href="index.php">
<img id="logo" src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>"  alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" border="0" /></a>
<?php endif;?>
<?php if (!$logo ): ?>
	<h1 id="logo"><a href="index.php" title="<?php echo $app->getCfg('sitename'); ?>"><?php echo htmlspecialchars($templateparams->get('sitetitle'));?> <span><?php echo htmlspecialchars($templateparams->get('sitetitlespan'));?></span></a></h1>
   <span id="sitedesc"><?php echo htmlspecialchars($templateparams->get('sitedescription'));?></span>
<?php endif;?>
</div>
<div id="topmenu_wrapper">
<div id="topmenu"><jdoc:include type="modules" name="position-1" /></div>
</div>
<?php if($this->countModules('slide')) : ?>
<div id="slide_wrapper">
<div id="slide">
<jdoc:include type="modules" name="slide" />
</div>
</div>
<?php endif; ?>

<div id="topbottom"><jdoc:include type="modules" name="position-2" /></div>
</div>

<?php } ?>

 <jdoc:include type="message" />
<div id="main">

<?php if(($this->countModules('left') >= 1) && ($this->countModules('right') >= 1)) { ?>
<div id="sidebar-left"><jdoc:include type="modules" name="left" style="normal" headerLevel="3" /></div>
<div id="contentlr">
      <jdoc:include type="component" />  
</div>
<div id="sidebar-right"><jdoc:include type="modules" name="right" style="normal" headerLevel="3" /></div>
<?php } ?>
<?php if(($this->countModules('left') >= 1) && ($this->countModules('right') == 0)) { ?>
<div id="sidebar-left"><jdoc:include type="modules" name="left" style="normal" headerLevel="3" /></div>
<div id="contentl">
      <jdoc:include type="component" />  
</div>
<?php } ?>
<?php if(($this->countModules('left') == 0) && ($this->countModules('right') >= 1)) { ?>
<div id="contentr">
      <jdoc:include type="component" />  
</div>
<div id="sidebar-right"><jdoc:include type="modules" name="right" style="normal" headerLevel="3" /></div>
<?php } ?>
<?php if(($this->countModules('left') == 0) && ($this->countModules('right') == 0)) { ?>
<div id="contentfull">
      <jdoc:include type="component" />  
</div>
<?php } ?>

</div>

<div id="bottom_wrapper">

		<?php if ($this->countModules('user1 or user2 or user5 or user6')) : ?>
			<div id="bottom_modules">
				<?php if ($this->countModules('user1')) : ?>
					<div id="user1-<?php echo $userwidth; ?>">
                    		<jdoc:include type="modules" name="user1" style="bottom" />
                	</div>
				<?php endif; ?>
            
				<?php if ($this->countModules('user2')) : ?>
					<div id="user2-<?php echo $userwidth; ?>">
                    		<jdoc:include type="modules" name="user2" style="bottom" />
                	</div>
				<?php endif; ?>
            
				<?php if ($this->countModules('user5')) : ?>
					<div id="user5-<?php echo $userwidth; ?>">
                    		<jdoc:include type="modules" name="user5" style="bottom" />
                	</div>
				<?php endif; ?>
				<?php if ($this->countModules('user6')) : ?>
					<div id="user6-<?php echo $userwidth; ?>">
                    		<jdoc:include type="modules" name="user6" style="bottom" />
                	</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		
<?php if($this->countModules('bottomgallery')) : ?>
<div id="bottomgallery_wrapper">
<div id="bottomgallery">
<jdoc:include type="modules" name="bottomgallery" style="bottom" />
</div>
</div>
<?php endif; ?>
		
<div id="footer"><jdoc:include type="modules" name="user3" /></div>
<div id="footbottom">
<!-- You CAN NOT remove (or unreadable) these links without our permission. When you don't want to have link back on the template footer, you have to pay 9 euro via PayPal: contact@templatesforjoomla.eu Please read license.txt -->
<p id="author">Template by TFJ <a href="http://templatesforjoomla.eu" title="Free and Premium Joomla Templates" target="_blank">Joomla Templates</a> and template sponsor: <a href="http://www.przeprowadzkikrakow.info" title="TransFach" target="_blank">Przeprowadzki Kraków</a>.</p>
<!-- You CAN NOT remove (or unreadable) these links without our permission. When you don't want to have link back on the template footer, you have to pay 9 euro via PayPal: contact@templatesforjoomla.eu Please read license.txt -->
</div>
<div id="gotop"><a href="#" title="<?php echo htmlspecialchars($templateparams->get('backtotop'));?>"><?php echo htmlspecialchars($templateparams->get('backtotop'));?></a></div>
</div>
<jdoc:include type="modules" name="debug" />
</body>
</html>
