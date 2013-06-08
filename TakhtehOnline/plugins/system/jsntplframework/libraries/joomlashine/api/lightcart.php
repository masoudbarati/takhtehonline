<?php
/**
 * @version     $Id$
 * @package     JSNExtension
 * @subpackage  JSNTplFramework
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
 * JSN Lightcart API
 *
 * @package     JSNTplFramework
 * @subpackage  Template
 * @since       1.0.0
 */
abstract class JSNTplApiLightcart
{
	/**
	 * @var  string
	 */
	private static $_lightcartUrl = 'http://www.joomlashine.com/index.php?option=com_lightcart';

	/**
	 * Retrieve all product editions
	 *
	 * @param   string  $category  Category of the product
	 * @param   string  $id        Identified name of the product
	 *
	 * @return  array
	 */
	public static function getProductDetails ($category, $id)
	{
		try
		{
			$response = JSNTplHttpRequest::get('http://www.joomlashine.com/versioning/product_version.php?category=' . $category);
		}
		catch (Exception $e)
		{
			throw $e;
		}

		// Decoding content
		$responseContent	= trim($response['body']);
		$responseObject		= json_decode($responseContent);

		if ($responseObject == null) {
			throw new Exception($responseContent);
		}

		$productDetails = null;

		// Loop to each item to find product details
		foreach ($responseObject->items as $item) {
			if ($item->identified_name == $id) {
				$productDetails = $item;
				break;
			}
		}

		if (empty($productDetails)) {
			throw new Exception(JText::_('JSN_TPLFW_INVALID_PRODUCT_ID'));
		}

		return $productDetails;
	}

	/**
	 * Retrieve all editions of the product that have bought by customer
	 *
	 * @param   string  $id        Identified name of the product
	 * @param   string  $username  Customer username
	 * @param   string  $password  Customer password
	 *
	 * @return  array
	 */
	public static function getOrderedEditions ($id, $username, $password)
	{
		$joomlaVersion = JSNTplHelper::getJoomlaVersion();

		// Send request to joomlashine server to checking customer information
		$options = array(
			'RequestMethod' => 'POST',

			'PostValues' => array(
				'controller'		=> 'remoteconnectauthentication',
				'task'				=> 'authenticate',
				'tmpl'				=> 'component',
				'identified_name'	=> $id,
				'joomla_version'	=> $joomlaVersion,
				'username'			=> $username,
				'password'			=> $password,
				'upgrade'			=> 'no',
				'custom'			=> '1',
				'language'			=> JFactory::getLanguage()->getTag()
			)
		);

		try
		{
			$response = JSNTplHttpRequest::get(self::$_lightcartUrl, '', true, $options);
		}
		catch (Exception $e)
		{
			throw $e;
		}

		// Retrieve response content
		$responseContent	= trim($response['body']);
		$responseObject		= json_decode($responseContent);

		if ($responseObject === null) {
			throw new Exception($responseContent);
		}

		return $responseObject->editions;
	}

	/**
	 * Download product installation package from lightcart.
	 * Return path to downloaded package when download successfull
	 *
	 * @param   string  $id        Identified name of the product
	 * @param   string  $edition   Product edition to download
	 * @param   string  $username  Customer username
	 * @param   string  $password  Customer password
	 *
	 * @return  string
	 */
	public static function downloadPackage ($id, $edition = null, $username = null, $password = null, $savePath = null)
	{
		$joomlaVersion = JSNTplHelper::getJoomlaVersion(2);

		// Send request to joomlashine server to checking customer information
		$postData = array(
			'controller'		=> 'remoteconnectauthentication',
			'task'				=> 'authenticate',
			'tmpl'				=> 'component',
			'identified_name'	=> $id,
			'joomla_version'	=> $joomlaVersion,
			'upgrade'			=> 'yes',
			'custom'			=> '1',
			'language'			=> JFactory::getLanguage()->getTag()
		);

		if (!empty($edition)) {
			$postData['edition'] = $edition;
		}

		if (!empty($username) && !empty($password)) {
			$postData['username'] = $username;
			$postData['password'] = $password;
		}

		$config			= JFactory::getConfig();
		$tmpPath		= empty($savePath) && !is_dir($savePath) ? $config->get('tmp_path') : $savePath;
		$downloadUrl	= self::$_lightcartUrl . '&' . http_build_query($postData);
		$filePath		= $tmpPath . '/jsn-' . $id . '.zip';

		try
		{
			JSNTplHttpRequest::get($downloadUrl, $filePath);

			// Validate downloaded update package
			if (filesize($filePath) < 10)
			{
				// Get LightCart error code
				$errorCode = file_get_contents($filePath);

				throw new Exception(JText::_('JSN_TPLFW_LIGHTCART_ERROR_' . $errorCode));
			}
		}
		catch (Exception $e)
		{
			throw $e;
		}

		return $filePath;
	}
}
