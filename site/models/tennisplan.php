<?php
/**
 * @package     bekeband
 * @subpackage  com_tenniscourt
 * A php file that represents the model itself
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * TennisCourts Model
 *
 * @since  0.0.1 TennisCourtModelTennisCourt
 */
class TennisCourtModelTennisPlan extends JModelItem
{

    /**
     * Method to get a table object, load it if necessary.
     *
     * @param   string  $type    The table name. Optional.
     * @param   string  $prefix  The class prefix. Optional.
     * @param   array   $config  Configuration array for model. Optional.
     *
     * @return  JTable  A JTable object
     *
     * @since   1.6
     */
    public function getTable($type = 'TennisCourt', $prefix = 'TennisCourtTable', $config = array())
    {
        return JTable::getInstance($type, $prefix, $config);
    }
    
    protected function getListQuery()
    {
        $db    = JFactory::getDbo();
        
        $query = $db->getQuery(true);
        
        $query
        ->select(array('a.*', 'b.username', 'b.name'))
        ->from($db->quoteName('#__tennis_reserve', 'a'))
        ->join('INNER', $db->quoteName('#__users', 'b') . ' ON (' . $db->quoteName('a.userid') . ' = ' . $db->quoteName('b.id') . ')');
        
        
        //	    var_dump(query);
        
        return $query;
    }
    
    
}