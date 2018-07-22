<?php
/**
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * TennisTimes table class
 * 
 * @since  0.0.1
 */
class TennisTimesTableTennisTimes extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     */
    function __construct(&$db)
    {
        parent::__construct('#__TENNIS_RESERVE', 'ID', $db);
    }
}