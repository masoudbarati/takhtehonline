<?php
/**
 * @package     Expose
 * @version     4.0
 * @author      ThemeXpert http://www.themexpert.com
 * @copyright   Copyright (C) 2010 - 2011 ThemeXpert
 * @license     http://www.gnu.org/licenses/gpl-3.0.html GNU/GPLv3
 * @filesource
 * @file        totop.php
 **/

//prevent direct access
defined ('EXPOSE_VERSION') or die ('resticted aceess');

//import parent gist class
expose_import('core.widget');

class ExposeWidgetTotop extends ExposeWidget{

    public $name = 'totop';

    public function render()
    {
        global $expose;
        $js = "
            jQuery('#scrolltop').click(function () {
                jQuery('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });
        ";
        $expose->addjQDom($js);

        ob_start()
    ?>
    <a id="scrolltop" href="#top"><span><?php echo JText::_('BACK_TO_TOP'); ?></span></a>

    <?php
        return ob_get_clean();
    }
}
?>

