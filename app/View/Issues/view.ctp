<div class="issues view">
<h2><?php echo __('Issue'); ?></h2>
	<dl>
		<dt><?php echo __('Issue Id'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['issue_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publication'); ?></dt>
		<dd>
			<?php echo $this->Html->link($issue['Publication']['publication_name'], array('controller' => 'publications', 'action' => 'view', $issue['Publication']['publication_id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Number'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['issue_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Date Publication'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['issue_date_publication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Issue Cover'); ?></dt>
		<dd>
			<?php echo h($issue['Issue']['issue_cover']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Issue'), array('action' => 'edit', $issue['Issue']['issue_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Issue'), array('action' => 'delete', $issue['Issue']['issue_id']), null, __('Are you sure you want to delete # %s?', $issue['Issue']['issue_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Issues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Issue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Publications'), array('controller' => 'publications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication'), array('controller' => 'publications', 'action' => 'add')); ?> </li>
	</ul>
</div>
