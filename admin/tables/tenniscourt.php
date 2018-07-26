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
//class TableTennisCourt extends JTable
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
    
    public function bind($array, $ignore = '')
    {
        if (!isset($array['open']))
            $array['open'] = 0 ;
            
            return parent::bind($array, $ignore);
    } 
    
}