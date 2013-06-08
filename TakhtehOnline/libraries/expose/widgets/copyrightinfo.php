<?php
/**
 * @package     Expose
 * @version     4.0
 * @author      ThemeXpert http://www.themexpert.com
 * @copyright   Copyright (C) 2010 - 2011 ThemeXpert
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3
 **/
//prevent direct access
defined ('EXPOSE_VERSION') or die ('resticted aceess');

//import parent gist class
expose_import('core.widget');

class ExposeWidgetCopyrightinfo extends ExposeWidget{

    public $name = 'copyrightinfo';

    public function render()
    {
        global $expose;
        ob_start();
            ?>
            <span class="copyright">
                <?php echo ($this->get('text')) ? $this->get('text') :  JText::_('EXPOSE_DEFAULT_COPYRIGHT'); ?>
            </span>
        <?php
        return ob_get_clean();
    }
}
?>
