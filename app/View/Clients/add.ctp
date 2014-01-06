<div>
	<h2>Add New Client</h2>
<?php 

echo $this->Form->create('Client'); 
echo $this->Form->input('name');
echo $this->Form->input('locale');
echo $this->Form->input('logo');
echo $this->Form->end('Add New Client');

?>
</div>
