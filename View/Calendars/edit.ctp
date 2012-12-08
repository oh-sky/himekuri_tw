<div class="calendars form">
<?php echo $this->Form->create('Calendar'); ?>
	<fieldset>
		<legend><?php echo __('Edit Calendar'); ?></legend>
	<?php
    echo $this->Html->image('/calendars/showimage/'.$this->request->data['Calendar']['date'],array('width'=>'400'));
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('message');
		echo $this->Form->input('author_id');
		echo $this->Form->input('comment');
//		echo $this->Form->input('image');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Calendar.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Calendar.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Calendars'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('controller' => 'authors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('controller' => 'authors', 'action' => 'add')); ?> </li>
	</ul>
</div>
