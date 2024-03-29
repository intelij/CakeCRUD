<div class="issues index">
	<h2><?php echo __('Issues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('issue_id'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_publication_id'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_number'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_date_publication'); ?></th>
			<th><?php echo $this->Paginator->sort('issue_cover'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($issues as $issue): ?>
	<tr>
		<td><?php echo h($issue['Issue']['issue_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($issue['Publication']['publication_name'], array('controller' => 'publications', 'action' => 'view', $issue['Publication']['publication_id'])); ?>
		</td>
		<td><?php echo h($issue['Issue']['issue_number']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['issue_date_publication']); ?>&nbsp;</td>
		<td><?php echo h($issue['Issue']['issue_cover']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $issue['Issue']['issue_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $issue['Issue']['issue_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $issue['Issue']['issue_id']), null, __('Are you sure you want to delete # %s?', $issue['Issue']['issue_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Issue'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Publications'), array('controller' => 'publications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication'), array('controller' => 'publications', 'action' => 'add')); ?> </li>
	</ul>
</div>
