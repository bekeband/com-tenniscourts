<?php
/**
 * @package     TennisCourt
 * @subpackage  com_tenniscourt
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');

/**
 * TennisCourt Form Field class for the Tenniscourt component
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
        $query->select('TITLE, FEATURE');
        $query->from('#__TENNIS_COURTS');
        $db->setQuery((string) $query);
        $messages = $db->loadObjectList();
        $options  = array();

        if ($messages)
        {
            foreach ($messages as $message)
            {
                $options[] = JHtml::_('select.option', $message->TITLE);
            }
        }
        
        $options = array_merge(parent::getOptions(), $options);
        
        return $options;
    }
}