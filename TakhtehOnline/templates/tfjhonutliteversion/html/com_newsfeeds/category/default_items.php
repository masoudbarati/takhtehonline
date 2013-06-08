<?php
/**
 * @version		$Id: default_items.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	com_newsfeeds
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

JHtml::core();

$n = count($this->items);
$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>
<?php if (empty($this->items)) : ?>

<p> <?php echo JText::_('COM_NEWSFEEDS_NO_ARTICLES'); ?> </p>
<?php else : ?>
<form action="<?php echo JFilterOutput::ampReplace(JFactory::getURI()->toString()); ?>" method="post" name="adminForm" id="adminForm">
	<div class="infofilter">
		<?php if ($this->params->get('show_pagination_limit')) : ?>
		<?php echo JText::_('JGLOBAL_DISPLAY_NUM'); ?>&#160; <?php echo $this->pagination->getLimitBox(); ?>
		<?php endif; ?>
	</div>
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="infotable">
		<?php if ($this->params->get('show_headings')==1) : ?>
		<tr class="tableheader">
			<td class="sectiontableheader table-column-order" width="10" align="center"><?php echo JText::_('JGLOBAL_NUM'); ?></td>
			<td class="sectiontableheader table-column-name"><?php echo JHtml::_('grid.sort', 'COM_NEWSFEEDS_FEED_NAME', 'a.name', $listDirn, $listOrder); ?></td>
			<?php if ($this->params->get('show_articles')) : ?>
			<td class="sectiontableheader table-column-article" width="15%" align="center"><?php echo JHtml::_('grid.sort', 'COM_NEWSFEEDS_NUM_ARTICLES', 'a.numarticles', $listDirn, $listOrder); ?></td>
			<?php endif; ?>
			<?php if ($this->params->get('show_link')) : ?>
			<td class="sectiontableheader table-column-links" width="30%"><?php echo JHtml::_('grid.sort', 'COM_NEWSFEEDS_FEED_LINK', 'a.link', $listDirn, $listOrder); ?></td>
			<?php endif; ?>
		</tr>
		<?php endif; ?>
		<?php foreach ($this->items as $i => $item) : ?>
		<?php if ($this->items[$i]->published == 0) : ?>
		<tr class="system-unpublished sectiontableentry<?php echo $i % 2 +1; ?>">
			<?php else: ?>
		<tr class="sectiontableentry<?php echo $i % 2 +1; ?>" >
			<?php endif; ?>
			<td class="table-column-order" width="10" align="center"><?php echo $this->pagination->getRowOffset( $i ); ?></td>
			<td class="table-column-name"><a href="<?php echo JRoute::_(NewsFeedsHelperRoute::getNewsfeedRoute($item->slug, $item->catid)); ?>"> <?php echo $item->name; ?></a></td>
			<?php if ($this->params->get('show_articles')) : ?>
			<td class="table-column-article" width="15%" align="center"><?php echo $item->numarticles; ?></td>
			<?php endif; ?>
			<?php if ($this->params->get('show_link')) : ?>
			<td class="table-column-links" width="30%"><a href="<?php echo $item->link; ?>"><?php echo $item->link; ?></a></td>
			<?php  endif; ?>
		</tr>
		<?php endforeach; ?>
	</table>
	<?php if ($this->params->get('show_pagination')) : ?>
	<div class="pagination">
		<?php if ($this->params->def('show_pagination_results', 1)) : ?>
		<p class="counter"> <?php echo $this->pagination->getPagesCounter(); ?> </p>
		<?php endif; ?>
		<?php echo $this->pagination->getPagesLinks(); ?> </div>
	<?php endif; ?>
	<div>
		<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
		<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
	</div>
</form>
<?php endif; ?>