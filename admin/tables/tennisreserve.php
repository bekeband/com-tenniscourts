<?php
/**
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * TennisReserve table class
 * 
 * @since  0.0.1
 */
class TennisCourtTableTennisReserve extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     */
    function __construct(&$db)
    {
        parent::__construct('#__tennis_reserve', 'id', $db);
    }
}