<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

/**
 * Tenniscourt Form Field class for the Tenniscourt component
 *
 * @since  0.0.1
 */
class JFormFieldTennisCourt extends JFormFieldList
{
    /**
     * The field type.
     *
     * @var         string
     */
    protected $type = 'TennisCourt';
    
    /**
     * Method to get a list of options for a list input.
     *
     * @return  array  An array of JHtml options.
     */
    protected function getOptions()
    {
        $db    = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('ID, POSX, POSY, TITLE, FEATURES');
        $query->from('TENNIS_COURTS');
        $db->setQuery((string) $query);
        $messages = $db->loadObjectList();
        $options  = array();
        
        if ($messages)
        {
            foreach ($messages as $message)
            {
//                $options[] = JHtml::_('select.option', $message->ID, $message->TITLE);
                $options[] = JHtml::_('select.option', $message->TITLE);
            }
        }
        
        $options = array_merge(parent::getOptions(), $options);
        
        return $options;
    }
}