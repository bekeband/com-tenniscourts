<?php
/**
 * @package     Tenniscourt
 * @subpackage  com_tenniscourt
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * TennisCourtList Model
 *
 * @since  0.0.1
 */
class TennisCourtModelTennisCourts extends JModelList
{
	/**
	 * Constructor.
	 *
	 * @param   array  $config  An optional associative array of configuration settings.
	 *
	 * @see     JController
	 * @since   1.6
	 */
	public function __construct($config = array())
	{

		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
			    'id',
				'name',
				'posx',
				'posy',
			    'title',
			    'features',
			    'open'
			);
		}

		parent::__construct($config);
	}

	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getListQuery()
	{

		// Initialize variables.
		$db    = JFactory::getDbo();
//		$TTable = TennisCourtTableTennisCourt($db);
		$query = $db->getQuery(true);

		// Create the base select statement.
		$query->select('*')
			  ->from($db->quoteName('#__TENNIS_COURTS'));

		// Filter: like / search
		$search = $this->getState('filter.search');

		if (!empty($search))
		{
			$like = $db->quote('%' . $search . '%');
			$query->where('name LIKE ' . $like);
		}
		
		// Filter by opened state
		$opened = $this->getState('filter.open');
		
		
		if (is_numeric($opened))
		{
		    $query->where('open = ' . (int) $opened);
		}
		elseif ($opened === '')
		{
		    $query->where('(open IN (0, 1))');
		}
		
		// Filter by published state
/*		$opened = $this->getState('filter.open');

		if (is_numeric($opened))
		{
			$query->where('open = ' . (int) $opened);
		}
		elseif ($opened === '')
		{
			$query->where('(open IN (0, 1))');
		}*/

		// Add the list ordering clause.
		$orderCol	= $this->state->get('list.ordering', 'name');
		$orderDirn 	= $this->state->get('list.direction', 'asc');

		$query->order($db->escape($orderCol) . ' ' . $db->escape($orderDirn));

		return $query;
	}
}
