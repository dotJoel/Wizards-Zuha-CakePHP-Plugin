<?php
$data = unserialize($this->request->data['Wizard']['data']);
?>
<div class="wizards form">
<?php echo $this->Form->create('Wizard');?>
	<fieldset>
		<legend><?php echo __('Edit Wizard'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('plugin');
		echo $this->Form->input('controller');
		echo $this->Form->input('action');
		echo $this->Form->hidden('type', array('value' => 'simple'));
		echo $this->Form->input('position', array('value' => $data['position'], 'options' => array('Top Left', 'Top Center', 'Top Right', 'Middle Left', 'Middle Center', 'Middle Right', 'Bottom Left', 'Bottom Center', 'Bottom Right')));
		echo $this->Form->input('Wizard.text', array('value' => $data['text'], 'type' => 'richtext'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Save Changes'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wizard.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Wizard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wizards'), array('action' => 'index'));?></li>
	</ul>
</div>
