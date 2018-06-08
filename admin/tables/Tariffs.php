<?php
/**
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * TennisTariffs table class
 *
 * @since  0.0.1
 */
class TennisTariffsTableTennisTariffs extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     */
    function __construct(&$db)
    {
        parent::__construct('#__TENNIS_TARIF', 'ID', $db);
    }
}