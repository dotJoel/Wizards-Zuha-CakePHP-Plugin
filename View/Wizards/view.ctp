<div class="wizards view">
<h2><?php  echo __('Wizard');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wizard['Wizard']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Plugin'); ?></dt>
		<dd>
			<?php echo h($wizard['Wizard']['plugin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Controller'); ?></dt>
		<dd>
			<?php echo h($wizard['Wizard']['controller']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($wizard['Wizard']['action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($wizard['Wizard']['data']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wizard'), array('action' => 'edit', $wizard['Wizard']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wizard'), array('action' => 'delete', $wizard['Wizard']['id']), null, __('Are you sure you want to delete # %s?', $wizard['Wizard']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Wizards'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wizard'), array('action' => 'add')); ?> </li>
	</ul>
</div>
