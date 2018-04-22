<?php
/**
 *  Tenniscourt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * HTML View class for the Tenniscourt Component
 *
 * @since  0.0.1
 */
class TenniscourtViewTenniscourt extends JViewLegacy
{
    /**
     * Display the Tenniscourt view
     *
     * @param   string  $tpl  The name of the template file to parse; automatically searches 
     * through the template paths.
     *
     * @return  void
     */
    function display($tpl = null)
    {
        // Assign data to the view
        $this->msg = 'Message from function display($tpl = null)';
        
        $user = JFactory::getUser();
        
        var_dump
        
        // Get a db connection.
        $db = JFactory::getDbo();
        
        // Create a new query object.
        $query = $db->getQuery(true);
        
        // Select all records from the user profile table where key begins with "custom.".
        // Order it by the ordering field.
        $query->select($db->quoteName(array('user_id', 'profile_key', 'profile_value', 'ordering')));
        $query->from($db->quoteName('#__TENNISCOURTS'));
        $query->where($db->quoteName('profile_key') . ' LIKE '. $db->quote('\'custom.%\''));
        $query->order('ordering ASC');
        
        // Reset the query using our newly populated query object.
        $db->setQuery($query);
        
        // Load the results as a list of stdClass objects (see later for more options on retrieving data).
        $results = $db->loadObjectList();
        
        // Display the view
        parent::display($tpl);
    }
}
