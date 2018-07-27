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
<form action="index.php?option=com_tenniscourt&view=tenniscourts" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_TENNISCOURT_ID'); ?></th>
			<th width="2%">
				<?php echo JText::_('COM_TENNISCOURT_NAME') ;// JHtml::_('grid.checkall'); ?>
			</th>
			<th width="90%">
				<?php echo JText::_('COM_TENNISCOURT_TITLE') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_TENNISCOURT_FEATURE'); ?>
			</th>
			<th width="2%">
				<?php echo JText::_('COM_TENNISCOURT_ISOPEN'); ?>
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
		$model = $this->getModel();

		$table = $model->getTable();
		$count = $table->getrownumb();
		$rows = $table->load();
		
//		var_dump($this->id);
		echo JPATH_ADMINISTRATOR . '/components/com_tenniscourt/tables';
		
		JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_tenniscourt/tables');
		
        $row = JTable::getInstance('TennisCourt', 'TennisCourtTable', array());
//        $row->load(1);
/*        var_dump($row);

        for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
        throw new Exception(var_dump($row), 404);*/
        ?>

			<?php // if (!empty($this->items)) : ?>
				<?php for ($i = 1; $i <= $count; $i++) {?>

					<tr>
						<td>
							<?php echo $row->id; ?>
						</td>
						<td>
							<?php echo $row->name; // JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<?php echo $row->title; ?>
						</td>
						<td align="center">
							<?php echo $row->features; // JHtml::_('jgrid.published', $row->published, $i, 'tenniscourts.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->open; // $row->id; ?>
						</td>
					</tr>
				<?php }; ?>
			<?php // endif; ?>
		</tbody>
	</table>
</form>

