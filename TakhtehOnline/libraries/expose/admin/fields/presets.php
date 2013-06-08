<?php
/**
 * @package     Expose
 * @version     4.0
 * @author      ThemeXpert http://www.themexpert.com
 * @copyright   Copyright (C) 2010 - 2011 ThemeXpert
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3
 **/

// restricted access
defined('_JEXEC') or die( 'Restricted access' );
//import necessary classes
jimport('joomla.html.html');
jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');
jimport('joomla.form.formfield');
jimport('joomla.form.helper');

class JFormFieldPresets extends JFormField
{

	public $type = 'Presets';

	 protected function getInput(){

        global $expose;
        $html = array();
        $options = array();
        //get template id
        $url = JURI::getInstance();
        $id = $url->getVar('id');

        // Initialize some field attributes.
        $filter			= '\.css$';
		$exclude		= (string) $this->element['exclude'];
		$stripExt		= TRUE ;
		$hideNone		= (string) $this->element['hide_none'];
		//$hideDefault	= (string) $this->element['hide_default'];
        $class = $this->element['class'];
        $attr = $this->element['size'] ? ' size="'.(int) $this->element['size'].'"' : '';

        $pretext        = ($this->element['pretext'] != NULL) ? '<span class="pre-text hasTip" title="::'. JText::_(($this->element['pre-desc']) ? $this->element['pre-desc'] : $this->description) .'">'. JText::_($this->element['pretext']). '</span>' : '';

        $posttext       = ($this->element['posttext'] != NULL) ? '<span class="post-text">'.JText::_($this->element['posttext']).'</span>' : '';

        $wrapstart  = '<div class="field-wrap patterns clearfix '.$class.'">';
        $wrapend    = '</div>';

        $path = JPATH_ROOT . '/templates/' . getTemplate($id) . '/css/styles';
        $lessPath = JPATH_ROOT . '/templates/' . getTemplate($id) . '/less/styles';


         // Prepend some default options based on field attributes.
		if (!$hideNone) {
			$options[] = JHtml::_('select.option', '-1', JText::alt('JOPTION_DO_NOT_USE', preg_replace('/[^a-zA-Z0-9_\-]/', '_', $this->fieldname)));
		}

        // Get the less folder path
        /*$lessFiles = JFolder::files($lessPath, '\.less$');*/

         //compile all preset less files first
         $expose->compilePresetStyles();

         /*if( is_array($lessFiles))
         {
             foreach( $lessFiles as $lessFile)
             {
                 $filePath = 'styles/'.$lessFile;
                 $lessFile = substr($lessFile, 0, strpos($lessFile, '.')) . '.css';
                 $expose->compileLessFile($filePath, 'css/styles', $lessFile);
             }
         }*/

         // Get a list of files in the search path with the given filter.
        $files = JFolder::files($path, $filter);

        // Build the options list from the list of files.
		if (is_array($files)) {
			foreach($files as $file) {

				// Check to see if the file is in the exclude mask.
				if ($exclude) {
					if (preg_match(chr(1).$exclude.chr(1), $file)) {
						continue;
					}
				}

				// If the extension is to be stripped, do it.
				if ($stripExt) {
					$file = JFile::stripExt($file);
				}

				$options[] = JHtml::_('select.option', $file, ucfirst($file));
			}
		}

	    // Create a read-only list (no name) with a hidden input to store the value.
        if ((string) $this->element['readonly'] == 'true') {
                $html[] = JHtml::_('select.genericlist', $options, '', trim($attr), 'value', 'text', $this->value, $this->id);
                $html[] = '<input type="hidden" name="'.$this->name.'" value="'.$this->value.'"/>';
        }
        // Create a regular list.
        else {
                $html[] = JHtml::_('select.genericlist', $options, $this->name, trim($attr), 'value', 'text', $this->value, $this->id);
        }

        return $wrapstart . $pretext. implode($html) . $posttext . $wrapend;
	}
}