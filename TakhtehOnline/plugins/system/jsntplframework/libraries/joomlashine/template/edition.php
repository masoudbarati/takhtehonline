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
 * Helper class handling template editions
 *
 * @package     JSNTPLFramework
 * @subpackage  Template
 * @since       1.0.0
 */
class JSNTplTemplateEdition
{
	/**
	 * JSNTplTemplateEdition instance
	 * @var JSNTplTemplateEdition
	 */
	private static $_instance;

	/**
	 * Template data
	 * @var JObject
	 */
	protected $data;

	/**
	 * Current edition of the template
	 * @var string
	 */
	protected $edition;

	/**
	 * All supported editions for current template
	 * @var array
	 */
	protected $editions;

	/**
	 * Return instance of JSNTplTemplateEdition object
	 *
	 * @param   JObject  $data  Template data object
	 * @return  JSNTplTemplateEdition
	 */
	public static function getInstance ($data)
	{
		if (!(self::$_instance instanceOf JSNTplTemplateEdition))
			self::$_instance = new JSNTplTemplateEdition($data);

		return self::$_instance;
	}

	/**
	 * Retrieve current edition of the template
	 *
	 * @return  string
	 */
	public function getEdition ()
	{
		return $this->edition;
	}

	/**
	 * Return next edition can be upgraded
	 *
	 * @return string
	 */
	public function getNextEdition ()
	{
		sort($this->editions);
		$editionCount = count($this->editions);
		$currentIndex = array_search($this->edition, $this->editions);
		$nextIndex    = $currentIndex + 1;

		// Return false if current edition is highest
		if ($editionCount == 1 || !isset($this->editions[$nextIndex]))
			return false;

		return $this->editions[$nextIndex];
	}

	/**
	 * Constructor method
	 *
	 * @param   JObject  $data  Template data object
	 */
	private function __construct ($data)
	{
		$this->data = $data;
		$this->edition = (string) $this->data->xml->edition;

		$this->loadEditions();

		if (empty($this->edition))
			$this->edition = 'FREE';
	}

	/**
	 * Return list of editions for current template
	 * that supported
	 *
	 * @return  array
	 */
	protected function loadEditions ()
	{
		$cacheFile = JPATH_SITE . '/templates/' . $this->data->template . '/editions.json';

		// Retrieve template editions from cache file
		if (is_file($cacheFile) && is_readable($cacheFile))
		{
			$editions = json_decode(file_get_contents($cacheFile), true);

			if (!empty($editions))
			{
				$this->editions = $editions;
				return $editions;
			}
		}

		try
		{
			$response	= JSNTplHttpRequest::get('http://www.joomlashine.com/versioning/product_version.php?category=cat_template');
			$json		= json_decode(trim($response['body']), true);
		}
		catch (Exception $e)
		{
			// Do nothing
		}

		// Return only free edition if cannot parse data returned from server
		if (empty($json) || !is_array($json) || !isset($json['items'])) {
			$this->editions = array('FREE');
		}
		// Retrieve template edition from server
		else
		{
			$templateId = JSNTplHelper::getTemplateId($this->data->template);
			$this->editions = array('FREE');

			foreach ($json['items'] as $item)
			{
				if ($templateId == $item['identified_name'] && isset($item['editions']) && is_array($item['editions']))
				{
					foreach ($item['editions'] as $edition) {
						if (preg_match('/^PRO /i', $edition['edition'])) {
							$this->editions[] = trim(substr($edition['edition'], 4));
						}
					}
				}
			}
		}

		// Save cache editions
		file_put_contents($cacheFile, json_encode($this->editions));
	}
}
