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
        
//        var_dump($user);
        
        $db =& JFactory::getDBO();
        $query = "SELECT FEATURES FROM '#__TENNIS_COURTS'";
        $db->setQuery($query);
        $results = $db->query();
/*        while($row = mysqli_fetch_array($results)){
            $alpha = $row['alpha'];
            $beta = $row['beta'];
        }*/
        
        var_dump($results);
        // Display the view
        parent::display($tpl);
    }
}
