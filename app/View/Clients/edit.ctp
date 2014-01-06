<h2>Add New Client</h2>

<div class="clientsform">

<?php

	echo $this->Form->create('Client'); 
	echo $this->Form->input('name');
	echo $this->Form->input('locale');
	echo $this->Form->input('logo');
	echo $this->Form->input('id', array('type' => 'hidden'));
	
?>

<?php echo $this->Form->end(__('Update Item')); ?>
</div>




<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Client.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Client.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index')); ?></li>
	</ul>
</div>


