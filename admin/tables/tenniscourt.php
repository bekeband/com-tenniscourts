<?php
/**
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Tenniscourt table class
 *
 * @since  0.0.1
 */
class TennisCourtTableTennisCourt extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     */
    function __construct(&$db)
    {
        parent::__construct('#__TENNIS_COURTS', 'id', $db);
    }
    
    function getrownumb()
    {
        $db = JFactory::getDbo();
        $user = JFactory::getUser();
        $query = $db->getQuery(true);
        $query->select('COUNT(*)')->from('#__TENNIS_COURTS');
        $db->setQuery($query);
        $count = $db->loadResult();
        return $count;
    }
    
    public function bind($array, $ignore = '')
    {
        if (!isset($array['open']))
            $array['open'] = 0 ;
            
            return parent::bind($array, $ignore);
    } 
    
}