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
 * Media widget
 *
 * @package     JSNTPLFramework
 * @subpackage  Widget
 * @since       1.0.0
 */
class JSNTplWidgetMedia extends JSNTplWidgetBase
{
	/**
	 * Implement invoke actions
	 *
	 * @param   string  $action  Action to invoke
	 * @return  void
	 */
	public function invoke ($action)
	{
		switch ($action)
		{
			case 'folders': $this->_fetchFolders($this->_getPath()); break;
			case 'files'  : $this->_fetchFiles($this->_getPath());   break;
		}
	}

	public function thumbnailAction ()
	{
		try {
			require_once JSN_PATH_TPLFRAMEWORK . '/libraries/3rd-party/PhpThumb/ThumbLib.inc.php';

			$file = realpath(JPATH_ROOT . '/' . $this->request->getString('file'));
			$config = JFactory::getConfig();

			$phpThumb = PhpThumbFactory::create($file);
			$phpThumb->resize(80, 80);

			// Checking thumbnail cache
			$cacheName = md5_file($file);
			$cacheDir = $config->get('tmp_path') . '/jsn-thumbnails/';
			$cacheFile = $cacheDir . '/' . $cacheName . '.' . pathinfo($file, PATHINFO_EXTENSION);

			if (!is_dir($cacheDir)) {
				mkdir($cacheDir);
			}

			if (!is_file($cacheFile)) {
				$phpThumb->save($cacheFile);
			}

			$phpThumb->show();
		}
		catch (Exception $ex) {
		}

		jexit();
	}

	/**
	 * Action to handle media upload
	 *
	 * @return  void
	 */
	public function uploadAction ()
	{
		if ($this->request->getMethod() != 'POST') {
			return;
		}

		$params = JComponentHelper::getParams('com_media');
		$file  = JRequest::getVar('jsn-file-upload', '', 'files', 'array');

		if (!class_exists('MediaHelper')) {
			require_once JPATH_ADMINISTRATOR . '/components/com_media/helpers/media.php';
		}

		// Load com_media language
		$this->language->load('com_media');

		// The request is valid
		$error = null;
		if (!MediaHelper::canUpload($file, $error)) {
			throw new Exception(JText::_($error));
		}

		$filepath	= JPath::clean($this->_getPath() . '/' . JFile::makeSafe($file['name']));

		if (!JFile::upload($file['tmp_name'], $filepath)) {
			// Error in upload
			JError::raiseWarning(100, JText::_('COM_MEDIA_ERROR_UNABLE_TO_UPLOAD_FILE'));
			return false;
		}

		$rootPath	= realPath(JPATH_ROOT . DIRECTORY_SEPARATOR . 'images');
		$path		= str_replace(DIRECTORY_SEPARATOR, '/', $filepath);
		$path		= substr($path, strlen($rootPath));

		$this->setResponse(array(
			'id' => md5($path),
			'path' => $path
		));
	}

	/**
	 * Action to verify if a directory is writable.
	 *
	 * @return void
	 */
	public function verifyFolderAction()
	{
		// Import necessary Joomla libraries
		jimport('joomla.filesystem.folder');
		jimport('joomla.filesystem.path');

		// Get folder to verify
		$folder = JFactory::getApplication()->input->getString('folder', 'cache/');

		if ( ! preg_match('#^(/|\\|[a-z]:)#i', $folder))
		{
			$folder = JPATH_ROOT . '/' . $folder;
		}

		// Check if directory exist
		if ( ! is_dir($folder))
		{
			$this->setResponse(array(
				'pass'		=> false,
				'message'	=> JText::_('JSN_TPLFW_DIRECTORY_NOT_FOUND')
			));

			return;
		}

		// Check if folder is outside of document root directory
		if ( ! realpath($folder) OR strpos(realpath($folder), realpath($_SERVER['DOCUMENT_ROOT'])) === false)
		{
			$this->setResponse(array(
				'pass'		=> false,
				'message'	=> JText::_('JSN_TPLFW_DIRECTORY_OUT_OF_ROOT')
			));

			return;
		}

		// Check if directory is writable
		if ( ! is_writable($folder))
		{
			$this->setResponse(array(
				'pass'		=> false,
				'message'	=> JText::_('JSN_TPLFW_DIRECTORY_NOT_WRITABLE')
			));

			return;
		}

		$this->setResponse(array(
			'pass'		=> true,
			'message'	=> JText::_('JSN_TPLFW_DIRECTORY_READY')
		));
	}

