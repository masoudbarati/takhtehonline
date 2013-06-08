<?php
/**
 * @version     $Id$
 * @package     JSNTplFramework
 * @subpackage  Http
 * @author      JoomlaShine Team <support@joomlashine.com>
 * @copyright   Copyright (C) 2012 JoomlaShine.com. All Rights Reserved.
 * @license     GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 * 
 * Websites: http://www.joomlashine.com
 * Technical Support:  Feedback - http://www.joomlashine.com/contact-us/get-support.html
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Http Client
 * 
 * @package     JSNTplFramework
 * @subpackage  Http
 * @since       1.0.0
 */
abstract class JSNTplHttpClient
{
	const FOLLOW_LOCATION		= 52;
	const BUFFER_SIZE			= 98;
	const MAX_REDIRECTS			= 68;
	const USER_AGENT			= 10018;
	const CONNECTION_TIMEOUT 	= 78;
	const READ_TIMEOUT		 	= 13;

	/**
	 * Create HTTP Request object
	 * 
	 * @param   array   $options  Object options
	 * @param   string  $adapter  Adapter to be used, null to auto detection
	 * 
	 * @return  JSNHttpAdapter
	 */
	public static function createRequest (array $options = array(), $adapter = null)
	{
		return new JSNTplHttpAdapterSocket($options);
	}
}
