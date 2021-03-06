<?php
/**
 *  Tenniscourt
 *  A php file for displaying the view
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');


/**
 * HTML View Class for TennisCourt component view the TennisPlan 
 *
 * @since  0.0.1
 */
class TennisCourtViewTennisPlan extends JViewLegacy
{
    /**
     * Display the TennisCourts plan
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches 
     * through the template paths.
     *
     * @return  void
     */
    function display($tpl = null)
    {
        // Assign data to the view
        $this->msg = $this->get('Msg');
        $this->items			= $this->get('Items');
//        var_dump($this);
//        throw new Exception('$this->items			= $this->get(\'Items\');', 500);
        
        // Check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
            
            return false;
        }
        
        // Display the view
        parent::display($tpl);
    }
    
}
