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
class TennisCourtModelTennisFeatures extends JModelList
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
			    `id`,
			    `name`,
			    `single_play`,
			    `double_play`,
			    `practicing`,
			    `medium`,
			    `competition`,
			    `price_mult`
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
			  ->from($db->quoteName('#__TENNIS_FEATURES'));

		// Filter: like / search
		$search = $this->getState('filter.search');

		if (!empty($search))
		{
			$like = $db->quote('%' . $search . '%');
			$query->where('id LIKE ' . $like);
		}

		// Filter by published state
/*		$single_play = $this->getState('filter.single_play');

		if (is_numeric($single_play))
		{
			$query->where('single_play = ' . (int) $single_play);
		}
		elseif ($single_play === '')
		{
			$query->where('(single_play IN (0, 1))');
		}*/

		// Add the list ordering clause.
		$orderCol	= $this->state->get('list.ordering', 'id');
		$orderDirn 	= $this->state->get('list.direction', 'asc');

		$query->order($db->escape($orderCol) . ' ' . $db->escape($orderDirn));

		return $query;
	}
}
