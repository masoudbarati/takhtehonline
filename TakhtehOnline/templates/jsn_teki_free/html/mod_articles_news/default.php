<?php
/**
 * @version		$Id: default.php 11176 2012-02-13 08:22:14Z hieudm $
 * @package		Joomla.Site
 * @subpackage	mod_articles_news
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="jsn-mod-newsflash">
<?php foreach ($list as $item) :?>
	<?php
	 require JModuleHelper::getLayoutPath('mod_articles_news', '_item');?>
<?php endforeach; ?>
</div>