	/**
	 * Fetch all folders inside a path
	 *
	 * @param   string  $path  Path to retrieve all children folders
	 * @return  void
	 */
	private function _fetchFolders ($path)
	{
		$folders = array();
		$rootPath = realPath(JPATH_ROOT . DIRECTORY_SEPARATOR . 'images');

		foreach (glob($path . '/*', GLOB_ONLYDIR) as $folder)
		{
			$hasChildren  = count(glob($folder . '/*'), GLOB_ONLYDIR) > 0;
			$relativePath = substr(realpath($folder), strlen($rootPath));
			$title        = basename($folder);

			$folders[] = array(
				'title'    => $title,
				'data'     => array('path' => str_replace(DIRECTORY_SEPARATOR, '/', $relativePath)),
				'isLazy'   => true,
				'isFolder' => true
			);
		}

		echo json_encode($folders);
		exit;
	}

	/**
	 * Fetch all files inside a path
	 *
	 * @param   string  $path  Path to retrieve all files
	 * @return  void
	 */
	private function _fetchFiles ($path)
	{
		$files    = array();
		$rootPath = realPath(JPATH_ROOT);

		$fileList = glob($path . '/*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}', GLOB_BRACE);
		foreach ($fileList as $imageFile)
		{
			$fileInfo = pathinfo($imageFile);

			$filePath = substr($imageFile, strlen($rootPath) + 1);
			$filePath = str_replace(DIRECTORY_SEPARATOR, '/', $filePath);

			$item = array();
			$item['title'] = $fileInfo['basename'];
			$item['data'] = array(
				'path'      => $filePath,
				'size'      => filesize($imageFile),
				'mtime'     => filemtime($imageFile),
				'url'       => $filePath,
				'id'        => md5($filePath),
				'thumbnail' => $this->_getThumbnail($imageFile)
			);

			$files[] = $item;
		}

		$this->setResponse($files);
	}

	/**
	 * Find generated thumbnail of passed file
	 *
	 * @param   string  $file  Path to original file
	 *
	 * @return  string
	 */
	private function _getThumbnail ($file)
	{
		if (!is_file($file)) {
			return false;
		}

		$config = JFactory::getConfig();
		$cacheDir = $config->get('tmp_path') . '/jsn-thumbnails/';
		$cacheName = md5_file($file);
		$cacheExt = pathinfo($file, PATHINFO_EXTENSION);
		$cacheFile = $cacheName . '.' . $cacheExt;

		return is_file($cacheDir . $cacheFile) ? JUri::root(true) . '/tmp/jsn-thumbnails/' . $cacheFile : false;
	}

	/**
	 * Return requested path from client
	 *
	 * @return  string
	 */
	private function _getPath ()
	{
		$rootPath = realPath(JPATH_ROOT . DIRECTORY_SEPARATOR . 'images');
		$requestPath = $this->_cleanPath($this->request->getString('path'));

		if (empty($requestPath)) {
			$requestPath = DIRECTORY_SEPARATOR;
		}

		$folderPath = realPath($rootPath . DIRECTORY_SEPARATOR . $requestPath);

		if (strpos($folderPath, $rootPath) === false) {
			$folderPath = $rootPath;
		}

		return $folderPath;
	}

	/**
	 * Helper method to remove all special characters
	 * from path
	 *
	 * @param   string  $path  Path to cleaning
	 * @return  string
	 */
	private function _cleanPath ($path)
	{
		$path = str_replace('\\', '/', $path);
		$path = str_replace('..', '', $path);

		// Remove special path string
		while (strpos($path, '//') === true)
		{
			$path = str_replace('//', '/', $path);
		}

		return $path;
	}
}
