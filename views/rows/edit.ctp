<div class="rows form">
<?php echo $form->create('Row');?>
	<fieldset>
 		<legend><?php __('Edit Row');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('service_name');
		echo $form->input('host_url');
		echo $form->input('username');
		echo $form->input('passphrase');
		echo $form->input('descr');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Row.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Row.id'))); ?></li>
		<li><?php echo $html->link(__('List Rows', true), array('action' => 'index'));?></li>
	</ul>
</div>
