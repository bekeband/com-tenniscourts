<?php
/*
    * A simple php for viewing the tenniscourts list 
    * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
$this->addModelPath(JPATH_COMPONENT_ADMINISTRATOR.'/models');


/**
 * HTML View class for the TennisCourt component
 *
 * @since  0.0.1
 */
class TennisCourtViewTennisReserves extends JViewLegacy
{
    /**
     * Display the TennisCourts list 
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches 
     * through the template paths.
     *
     * @return  void
     */
    function display($tpl = null)
    {

        $this->items			= $this->get('Items');
        
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
