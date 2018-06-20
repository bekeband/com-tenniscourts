<?php
/**
 * @package     TennisCourt
 * @subpackage  /home/bekeband/joomla-components/com-tenniscourts
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * TennisFeatures View
 *
 * @since  0.0.1
 */
class TennisCourtViewTennisFeatures extends JViewLegacy
{
	/**
	 * Display the TennisFeatures view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	function display($tpl = null)
	{
        
		// Get application
		$app = JFactory::getApplication();
		
		$context = "tenniscourt.list.admin.tenniscourt";
		// Get data from the model
		$this->items			= $this->get('Items');
		$this->pagination		= $this->get('Pagination');
		$this->state			= $this->get('State');
		$this->filter_order 	= $app->getUserStateFromRequest($context.'filter_order', 'filter_order', 'name', 'cmd');
		$this->filter_order_Dir = $app->getUserStateFromRequest($context.'filter_order_Dir', 'filter_order_Dir', 'asc', 'cmd');
		$this->filterForm    	= $this->get('FilterForm');
		$this->activeFilters 	= $this->get('ActiveFilters');
        
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));

			return false;
		}

		// Set the toolbar and number of found items
		$this->addToolBar();

		// Display the template
		parent::display($tpl);

		// Set the document
		$this->setDocument();
	}

	/**It will be display the admin setting the tenniscourts manager page.
	 * Add the page title and toolbar.
	 * 
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		$title = JText::_('COM_TENNISFEATURE_MANAGER_TENNISFEATURE');

		if ($this->pagination->total)
		{
			$title .= "<span style='font-size: 0.5em; vertical-align: middle;'>(" . $this->pagination->total . ")</span>";
		}

		JToolBarHelper::title($title, 'tennisfeature');
		JToolBarHelper::addNew('tennisfeature.add');
		JToolBarHelper::editList('tennisfeature.edit');
		JToolBarHelper::deleteList('', 'tennisfeature.delete');
	}
	/**
	 * Method to set up the document properties
	 *
	 * @return void
	 */
	protected function setDocument() 
	{
		$document = JFactory::getDocument();
		$document->setTitle(JText::_('COM_TENNISFEATURE_ADMINISTRATION'));
	}
}