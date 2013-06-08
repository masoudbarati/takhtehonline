<?php
/**
 * @version     $Id$
 * @package     JSNExtension
 * @subpackage  JSNTPLFramework
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
 * Process remote authentication to download
 * quickstart package
 *
 * @package     JSNTPLFramework
 * @subpackage  Template
 * @since       1.0.0
 */
class JSNTplWidgetQuickstart extends JSNTplWidgetBase
{
	/**
	 * Render login form
	 *
	 * @return  void
	 */
	public function loginAction ()
	{
		// Retrieve version data
		try
		{
			$versionData = JSNTplHelper::getVersionData();
		}
		catch (Exception $e)
		{
			throw $e;
		}

		// Find template information by identify name
		foreach ($versionData['items'] as $item)
		{
			if ($item['identified_name'] == $this->template['id']) {
				$templateInfo = $item;
				break;
			}
		}

		if (isset($templateInfo)) {
			foreach ($templateInfo['editions'] as $info) {
				$edition = trim($info['edition']);
				if (strpos($info['edition'], 'PRO ') === 0) {
					$edition = substr($info['edition'], 4);
				}

				if ($this->template['edition'] == $edition) {
					if ($info['authentication'] == false) {
						$this->setResponse(array(
							'auth'			=> false,
							'id'			=> $this->template['id'],
							'edition'		=> $info['edition'],
							'joomlaVersion'	=> JSNTplHelper::getJoomlaVersion(2)
						));
					}
					else {
						// Render login view
						$this->render('login', array('template' => $this->template));
					}

					break;
				}
			}
		}
	}

	/**
	 * Process checking customer information
	 *
	 * @return  void
	 */
	public function authAction ()
	{
		// Process posted back data that sent from client
		if ($this->request->getMethod() == 'POST')
		{
			$username = $this->request->getString('username', '');
			$password = $this->request->getString('password', '');

			// Create new HTTP Request
			try
			{
				JSNTplApiLightcart::getOrderedEditions($this->template['id'], $username, $password);
			}
			catch (Exception $e)
			{
				throw $e;
			}

			$edition = $this->template['edition'];

			if ($edition != 'free') {
				$edition = 'pro ' . $edition;
			}

			$this->setResponse(array(
				'id' => $this->template['id'],
				'edition' => $edition,
				'joomlaVersion' => JSNTplHelper::getJoomlaVersion(2)
			));
		}
	}
}
