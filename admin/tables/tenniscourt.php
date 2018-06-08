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
        parent::__construct('#__TENNIS_MENU_', 'ID', $db);
    }
}