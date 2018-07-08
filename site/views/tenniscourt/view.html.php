<?php
/**
 *  Tenniscourt
 *  A php file for displaying the view
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');


/**
 * HTML View class for the TennisCourt Component
 *
 * @since  0.0.1
 */
class TennisCourtViewTennisCourt extends JViewLegacy
{
    /**
     * Display the TennisCourt
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
        var_dump($this->items);
        
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
