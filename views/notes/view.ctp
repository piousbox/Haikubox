<div class="notes view">
<h2><?php  __('Note');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Body'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['body']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Row Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $note['Note']['row_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Note', true), array('action' => 'edit', $note['Note']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Note', true), array('action' => 'delete', $note['Note']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $note['Note']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Notes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Note', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
