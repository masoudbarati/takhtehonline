<?php
/**
 * Bootstrap for Expose Framework
 *  
 * @package     Expose
 * @version     4.1
 * @author      ThemeXpert http://www.themexpert.com
 * @copyright   Copyright (C) 2010 - 2011 ThemeXpert
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3
 **/

// Protect from unauthorized access
defined('_JEXEC') or die('Restricted Access');

// Check for PHP4
if(defined('PHP_VERSION')) {
	$version = PHP_VERSION;
} elseif(function_exists('phpversion')) {
	$version = phpversion();
} else {
	$version = '5.0.0';
}

// if older version detect, raise an error
if(!version_compare($version, '5.0.0', '>='))
{
	return JError::raise(E_ERROR, 500, 'PHP 4 is not supported by Expose Framework');
}

if(!defined('EXPOSE_VERSION'))
{

    // Define framework version.

    define('EXPOSE_VERSION', '4.1');

    //define directory separator
    defined('DS') or define('DS', '/');

    if ( version_compare(JVERSION, '2.5', 'ge') && version_compare(JVERSION, '3.0', 'lt') )
    {
        define('EXPOSE_JVERSION', '25');
    }else{
        define('EXPOSE_JVERSION', '30');
    }

    //declare global ver
    global $expose;

    expose_import('core.core');
    $expose = ExposeCore::getInstance();

}

/**
* File Loader
*
* This function will load file form given paths. Joomla default path style
*
* @access	public
* @param	string	the directory path
* @return	void
*/

function expose_import($paths){
    $paths = str_replace('.', '/', $paths);
    $file = realpath(dirname(__FILE__)) . '/' . $paths . '.php';
    if(file_exists($file))    include_once ($file);
}

function getTemplate($id)
{
   //get template name from template id
   //$id = JRequest::getInt('id');

   $db = JFactory::getDbo();
   $query = $db->getQuery(true);
   $query->select('template');
   $query->from('#__template_styles');
   $query->where("id=$id");
   $db->setQuery($query);
   $result = $db->loadObject();

   return $result->template;
}