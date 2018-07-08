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
			<th width="1%"><?php echo JText::_('COM_TENNISCOURT_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="90%">
				<?php echo JText::_('COM_TENNISCOURT_NAME') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_TENNISCOURT_PUBLISHED'); ?>
			</th>
			<th width="2%">
				<?php echo JText::_('COM_TENNISCOURT_ID'); ?>
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
		$courts = $model->getCourtsNumber(1);
//		var_dump($model);
//		JTable::addIncludePath(JPATH_ADMINISTRATOR . '/components/com_recipes/tables');
//        $row = JTable::getInstance('recipes', 'Table', array());
//        var_dump($row);
        ?>

			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :  ?>

					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<?php echo $row->greeting; ?>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->published, $i, 'tenniscourts.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
</form>

