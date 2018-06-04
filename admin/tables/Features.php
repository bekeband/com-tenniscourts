<?php
/**
 */
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * TennisFeatures table class
 *
 * @since  0.0.1
 */
class TennisFeaturesTableTennisFeatures extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     */
    function __construct(&$db)
    {
        parent::__construct('#__TENNIS_FEATURES', 'ID', $db);
    }
}