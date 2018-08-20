<?php
/**
 * @package     Tenniscourt
 * @subpackage  com_tenniscourt
 *
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * TennisReserveList Model
 *
 * @since  0.0.1
 */
class TennisCourtModelTennisReserves extends JModelList
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
/*		if (empty($config['filter_fields']))
		{
			$config['filter_fields'] = array(
			    'id',
				'user_id',
				'reserve_date',
				'begin_date',
			    'end_date',
			    'court_id'
			);
		}*/

		parent::__construct($config);
	}
	
	protected function getListQuery()
	{    
	    $db    = JFactory::getDbo();
	    
	    $query = $db->getQuery(true);
	    
	    $query
	    ->select(array('a.*', 'b.username', 'b.name'))
	    ->from($db->quoteName('#__tennis_reserve', 'a'))
	    ->join('INNER', $db->quoteName('#__users', 'b') . ' ON (' . $db->quoteName('a.userid') . ' = ' . $db->quoteName('b.id') . ')');
	    
	    
//	    var_dump(query);
	    
	    return $query;
	}
	
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return      string  An SQL query
	 */
	protected function getVerboseQuery()
	{

		// Initialize variables.
		$db    = JFactory::getDbo();
		
		$query = $db->getQuery(true);

		$query->select($db->quoteName(array('id', 'userid', 'reserve_date', 'begin_date', 'end_date', 'court_id')));

		$query->from($db->quoteName('#__tennis_reserve'));

		// Filter: like / search
		$search = $this->getState('filter.search');

		if (!empty($search))
		{
			$like = $db->quote('%' . $search . '%');
			$query->where('user_id LIKE ' . $like);
		}
		
		// Filter by opened state
		$opened = $this->getState('filter.open');
				
		// Add the list ordering clause.
		$orderCol	= $this->state->get('list.ordering', 'reserve_date');
		$orderDirn 	= $this->state->get('list.direction', 'asc');

		$query->order($db->escape($orderCol) . ' ' . $db->escape($orderDirn));
        
		return $query;
	}
}
