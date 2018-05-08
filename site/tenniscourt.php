<?php
/**
 * @package     Tenniscourt
 * 
 * A php file that loads the controller class
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Get an instance of the controller prefixed by TennisCourts
$controller = JControllerLegacy::getInstance('TennisCourts');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();