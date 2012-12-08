<div class="authors view">
<h2><?php  echo __('Author'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($author['Author']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($author['Author']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Author'), array('action' => 'edit', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Author'), array('action' => 'delete', $author['Author']['id']), null, __('Are you sure you want to delete # %s?', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calendars'), array('controller' => 'calendars', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calendar'), array('controller' => 'calendars', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Calendars'); ?></h3>
	<?php if (!empty($author['Calendar'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Image'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($author['Calendar'] as $calendar): ?>
		<tr>
			<td><?php echo $calendar['id']; ?></td>
			<td><?php echo $calendar['date']; ?></td>
			<td><?php echo $calendar['message']; ?></td>
			<td><?php echo $calendar['author_id']; ?></td>
			<td><?php echo $calendar['comment']; ?></td>
			<td><?php echo $calendar['image']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'calendars', 'action' => 'view', $calendar['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'calendars', 'action' => 'edit', $calendar['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'calendars', 'action' => 'delete', $calendar['id']), null, __('Are you sure you want to delete # %s?', $calendar['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Calendar'), array('controller' => 'calendars', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
