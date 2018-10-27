<?php 

/**
 * @package      com_tenniscourts
 * @subpackage  A php file containing the default view
 *
 * 
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_tenniscourt&view=tennisplan" method="post" id="adminForm" name="adminForm">
	<table frame="box" class="table table-striped table-hover">
		<thead>
		<tr>
		<?php $courtsarr = array(1, 2, 3, 4);?>
		<?php $hourarr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11); foreach ($hourarr as $value) { ?>
		    <th width="1%"><?php echo $value; ?></th>

		<?php } ?>
		
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
				<?php //echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<?php 
		$model = $this->getModel();

//		var_dump($model);
//		throw new Exception("Exception", 404);
		$table = $model->getTable();
		
		$rows = $table->load();
		
//		var_dump($this->id);
		
		JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_tenniscourt/tables');
		
		// Count of courts. TennisCourtTableTennisCourt
        $courtsrow = JTable::getInstance('TennisCourt', 'TennisCourtTable', array());
        
        // Reserving database open. TennisCourtTableTennisReserve
        $planning = JTable::getInstance('TennisReserve', 'TennisCourtTable', array());

//        $median_date = JFactory::getDate();
        $median_date = new DateTime('NOW');
        $min_date = new DateTime('NOW');
        $max_date = new DateTime('NOW');
        
        $minus_interval = new DateInterval('PT2H');    
        $plus_interval = new DateInterval('P1D');
        
        $min_date->sub($minus_interval);
        $max_date->add($plus_interval);
        
        $diff_hours = $max_date->diff($min_date);
        
//        var_dump($min_date);
//        var_dump($max_date);
//        var_dump($diff_hours);
        
        $columns = ($diff_hours->d * 24) + $diff_hours->h;
        
        var_dump($columns);
        
        
        ?>
			<?php foreach ($courtsarr as $value) { ?>
			
				<tr>
					<td>
					<?php for ($hourvalue = 1; $hourvalue <= $columns; $hourvalue++) { ?>
		    			<th width="1%"><?php echo $hourvalue; ?></th>
		    			<?php } ?>
					</td>
						<td>
							<?php //echo $courtsrow->name; // JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<?php //echo $courtsrow->title; ?>
						</td>
						<td align="center">
							<?php //echo $courtsrow->features; // JHtml::_('jgrid.published', $row->published, $i, 'tenniscourts.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php //echo $courtsrow->open; // $row->id; ?>
						</td>
					</tr>
				<?php } ?>
		</tbody>
	</table>
</form>

