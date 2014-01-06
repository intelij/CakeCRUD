<h3>Clients: <?=$count;?></h3>
<?php
echo $this->Html->link('Add New', array('controller' => 'clients', 'action' => 'add'));
?>
<div>
<?php 

echo '<pre>', print_r($clients), '</pre>'; 

foreach ($clients as $client) {
	// echo h($client['Client']['name']);
	echo $this->Html->link($client['Client']['name'], array('controller' => 'clients', 'action' => 'view', $client['Client']['id']));
	echo ' ----- ', 
	$this->Html->link('Edit', array('action' => 'edit', $client['Client']['id'])) , ' ----- ', 
	$this->Form->postLink('Delete', array('action' => 'delete', $client['Client']['id']),
									array('confirm' => 'Are you sure you want to delete, ' . $client['Client']['name'])) , ' ----- ', '<br/>';
	
}

?>
</div>

