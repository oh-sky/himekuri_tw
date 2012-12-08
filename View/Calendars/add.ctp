<div class="calendars form">
<?php echo $this->Form->create('Calendar'); ?>
	<fieldset>
		<legend><?php echo __('Add Calendar'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('message');
		echo $this->Form->input('author_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Calendars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
