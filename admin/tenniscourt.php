<?php
/**
 * @package     bekeband
 * @subpackage  com_tenniscourt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');




$user = JFactory::getUser();


if ($user->authorise('core.edit', 'com_content'))
{
    echo "<p>You may edit all content.</p>";
}
else
{
    echo "<p>You may not edit all content.</p>";
}

if ($user->authorise('core.edit.own', 'com_content'))
{
    echo "<p>You may edit your own content.</p>";
}
else
{
    echo "<p>You may not edit your own content.</p>";
}