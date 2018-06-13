<?php
/**
 * @package     TennisCourt
 * @subpackage  com_tenniscourt
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * TennisCourts Controller
 *
 * @since  0.0.1
 */
class TennisCourtControllerTennisCourts extends JControllerAdmin
{
    /**
     * Proxy for getModel.
     *
     * @param   string  $name    The model name. Optional.
     * @param   string  $prefix  The class prefix. Optional.
     * @param   array   $config  Configuration array for model. Optional.
     *
     * @return  object  The model.
     *
     * @since   1.6
     */
    public function getModel($name = 'TennisCourt', $prefix = 'TennisCourtModel', 
        $config = array('ignore_request' => true))
    {
        $model = parent::getModel($name, $prefix, $config);
        return $model;
    }
}
