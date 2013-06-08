<?php
/**
 * @author    JoomlaShine.com http://www.joomlashine.com
 * @copyright Copyright (C) 2008 - 2011 JoomlaShine.com. All rights reserved.
 * @license   GNU/GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
 */

// No direct access
defined('_JEXEC') or die('Restricted index access');

// Load template framework
if (!defined('JSN_PATH_TPLFRAMEWORK')) {
	require_once JPATH_ROOT . '/plugins/system/jsntplframework/defines.php';
	require_once JPATH_ROOT . '/plugins/system/jsntplframework/libraries/joomlashine/loader.php';
}

// Preparing template parameters
JSNTplTemplateHelper::prepare();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- jsn_teki_free 2.0.1 -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
</head>
<body id="jsn-master" class="<?php echo $this->bodyClass ?>">
	<div id="jsn-page">
	<?php
		/*====== Show modules in position "stick-lefttop" ======*/
		if ($this->countModules('stick-lefttop') > 0) {
	?>
		<div id="jsn-pos-stick-lefttop">
			<jdoc:include type="modules" name="stick-lefttop" style="jsnmodule" />
		</div>
	<?php
		}

		/*====== Show modules in position "stick-leftmiddle" ======*/
		if ($this->countModules('stick-leftmiddle') > 0) {
	?>
		<div id="jsn-pos-stick-leftmiddle">
			<jdoc:include type="modules" name="stick-leftmiddle" style="jsnmodule" />
		</div>
	<?php
		}

		/*====== Show modules in position "stick-leftbottom" ======*/
		if ($this->countModules('stick-leftbottom') > 0) {
	?>
		<div id="jsn-pos-stick-leftbottom">
			<jdoc:include type="modules" name="stick-leftbottom" style="jsnmodule" />
		</div>
	<?php
		}

		/*====== Show modules in position "stick-righttop" ======*/
		if ($this->countModules('stick-righttop') > 0) {
	?>
		<div id="jsn-pos-stick-righttop">
			<jdoc:include type="modules" name="stick-righttop" style="jsnmodule" />
		</div>
	<?php
		}

		/*====== Show modules in position "stick-rightmiddle" ======*/
		if ($this->countModules('stick-rightmiddle') > 0) {
	?>
		<div id="jsn-pos-stick-rightmiddle">
			<jdoc:include type="modules" name="stick-rightmiddle" style="jsnmodule" />
		</div>
	<?php
		}

		/*====== Show modules in position "stick-rightbottom" ======*/
		if ($this->countModules('stick-rightbottom') > 0) {
	?>
		<div id="jsn-pos-stick-rightbottom">
			<jdoc:include type="modules" name="stick-rightbottom" style="jsnmodule" />
		</div>
	<?php
		}
	?>
		<div id="jsn-header"><div id="jsn-header_inner">
			<div id="jsn-logo">
			<?php
				/*====== Show modules in position "logo" ======*/
				if ($this->countModules('logo') > 0) {
			?>
				<div id="jsn-pos-logo">
					<jdoc:include type="modules" name="logo" style="jsnmodule" />
				</div>

			<?php
				/*====== If there are NO modules in position "logo", then show logo image file "logo.png" ======*/
				} else {
					/*====== Attach link to logo image ======*/
					if (!empty($this->logoLink)) {
						echo '<a href="' . $this->logoLink . '" title="' . $this->logoSlogan . '">';
					}

					/*====== Show desktop logo ======*/
					if (!empty($this->logoFile)) {
						echo '<img src="' . $this->logoFile . '" alt="' . $this->logoSlogan . '" id="jsn-logo-desktop" />';
					}

					if ($this->logoLink != "") {
						echo '</a>';
					}
				}
			?>
			</div>
			<div id="jsn-headerright">
			<?php
				/*====== Show modules in position "top" ======*/
				if ($this->countModules('top') > 0) {
			?>
				<div id="jsn-pos-top">
					<jdoc:include type="modules" name="top" style="jsnmodule" />
					<div class="clearbreak"></div>
				</div>
			<?php
				}
			?>
			</div>
			<div class="clearbreak"></div>
		<?php
			if ($this->helper->countPositions('mainmenu', 'toolbar')) {
		?>
			<div id="jsn-menu">
			<?php
				/*====== Show modules in position "mainmenu" ======*/
				if ($this->countModules('mainmenu') > 0) {
			?>
				<div id="jsn-pos-mainmenu">
					<jdoc:include type="modules" name="mainmenu" style="jsnmodule" />
				</div>
			<?php
				}

				/*====== Show modules in position "toolbar" ======*/
				if ($this->countModules('toolbar') > 0) {
			?>
				<div id="jsn-pos-toolbar">
					<jdoc:include type="modules" name="toolbar" style="jsnmodule" />
				</div>
			<?php
				}
			?>
            <div class="clearbreak"></div>
			</div>
		<?php
			}
		?>
		</div></div>
		<div id="jsn-body">
		<?php
			/*====== Show modules in content top area ======*/
			if ($this->helper->countPositions('promo-left', 'promo', 'promo-right', 'content-top')) {
		?>
			<div id="jsn-content-top" class="<?php echo (($this->hasPromoLeft)?'jsn-haspromoleft ':'') ?><?php echo (($this->hasPromoRight)?'jsn-haspromoright ':'') ?>">
				<div id="jsn-promo">
			<?php
				/*====== Show modules in position "promo" ======*/
				if ($this->countModules('promo') > 0) {
			?>
                    <div id="jsn-pos-promo">
                        <jdoc:include type="modules" name="promo" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
			<?php
				}

				/*====== Show modules in position "promo-left" ======*/
				if ($this->countModules('promo-left') > 0) {
			?>
                    <div id="jsn-pos-promo-left">
						<jdoc:include type="modules" name="promo-left" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
			<?php
				}

				/*====== Show modules in position "promo-right" ======*/
				if ($this->countModules('promo-right') > 0) {
			?>
                    <div id="jsn-pos-promo-right">
						<jdoc:include type="modules" name="promo-right" style="jsnmodule" class="jsn-roundedbox" />
                    </div>
			<?php
				}
			?>
				<div class="clearbreak"></div>
				</div>
			<?php
				/*====== Show modules in position "content-top" ======*/
				if ($this->countModules('content-top') > 0) {
			?>
				<div id="jsn-pos-content-top" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('content-top'); ?>">
					<jdoc:include type="modules" name="content-top" style="jsnmodule" class="jsn-innerhead" />
                    <div class="clearbreak"></div>
				</div>
			<?php
				}
			?>
			</div>
		<?php
			}
		?>
			<div id="jsn-content" class="<?php echo (($this->hasLeft)?'jsn-hasleft ':'') ?><?php echo (($this->hasRight)?'jsn-hasright ':'') ?><?php echo (($this->hasInnerLeft)?'jsn-hasinnerleft ':'') ?><?php echo (($this->hasInnerRight)?'jsn-hasinnerright ':'') ?>">
				<div id="jsn-maincontent"><div id="jsn-maincontent_inner">
		<?php
			/*====== Show modules in position "breadcrumbs" ======*/
			if ($this->countModules('breadcrumbs') > 0) {
		?>
								<div id="jsn-breadcrumbs">
									<jdoc:include type="modules" name="breadcrumbs" />
								</div>
		<?php
			}
		?>
				<div id="jsn-maincontent_inner1"><div id="jsn-maincontent_inner2"><div id="jsn-maincontent_inner3"><div id="jsn-maincontent_inner4"><div id="jsn-maincontent_inner5">
					<div id="jsn-centercol">
                        <div id="jsn-centercol_inner">
		<?php
			/*====== Show modules in position "user-top" ======*/
			if ($this->countModules('user-top') > 0) {
		?>
								<div id="jsn-pos-user-top" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('user-top'); ?> ">
									<jdoc:include type="modules" name="user-top" style="jsnmodule" class="jsn-innerhead" />
                                    <div class="clearbreak"></div>
								</div>
		<?php
			}

			/*====== Show modules in position "user1" and "user2" ======*/
			$positionCount = $this->helper->countPositions('user1', 'user2');
			if ($positionCount)
			{
				$grid_suffix = $positionCount;
		?>
								<div id="jsn-usermodules1" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
									<div id="jsn-usermodules1_inner_grid<?php echo $grid_suffix; ?>">
			<?php
				/*====== Show modules in position "user1" ======*/
				if ($this->countModules('user1') > 0) {
			?>
										<div id="jsn-pos-user1">
											<jdoc:include type="modules" name="user1" style="jsnmodule" class="jsn-innerhead" />
										</div>
			<?php
				}

				/*====== Show modules in position "user2" ======*/
				if ($this->countModules('user2') > 0) {
			?>
										<div id="jsn-pos-user2">
											<jdoc:include type="modules" name="user2" style="jsnmodule" class="jsn-innerhead" />
										</div>
			<?php
				}
			?>
										<div class="clearbreak"></div>
									</div>
								</div>
		<?php
			}
		?>
								<div id="jsn-mainbody-content" class="<?php echo ($this->countModules('mainbody-top') > 0)?' jsn-hasmainbodytop':'' ?><?php echo ($this->countModules('mainbody-bottom') > 0)?' jsn-hasmainbodybottom':'' ?><?php echo ($this->showFrontpage)?' jsn-hasmainbody':'' ?>">
		<?php
			/*====== Show modules in position "mainbody-top" ======*/
			if ($this->countModules('mainbody-top') > 0) {
		?>
									<div id="jsn-pos-mainbody-top" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('mainbody-top'); ?>">
										<jdoc:include type="modules" name="mainbody-top" style="jsnmodule" class="jsn-innerhead" />
                                        <div class="clearbreak"></div>
									</div>
		<?php
			}

			/*====== Show mainbody ======*/
			if ($this->showFrontpage) {
		?>
									<div id="jsn-mainbody">
										<jdoc:include type="message" />
										<jdoc:include type="component" />
									</div>
		<?php
			}

			/*====== Show modules in position "mainbody-bottom" ======*/
			if ($this->countModules('mainbody-bottom') > 0) {
		?>
									<div id="jsn-pos-mainbody-bottom" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('mainbody-bottom'); ?>">
										<jdoc:include type="modules" name="mainbody-bottom" style="jsnmodule" class="jsn-innerhead" />
                                        <div class="clearbreak"></div>
									</div>
		<?php
			}
		?>
								</div>
		<?php
			/*====== Show modules in position "user3" and "user4" ======*/
			$positionCount = $this->helper->countPositions('user3', 'user4');
			if ($positionCount) {
				$grid_suffix = $positionCount;
		?>
								<div id="jsn-usermodules2" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
									<div id="jsn-usermodules2_inner_grid<?php echo $grid_suffix; ?>">
			<?php
				/*====== Show modules in position "user3" ======*/
				if ($this->countModules('user3') > 0) {
			?>
										<div id="jsn-pos-user3">
											<jdoc:include type="modules" name="user3" style="jsnmodule" class="jsn-innerhead" />
										</div>
			<?php
				}

				/*====== Show modules in position "user4" ======*/
				if ($this->countModules('user4') > 0) { ?>
										<div id="jsn-pos-user4">
											<jdoc:include type="modules" name="user4" style="jsnmodule" class="jsn-innerhead" />
										</div>
			<?php
				}
			?>
										<div class="clearbreak"></div>
									</div>
								</div>
		<?php
			}

			/*====== Show modules in position "user-bottom" ======*/
			if ($this->countModules('user-bottom') > 0) { ?>
								<div id="jsn-pos-user-bottom" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('user-bottom'); ?>">
									<jdoc:include type="modules" name="user-bottom" style="jsnmodule" class="jsn-innerhead" />
                                    <div class="clearbreak"></div>
								</div>
		<?php
			}

			/*====== Show modules in position "banner" ======*/
			if ($this->countModules('banner') > 0) {
		?>
								<div id="jsn-pos-banner">
									<jdoc:include type="modules" name="banner" style="jsnmodule" />
								</div>
		<?php
			}
		?>
							</div>
						</div>
		<?php
			/*====== Show modules in position "innerleft" ======*/
			if ($this->countModules('innerleft') > 0) {
		?>
						<div id="jsn-pos-innerleft">
							<div id="jsn-pos-innerleft_inner">
								<jdoc:include type="modules" name="innerleft" style="jsnmodule" class="jsn-innerhead" />
							</div>
						</div>
		<?php
			}

			/*====== Show modules in position "innerright" ======*/
			if ($this->countModules('innerright') > 0) {
		?>
						<div id="jsn-pos-innerright">
							<div id="jsn-pos-innerright_inner">
								<jdoc:include type="modules" name="innerright" style="jsnmodule" class="jsn-innerhead" />
							</div>
						</div>
		<?php
			}
		?>
					<div class="clearbreak"></div></div></div></div></div></div></div></div>
		<?php
			/*====== Show modules in position "left" ======*/
			if ($this->countModules('left') > 0) {
		?>
					<div id="jsn-leftsidecontent">
						<div id="jsn-leftsidecontent_inner">
							<div id="jsn-pos-left">
								<jdoc:include type="modules" name="left" style="jsnmodule" class="jsn-innerhead" />
							</div>
						</div>
					</div>
		<?php
			}

			/*====== Show modules in position "right" ======*/
			if ($this->countModules('right') > 0) {
		?>
					<div id="jsn-rightsidecontent">
						<div id="jsn-rightsidecontent_inner">
							<div id="jsn-pos-right">
								<jdoc:include type="modules" name="right" style="jsnmodule" class="jsn-innerhead" />
							</div>
						</div>
					</div>
		<?php
			}
		?>
				<div class="clearbreak"></div>
			</div>
		<?php
			/*====== Show elements in content bottom area ======*/
			if ($this->helper->countPositions('content-bottom', 'user5', 'user6', 'user7')) {
		?>
			<div id="jsn-content-bottom">
			<?php
				/*====== Show modules in position "content-bottom" ======*/
				if ($this->countModules('content-bottom') > 0) {
			?>
                <div id="jsn-pos-content-bottom" class="jsn-modulescontainer jsn-horizontallayout jsn-modulescontainer<?php echo $this->countModules('content-bottom'); ?>">
                	<jdoc:include type="modules" name="content-bottom" style="jsnmodule" class="jsn-innerhead" />
                    <div class="clearbreak"></div>
                </div>
			<?php
				}

				/*====== Show modules in position "user5", "user6", "user7" ======*/
				$positionCount = $this->helper->countPositions('user5', 'user6', 'user7');
				if ($positionCount) {
					$grid_suffix = $positionCount;
			?>
				<div id="jsn-usermodules3" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
				<?php
					/*====== Show modules in position "user5" ======*/
					if ($this->countModules('user5') > 0) {
				?>
					<div id="jsn-pos-user5">
						<jdoc:include type="modules" name="user5" style="jsnmodule" class="jsn-innerhead" />
					</div>
				<?php
					}

					/*====== Show modules in position "user6" ======*/
					if ($this->countModules('user6') > 0) {
				?>
					<div id="jsn-pos-user6">
						<jdoc:include type="modules" name="user6" style="jsnmodule" class="jsn-innerhead" />
					</div>
				<?php
					}

					/*====== Show modules in position "user7" ======*/
					if ($this->countModules('user7') > 0) {
				?>
					<div id="jsn-pos-user7">
						<jdoc:include type="modules" name="user7" style="jsnmodule" class="jsn-innerhead" />
					</div>
				<?php
					}
				?>
					<div class="clearbreak"></div>
				</div>
			<?php
				}
			?>
            </div>
		<?php
			}
		?>
		</div>
		<?php
			/*====== Show modules in position "footer" and "bottom" ======*/
			$positionCount = $this->helper->countPositions('footer', 'bottom');
			if ($positionCount) {
				$grid_suffix = $positionCount;
		?>
			<div id="jsn-footer">
				<div id="jsn-footer_inner">
					<div id="jsn-footermodules" class="jsn-modulescontainer jsn-modulescontainer<?php echo $grid_suffix; ?>">
			<?php
				/*====== Show modules in position "footer" ======*/
				if ($this->countModules('footer') > 0) {
			?>
					<div id="jsn-pos-footer">
						<jdoc:include type="modules" name="footer" style="jsnmodule" />
					</div>
			<?php
				}

				/*====== Show modules in position "bottom" ======*/
				if ($this->countModules('bottom') > 0) {
			?>
					<div id="jsn-pos-bottom">
						<jdoc:include type="modules" name="bottom" style="jsnmodule" />
					</div>
			<?php
				}
			?>
					<div class="clearbreak"></div>
				</div>
			</div>
		</div>
		<?php
			}
		?>
	</div>
	<div id="jsn-brand">
		<a href="http://www.joomlashine.com" title="Joomla templates by www.joomlashine.com" target="_blank"><strong> Joomla template</strong></a> by Joomlashine
	</div>
<jdoc:include type="modules" name="debug" />
</body>
</html>