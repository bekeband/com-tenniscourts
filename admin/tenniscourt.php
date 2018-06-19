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
<<<<<<< HEAD
$document->addStyleDeclaration('.icon-tenniscourt {background-image: url(../media/com_tenniscourt/images/Camera.png);}');
=======
$document->addStyleDeclaration('.icon-tenniscourt {background-image: url(media/com_tenniscourt/images/Bitmap editor.png);}');
>>>>>>> 14dadb4ba0f3946f5bf2ca55c3fe0e42c1c92171

// Get an instance of the controller prefixed by TennisCourt
$controller = JControllerLegacy::getInstance('TennisCourt');

// Perform the Request task
$input = JFactory::getApplication()->input;
$controller->execute($input->getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
