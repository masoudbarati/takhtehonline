<?php /**  * @copyright	Copyright (C) 2013 iJoomlaTemplates.com - All Rights Reserved. **/ defined( '_JEXEC' ) or die( 'Restricted access' );
$jquery			= $this->params->get('jquery');
$scrolltop		= $this->params->get('scrolltop');
$superfish		= $this->params->get('superfish');
$logo			= $this->params->get('logo');
$logotype		= $this->params->get('logotype');
$sitetitle		= $this->params->get('sitetitle');
$sitedesc		= $this->params->get('sitedesc');
$app			= JFactory::getApplication();
$doc			= JFactory::getDocument();
$templateparams	= $app->getTemplate(true)->params;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
<jdoc:include type="head" />
<?php include "functions.php"; ?>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0;">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/styles.css" type="text/css" />
<?php if ($jquery == 'yes' ) : ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.noconflict.js"></script>
<?php endif; ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bootstrap/css/bootstrap.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/bootstrap/js/bootstrap.min.js"></script>
<?php if ($scrolltop == 'yes' ) : ?><script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/scrolltopcontrol.js"></script><?php endif; ?>
<?php if ($superfish == 'yes' ) : ?>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/hoverIntent.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/superfish.js"></script>
    <script type="text/javascript">
		jQuery(window).bind('resize load',function(){
		if( jQuery(this).width() > 600 ){
			jQuery('#nav ul.menu').addClass('sf-js-enabled');
						jQuery('#nav ul.menu').superfish({
							hoverClass	: 'sfHover',
							pathClass	: 'overideThisToUse',
							pathLevels	: 1,
							delay		: 800,
							animation	: {opacity:'show'},
							speed		: 'normal',
							autoArrows	: false,
							dropShadows : true,
							disableHI	: false						
						});	
		} else {
			jQuery('#nav ul.menu').removeClass('sf-js-enabled');		
		}});	
</script>
<?php endif; ?>
<script type="text/javascript">
	jQuery(document).ready(function($){
		$('#header').prepend('<a id="menu-icon"></a>');
		$("#menu-icon").on("click", function(){
			$("#nav").slideToggle();
			$(this).toggleClass("active");
		});
	});
</script>
</head>
<body class="background">
<div id="scroll-top"></div>
        	<?php if ($this->countModules('menu or search')) : ?>
        	<div id="nav-w">
            <div id="nav">
		    	<jdoc:include type="modules" name="menu" style="none" />
            <?php if ($this->countModules('search')) : ?>
        	<div id="search">
		    	<jdoc:include type="modules" name="search" style="none" />              
            </div>
            <?php endif; ?>                
            </div>            
            </div>
            <div class="clr"></div>
        	<?php endif; ?>
<div id="header-w">
    <div id="header" class="row-fluid">
    <?php if ($logotype == 'image' ) : ?>
    <?php if ($logo != null ) : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>"><img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" /></a></div>
    <?php else : ?>
    <div class="logo"><a href="<?php echo $this->baseurl ?>/"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/logo.png" border="0"></a></div>
    <?php endif; ?><?php endif; ?> 
    <?php if ($logotype == 'text' ) : ?>
    <div class="logo text"><a href="<?php echo $this->baseurl ?>"><?php echo htmlspecialchars($sitetitle);?></a></div>
    <?php endif; ?>
    <?php if ($sitedesc !== '' ) : ?>
    <div class="sitedescription"><?php echo htmlspecialchars($sitedesc);?></div>
    <?php endif; ?>   
        	<?php if ($this->countModules('top')) : ?>
            <div id="top-mod">           
            <div id="top">
				<jdoc:include type="modules" name="top" style="none" />
			</div>
            </div>
        	<?php endif; ?>
        	<?php if ($this->countModules('social')) : ?>
            <div id="social">           
				<jdoc:include type="modules" name="social" style="none" />
            </div>
        	<?php endif; ?>                                
	</div>       
