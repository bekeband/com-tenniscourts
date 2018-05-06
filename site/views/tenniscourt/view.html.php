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

        
        // Get data from the model
        $this->items		= $this->get('Items');
        $this->pagination	= $this->get('Pagination');
        
        // Check for errors.
        if (count($errors = $this->get('Errors')))
        {
            JError::raiseError(500, implode('<br />', $errors));
            
            return false;
        }
     
//        $Fields = new JFormFieldTennisCourt();
        
        
//        $user = JFactory::getUser();
             
        $db =& JFactory::getDBO();
               
        // Get a db connection.
        $db = JFactory::getDBO();
        
        // Create a new query object.
        $query = $db->getQuery(true);
        
        // Select all records from the user profile table where key begins with "custom.".
        // Order it by the ordering field.
        $query->select($db->quoteName(array('FEATURES', 'TITLE')));
        $query->from($db->quoteName('#__TENNIS_COURTS'));
/*        $query->where($db->quoteName('profile_key') . ' LIKE '. $db->quote('\'custom.%\''));
        $query->order('ordering ASC');*/
        
        // Reset the query using our newly populated query object.
        $db->setQuery($query);
        $rows = $db->loadRowList();
        print_r($rows);
        // Load the results as a list of stdClass objects (see later for more options on retrieving data).
 
/*        $results = $db->loadObjectList();
        var_dump($results);
        $tct = new TableCourts($db);

        var_dump($tct);        
        
        $query = "SELECT FEATURES FROM `#__TENNIS_COURTS` WHERE 1";

        $db->setQuery($query);

        $row = $db->loadRowList();
        print_r($row);*/
        
        // Display the view
        parent::display($tpl);
    }
}
