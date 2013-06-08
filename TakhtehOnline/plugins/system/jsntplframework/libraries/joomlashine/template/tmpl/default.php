<?php
/**
 * @version     $Id$
 * @package     JSNExtension
 * @subpackage  TPLFramework
 * @author      JoomlaShine Team <support@joomlashine.com>
 * @copyright   Copyright (C) 2012 JoomlaShine.com. All Rights Reserved.
 * @license     GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get all fieldset in XML
$fieldSets = $adminFormXml->fields->fieldset;
$wrapperClass = 'jsn-joomla' . JSNTplHelper::getJoomlaVersion(1, false);

$nextEdition = $this->templateEdition->getNextEdition();

$templateName = $this->data->template;
$templateName = preg_replace('/_(pro|free)$/i', '', $templateName);
$templateName = preg_replace('/_/i', '-', $templateName);

$edition = $this->templateEdition->getEdition();
$editionClass = 'jsn-pro-edition';

if ($edition == 'FREE') {
	$edition = '';
	$editionClass = 'jsn-free-edition';
}

list($prefix, $template, $suffix) = explode('_', $this->data->template);

$templateLink = "http://www.joomlashine.com/joomla-templates/jsn-{$template}.html";
?>
<div id="jsn-template-config" class="jsn-bootstrap jsn-master <?php echo $wrapperClass ?> <?php echo $editionClass ?>">
	<form action="" method="POST" name="adminForm" id="style-form">
		<div id="jsn-template-toolbar">
			<label for="jform_title pull-left"><?php echo JText::_('JSN_TPLFW_FIELD_TITLE_LABEL') ?></label>
			<?php echo $this->templateForm->getInput('title') ?>

			<label for="jform_template pull-left"><?php echo JText::_('COM_TEMPLATES_FIELD_TEMPLATE_LABEL') ?></label>
			<?php echo $this->templateForm->getInput('template') ?>

			<label for="jform_home pull-left"><?php echo JText::_('COM_TEMPLATES_FIELD_HOME_LABEL') ?></label>
			<?php echo $this->templateForm->getInput('home') ?>

			<?php echo $this->templateForm->getInput('client_id') ?>
			<div class="clearfix"></div>
		</div>

		<ul id="jsn-main-nav" class="nav nav-tabs">
			<li class="active">
				<a href="#getting-started" data-toggle="tab">
					<i class="icon-home icon-black"></i>
					<?php echo JText::_('JSN_TPLFW_GETTING_STARTED') ?>
				</a>
			</li>
			<?php foreach ($fieldSets as $fieldSet): ?>
				<?php $class = isset($fieldSet['pro']) && $fieldSet['pro'] == 'true' ? 'jsn-pro-tab' : '' ?>
				<li class="<?php echo $class ?>">
					<a href="#<?php echo $fieldSet['name'] ?>" data-toggle="tab">
						<?php if (isset($fieldSet['icon'])): ?>
							<i class="<?php echo $fieldSet['icon'] ?>"></i>
						<?php endif ?>

						<?php echo JText::_($fieldSet['label']) ?>
						<?php if (isset($fieldSet['pro']) && $fieldSet['pro'] == 'true'): ?>
							<span class="label label-important label-pro">PRO</span>
						<?php endif ?>
					</a>
				</li>
			<?php endforeach ?>
			<li><a href="#menu-assignment" data-toggle="tab"><i class="icon-check"></i> <?php echo JText::_('JSN_TPLFW_MENU_ASSIGNMENT') ?></a></li>
		</ul>

		<div class="tab-content form-horizontal">
			<div class="tab-pane active row-fluid" id="getting-started">
				<?php include JSN_PATH_TPLFRAMEWORK_LIBRARIES . '/template/tmpl/default_home.php' ?>
			</div>

			<?php foreach ($fieldSets as $xmlFieldSet): ?>
				<div class="tab-pane" id="<?php echo $xmlFieldSet['name'] ?>">
					<?php if (isset($xmlFieldSet['pro']) && $xmlFieldSet['pro'] == 'true' && $this->templateEdition->getEdition() == 'FREE'): ?>
					<div class="jsn-section-pro alert alert-block">
						<p class="pull-left"><?php echo JText::_('JSN_TPLFW_FEATURES_AVAILABLE_IN_PRO') ?></p>
						<a href="javascript:void(0)" class="jsn-upgrade-link btn pull-right"><?php echo JText::_('JSN_TPLFW_UPGRADE_NOW') ?></a>
						<div class="clearfix"></div>
					</div>
					<?php endif ?>

					<?php if (isset($xmlFieldSet['twoColumns']) && $xmlFieldSet['twoColumns'] == 'true'): ?>
						<?php include JSN_PATH_TPLFRAMEWORK_LIBRARIES . '/template/tmpl/default_layout.php' ?>
					<?php else: ?>
						<?php foreach ($xmlFieldSet->children() as $field): ?>
							<?php $nodeName = strtolower($field->getName()) ?>

							<?php if ($nodeName == 'field'): ?>
								<?php $input = $this->adminForm->getField($field['name'], 'jsn') ?>
								<div class="control-group">
									<div class="control-label">
										<label for="<?php echo $input->id ?>" rel="tipsy" title="<?php echo JText::_($field['label'] . '_DESC') ?>">
											<?php echo JText::_($field['label']) ?>
										</label>
									</div>
									<div class="controls">
										<?php echo $input->input ?>
									</div>
								</div>
							<?php elseif ($nodeName == 'fieldset'): ?>
								<fieldset class="<?php echo $field['name'] ?>">
									<legend><?php echo JText::_($field['label']) ?></legend>
									<?php foreach ($field->children() as $innerField): ?>
										<?php $input = $this->adminForm->getField($innerField['name'], 'jsn') ?>
										<div class="control-group">
											<div class="control-label">
												<label for="<?php echo $input->id ?>" rel="tipsy" title="<?php echo JText::_($innerField['label'] . '_DESC') ?>">
													<?php echo JText::_($innerField['label']) ?>
												</label>
											</div>
											<div class="controls">
												<?php echo $input->input ?>
											</div>
										</div>
									<?php endforeach ?>
								</fieldset>
							<?php endif ?>
						<?php endforeach ?>
					<?php endif ?>
				</div>
			<?php endforeach ?>

			<div class="tab-pane" id="menu-assignment">
				<?php include JSN_PATH_TPLFRAMEWORK_LIBRARIES . '/template/tmpl/default_assignment.php' ?>
			</div>
		</div>

		<input type="hidden" name="task" />
		<?php echo JHtml::_('form.token'); ?>
	</form>
</div>

<div class="jsn-master">
	<div id="jsn-footer" class="jsn-page-footer jsn-bootstrap">
		<ul class="jsn-footer-menu">
			<li class="first">
				<a href="http://www.joomlashine.com/joomla-templates/jsn-<?php echo $template ?>-docs.zip" target="_blank"><?php echo JText::_('JSN_TPLFW_DOCUMENTATION') ?></a>
			</li>
			<li>
				<a href="http://www.joomlashine.com/contact-us/get-support.html" target="_blank"><?php echo JText::_('JSN_TPLFW_SUPPORT') ?></a>
			</li>
			<li class="jsn-iconbar">
				<strong><?php echo JText::_('JSN_TPLFW_KEEP_IN_TOUCH') ?>:</strong>
				<a title="Find us on Facebook" target="_blank" href="http://www.facebook.com/joomlashine"><i class="jsn-icon16 jsn-icon-social jsn-icon-facebook"></i></a>
				<a title="Follow us on Twitter" target="_blank" href="http://www.twitter.com/joomlashine"><i class="jsn-icon16 jsn-icon-social jsn-icon-twitter"></i></a>
				<a title="Watch us on YouTube" target="_blank" href="http://www.youtube.com/joomlashine"><i class="jsn-icon16 jsn-icon-social jsn-icon-youtube"></i></a>
			</li>
		</ul>
		<ul class="jsn-footer-menu">
			<li class="first">
				<a href="<?php echo $templateLink ?>" target="_blank"><?php echo JText::_($this->data->template) ?> <?php echo $edition ?> v<?php echo JSNTplHelper::getTemplateVersion($this->data->template) ?></a>
				<?php echo JText::_('JSN_TPLFW_BY') ?>
				<a href="http://www.joomlashine.com" target="_blank">JoomlaShine.com</a>

				<?php if (!JSNTplHelper::isInstalledProEdition($this->data->template) && $nextEdition == 'STANDARD'): ?>
					<a class="label label-important jsn-upgrade-link" href="javascript:void(0)">
						<strong class="jsn-text-attention"><?php echo JText::_('JSN_TPLFW_UPGRADE_TO_PRO') ?></strong>
					</a>
				<?php elseif ($nextEdition == 'UNLIMITED'): ?>
					<a class="label label-important jsn-upgrade-link" href="javascript:void(0)">
						<strong class="jsn-text-attention"><?php echo JText::_('JSN_TPLFW_UPGRADE_TO_PRO_UNLIMITED') ?></strong>
					</a>
				<?php endif ?>
			</li>
		</ul>
	</div>
</div>
