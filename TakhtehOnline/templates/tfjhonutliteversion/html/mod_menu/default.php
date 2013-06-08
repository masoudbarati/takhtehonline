<?php
/**
 * @version		$Id: default.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Site
 * @subpackage	mod_menu
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>

<ul class="menu<?php echo $class_sfx;?>"<?php
	$tag = '';
	if ($params->get('tag_id')!=NULL) {
		$tag = $params->get('tag_id').'';
		echo ' id="'.$tag.'"';
	}
?>>
<?php

foreach ($list as $i => &$item) :
	$class = '';
	$id = '';
	$aActive = '';
	$tmpParentId = $item->id;
	//var_dump($item);
	if ($item->id == $active_id) {
		$id .= 'current';
		$aActive = 'current ';
	}

	if (in_array($item->id, $path)) {
		$class .= 'active ';
		$aActive .= 'active  ';
	}

	if ($item->deeper) {
		$class .= 'parent ';
	}
	
	$class .= ' item-'.$item->id.' level'.$item->level.' ';	

	if ($i == 0) {
		$class .= 'first ';
	}
	
	//echo '$tmpParentId = '.$tmpParentId.' $pastId = '.$pastId.' - $item->parent_id = '.$item->parent_id;
	if (isset($pastId) && $pastId== $item->parent_id) {
		$class .= 'first ';
	}
	
	if ($i == count($list) - 1 || $item->shallower) {
		$class .= 'last ';
	}
	
	$class = ' class="'.$class.'"';
	
	if (!empty($id)) {
		$id = ' id="'.trim($id).'"';
	}

	echo '<li '.$id.$class.'>';
	
	// Render the menu item.
	switch ($item->type) :
		case 'separator':
		case 'url':
		case 'component':
			require JModuleHelper::getLayoutPath('mod_menu', 'default_'.$item->type);
			break;

		default:
			require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
			break;
	endswitch;

	// The next item is deeper.
	if ($item->deeper) {
		echo '<ul class="level'.$item->level.'">';
	}
	// The next item is shallower.
	else if ($item->shallower) {
		echo '</li>';
		echo str_repeat('</ul></li>', $item->level_diff);
	}
	// The next item is on the same level.
	else {
		echo '</li>';
	}
	$tmpParentId = $item->parent_id;
	$pastId = $item->id;
endforeach;
//echo '</pre>';
?></ul>
