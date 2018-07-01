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
class TennisCourtTableTennisFeature extends JTable
{
    /**
     * Constructor
     *
     * @param   JDatabaseDriver  &$db  A database connector object
     */
    function __construct(&$db)
    {
        parent::__construct('#__TENNIS_FEATURES', 'id', $db);
    }
    
    public function bind($array, $ignore = '')
    {
        
        if (!isset($array['single_play']))
            $array['single_play'] = 0 ;
        if (!isset($array['double_play']))
            $array['double_play'] = 0 ;
        if (!isset($array['practicing']))
            $array['practicing'] = 0 ;
        if (!isset($array['medium']))
            $array['medium'] = 0 ;
        if (!isset($array['competition']))
            $array['competition'] = 0 ;
        
        return parent::bind($array, $ignore);
    }
    
}