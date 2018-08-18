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
<form action="index.php?option=com_tenniscourt&view=tennisreserves" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_TENNISRESERVE_ID'); ?></th>
			<th width="2%">
				<?php echo JText::_('COM_TENNISRESERVE_USER') ;// JHtml::_('grid.checkall'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_TENNISRESERVE_BEGIN_DATE') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_TENNISRESERVE_END_DATE'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_TENNISRESERVE_BOOKING_DATE'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_TENNISRESERVE_COURT_NUMBER'); ?>
			</th>
			<th width="5%">
				<?php echo JText::_("USERNAME"); ?>
			</th>
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
		JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_tenniscourt/models');
		$model = $this->getModel();
//		var_dump($this->get('Items'));
//		$table = $model->getTable();
//		$query = $model->getVerboseQuery();
		
//		$count = $table->getrownumb();
//		$rows = $table->load();
		
//		var_dump($this->id);
//		echo JPATH_ADMINISTRATOR . '/components/com_tenniscourt/tables';
		
//		JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_tenniscourt/tables');
		
//        $row = JTable::getInstance('TennisCourt', 'TennisCourtTable', array());
//        $row->load(1);
/*        var_dump($row);

        for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
        throw new Exception(var_dump($row), 404);*/

        ?>

			<?php if (!empty($this->items)) : ?>
				<?php //for ($i = 1; $i <= $this->items->size; $i++) {?>
				<?php foreach ($this->items as $i => $row) :?>

					<tr>
						<td>
							<?php echo $row->id; ?>
						</td>
						<td>
							<?php echo $row->userid; ?>
						</td>
						<td>
							<?php echo $row->begin_date; ?>
						</td>
						<td align="center">
							<?php echo $row->end_date; ?>
						</td>
						<td align="center">
							<?php echo $row->reserve_date; ?>
						</td>
						<td align="center">
							<?php echo $row->court_id; ?>
						</td>
						<td align="center">
							<?php echo $row->name; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>