</div>
           
<div id="main"> 
	<div id="wrapper-w"><div id="wrapper">
        <div id="comp-w">
			<?php if ($this->countModules('slideshow')) : ?> 
                <div id="slide-w">
                    <jdoc:include type="modules" name="slideshow"  style="none"/> 
                    <div class="clr"></div>          
                </div>
            <?php endif; ?>        
        <?php if ($this->countModules('breadcrumbs')) : ?>
        	<jdoc:include type="modules" name="breadcrumbs"  style="none"/>
        <?php endif; ?>
					<?php if ($this->countModules('user1')) : ?>
                    <div id="user1w"><div id="user1" class="row-fluid">
                        <jdoc:include type="modules" name="user1" style="ajgrid" grid="<?php echo $user1_width; ?>" />
                        <div class="clr"></div> 
                    </div></div>
                    <?php endif; ?>
        <div class="row-fluid">
                    <?php if ($this->countModules('left')) : ?>
                    <div id="leftbar-w" class="span3 pull-left">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="left" style="ajgrid" />                     
                    </div>
                    </div>
                    <?php endif; ?>                          
                        <div id="comp" class="span<?php echo $compwidth ?>">
                            <div id="comp-i">
								<?php if ($this->countModules('user2')) : ?>
                                <div id="user3" class="row-fluid">
                                    <jdoc:include type="modules" name="user2" style="ajgrid" grid="<?php echo $user2_width; ?>" />
                                    <div class="clr"></div> 
                                </div>
                                <?php endif; ?>
                                <?php include "html/template.php"; ?>
                            	<jdoc:include type="message" />
                                <jdoc:include type="component" />
                                <div class="clr"></div>
								<?php if ($this->countModules('user3')) : ?>
                                <div id="user3" class="row-fluid">
                                    <jdoc:include type="modules" name="user3" style="ajgrid" grid="<?php echo $user3_width; ?>" />
                                    <div class="clr"></div> 
                                </div>
                                <?php endif; ?>                                
                            </div>
                        </div>
                    <?php if ($this->countModules('right')) : ?>
                    <div id="rightbar-w" class="span3 pull-right">
                    <div id="sidebar">
                        <jdoc:include type="modules" name="right" style="ajgrid" />
                    </div>
                    </div>
                    <?php endif; ?>
                    </div>
		<div class="clr"></div>
        </div>

					<?php if ($this->countModules('user4')) : ?>
                    <div id="user4w">
                    <div id="user4" class="row-fluid">
                        <jdoc:include type="modules" name="user4" style="ajgrid" grid="<?php echo $user4_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    </div>
                    <?php endif; ?>
					<?php if ($this->countModules('user5')) : ?>
                    <div id="user5w">
                    <div id="user5" class="row-fluid">
                        <jdoc:include type="modules" name="user5" style="ajgrid" grid="<?php echo $user5_width; ?>" />
                        <div class="clr"></div> 
                    </div>
                    </div>
                    <?php endif; ?>        
        <div class="clr"></div>                       
  </div></div>  
</div>
<div id="footer-w"><div id="footer"> 
        <?php if ($this->countModules('copyright')) : ?>
            <div class="copy">
                <jdoc:include type="modules" name="copyright"/>
            </div>
        <?php endif; ?>
        <?php if ($this->countModules('footer-menu')) : ?>
            <div id="footer-nav">           
				<jdoc:include type="modules" name="footer-menu" style="none" />
            </div>
        <?php endif; ?>        
<?php $menu = $app->getMenu(); if ($menu->getActive() == $menu->getDefault()) { ?>
<div class="clr"></div>      
<div class="icravi">Download <a href="http://ijoomlatemplates.com/free-responsive-joomla-3.0-template/" target="_blank" title="free templates">Joomla 3.0 Templates</a></div>
<?php } ?>
<div class="clr"></div>
</div></div>
<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>