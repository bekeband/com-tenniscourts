<?php
/**
 * @package     TennisCourt
 * @subpackage  com_tenniscourt
 *
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

JHtml::_('formbehavior.chosen', 'select');

$listOrder     = $this->escape($this->filter_order);
$listDirn      = $this->escape($this->filter_order_Dir);

?>
<form action="index.php?option=com_tenniscourt&view=tennicourts" method="post" id="adminForm" name="adminForm">
	<div class="row-fluid">
		<div class="span6">
			<?php echo JText::_('COM_TENNISCOURT_TENNISCOURTS_FILTER'); ?>
			<?php
				echo JLayoutHelper::render(
					'joomla.searchtools.default',
					array('view' => $this)
				);
			?>
		</div>
	</div>
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_TENNISCOURT_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="10%">
				<?php echo JHtml::_('grid.sort', 'COM_TENNISCOURT_TENNISCOURTS_NAME', 'name', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'COM_TENNISCOURT_TENNISCOURTS_POSX', 'posx', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'COM_TENNISCOURT_TENNISCOURTS_POSY', 'posy', $listDirn, $listOrder); ?>
			</th>
			<th width="40%">
				<?php echo JHtml::_('grid.sort', 'COM_TENNISCOURT_TENNISCOURTS_TITLE', 'title', $listDirn, $listOrder); ?>
			</th>
			<th width="40%">
				<?php echo JHtml::_('grid.sort', 'COM_TENNISCOURT_TENNISCOURTS_FEAT', 'features', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'COM_TENNISCOURT_OPENED', 'open', $listDirn, $listOrder); ?>
			</th>
			<th width="2%">
				<?php echo JHtml::_('grid.sort', 'COM_TENNISCOURT_ID', 'id', $listDirn, $listOrder); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) :
					$link = JRoute::_('index.php?option=com_tenniscourt&task=tenniscourt.edit&id=' . $row->id);
				?>
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TENNISCOURT_EDIT_TENNISCOURT'); ?>">
								<?php echo $row->name; ?>
							</a>
						</td>
						<td align="center">
							<?php echo $row->posx; ?>
						</td>
						<td align="center">
							<?php echo $row->posy; ?>
						</td>
						<td align="center">
							<?php echo $row->title; ?>
						</td>
						<td align="center">
							<?php echo $row->features; ?>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->open, $i, 'tenniscourts.', true, 'cb'); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/>
	<input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>"/>
	<input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>"/>
	<?php echo JHtml::_('form.token'); ?>
</form>

