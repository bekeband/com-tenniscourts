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
<form action="index.php?option=com_tenniscourt&view=tennisfeatures" method="post" id="adminForm" name="adminForm">
	<div class="row-fluid">
		<div class="span6">
			<?php echo JText::_('COM_TENNISFEATURES_TENNISFEATURES_FILTER'); ?>
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
			<th width="1%"><?php echo JText::_('COM_TENNISFEATURES_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'TENNISFEATURE_NAME_FIELD', 'name', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'TENNISFEATURE_SINGLE_PLAY_FIELD', 'single_play', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'TENNISFEATURE_DOUBLE_PLAY_FIELD', 'double_play', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'TENNISFEATURE_PRACTICING_FIELD', 'practicing', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'TENNISFEATURE_MEDIUM_FIELD', 'medium', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'TENNISFEATURE_COMPETITION_FIELD', 'competition', $listDirn, $listOrder); ?>
			</th>
			<th width="5%">
				<?php echo JHtml::_('grid.sort', 'TENNISFEATURE_PRIZEMULT_FIELD', 'price_mult', $listDirn, $listOrder); ?>
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
					$link = JRoute::_('index.php?option=com_tenniscourt&task=tennisfeature.edit&id=' . $row->id);
				?>
					<tr>
						<td><?php echo $this->pagination->getRowOffset($i); ?></td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_TENNISFEATURES_EDIT_TENNISFEATURES'); ?>">
								<?php echo $row->name; ?>
							</a>
						</td>
						<td align="center">
						<?php echo $row->single_play; ?>
<!--							<?php echo JHtml::_('jgrid.published', $row->single_play, $i, 'tenniscourts.', true, 'cb'); ?> -->
						</td>
						<td align="center">
						<?php echo $row->double_play; ?>
<!--							<?php echo JHtml::_('jgrid.published', $row->double_play, $i, 'tenniscourts.', true, 'cb'); ?> -->
						</td>
						<td align="center">
						<?php echo $row->practicing; ?>
<!--							<?php echo JHtml::_('jgrid.published', $row->practicing, $i, 'tenniscourts.', true, 'cb'); ?> -->
						</td>
						<td align="center">
						<?php echo $row->medium; ?>
<!--							<?php echo JHtml::_('jgrid.published', $row->medium, $i, 'tenniscourts.', true, 'cb'); ?> -->
						</td>
						<td align="center">
						<?php echo $row->competition; ?>
<!-- 							<?php echo JHtml::_('jgrid.published', $row->competition, $i, 'tenniscourts.', true, 'cb'); ?> -->
						</td>
						<td align="center">
							<?php echo $row->price_mult; ?>
<!-- 							<?php echo JHtml::_('jgrid.published', $row->price_mult, $i, 'tenniscourts.', true, 'cb'); ?>  -->
							
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

