<?php
/**
 * @package     TennisCourt
 * @subpackage  com_tenniscourt
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// Set some global property
$document = JFactory::getDocument();
$document->addStyleDeclaration('.icon-tenniscourt {background-image: url(media/com_tenniscourt/images/Bitmap editor.png);}');

// Get an instance of the controller prefixed by TennisCourt
$controller = JControllerLegacy::getInstance('TennisCourt');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
